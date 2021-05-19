<?php

require_once "accounts/whmcsapi.php";

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: index.php");
    exit;
}

function pagecontent($data){
    $error = false;
    if (isset($_POST["email"])) {
        $email = trim($_POST["email"]);
        $password = trim($_POST["password"]);

        $api = new WHMCSAPI();
        $api->validate(
          $email,
          $password);
        //print($api->response);

        $data = json_decode($api->response);
        if ($data->{'result'} == 'error') {
            $error_message = $data->{'message'};
            $error = true;
        } else {
            $_SESSION["loggedin"] = true;
            $_SESSION["role"] = "Owner";
            $_SESSION["id"] = $data->{'userid'};
            $_SESSION["email"] = $email;

            header("Location: index.php");
        }

    } else {
        $email = $password = "";
    }

    echo '
    <div class="container-fluid">
    <div class="row" >
    <div class="col-md-12 col-md-offset-2">';

    if ($error == true){
        print("<div><p class='alert alert-warning'>Login failed:<br>");
        if (empty(trim($error_message)) == false){
          print($error_message."<br></p></div>");
      }
  }

  echo '  <div class="login-form" align="center">
  <form action="login.php" method="post">
  <h2 class="text-center">Log in</h2>       
  <input type="hidden" name="token" value="'.$_SESSION["token"].'">
  <div class="form-group">
  <input type="text" class="form-control" name="email" id="email" placeholder="Email address" required="required" value ="">
  </div>
  <div class="form-group">
  <input type="password" class="form-control" name="password" id="password" placeholder="" required="required">
  </div>
  <div class="form-group">
  <button id="submit" type="submit" class="btn-block alert alert-warning">Log in</button>
  </div>
  </div>
  <p>Forgot your password? <a href="forgetpassword.php">Reset it here.</a></p>
  <p><a href="register.php">Register</a> for a new account.</p>
  </div>
  </form>
  </div>

  </div>
  </div>
  </div>
  ';
}
?>
