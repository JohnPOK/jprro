    <?php

    require_once "accounts/whmcsapi.php";

    function pagecontent($data){
      $error_email = "";
      $error_password = "";
      $error_confirmpassword = "";
      $error_securephrase = "";
      $error_message = "";
      $error = false;
      $success = false;
      if (isset($_POST["email"])) {
        $email = trim($_POST["email"]);
        $securephrase = trim($_POST["securephrase"]);
        $password = trim($_POST["password"]);
        $confirmpassword = trim($_POST["confirmpassword"]);
        
        if($_SERVER["REQUEST_METHOD"] == "POST"){
          if(empty(trim($_POST["email"]))){
            $error_email = "Please enter a valid email address";
            $error = true;
          }
          if(empty(trim($_POST["securephrase"]))){
            $error_securephrase = "Please enter the secure phrase that only you know";
            $error = true;
          }
          if(empty(trim($_POST["password"]))){
            $error_password = "Please enter a password.";     
            $error = true;
          } elseif(strlen(trim($_POST["password"])) < 12){
            $error_password = "Password must have at least 12 characters.";
            $error = true;
          } else{
            $password = trim($_POST["password"]);
          }
          if(empty(trim($_POST["confirmpassword"]))){
            $error_confirmpassword = "Please confirm password.";     
            $error = true;
          } else{
            $confirmpassword = trim($_POST["confirmpassword"]);
            if(empty($password_err) && ($password != $confirmpassword)){
              $error_password = "Passwords did not match.";
              $error = true;
            }
          }
          
          if ($error == false){
            $api = new WHMCSAPI();
            $api->details($email);

            $success = true;

            $data = json_decode($api->response);
            if ($data->{'result'} == 'error') {
              $error_message = $data->{'message'};
              $error = true;
              $success = false;
            } else {
              if($securephrase != $data->{'securityqans'}){
                $error_message = "Incorrect secure phrase!";
                $error = true;
                $success = false;
              } else {
                $api->update($data->{'userid'}, $password);

                $success = true;

                $data = json_decode($api->response);
                if ($data->{'result'} == 'error') {
                  $error_message = $data->{'message'};
                  $error = true;
                  $success = false;
                }
              }
            }
          } 
          if ($error == true){
            print("<div><p class='alert alert-warning'>An error has occurred:<br>");
            if (empty(trim($error_message)) == false){
              print($error_message."<br></p></div>");
            }
          }
        } else {
          print("Only POST accepted here.");
        }
      } else {
        $email = "";
        $securephrase = "";
        $password = "";
        $confirmpassword = "";
      }

      if ($success == true){
        echo 'Password successfully updated!';
      } else {
        echo '
        <div class="container-fluid">
        <div class="row" >
        <div class="col-md-12 col-md-offset-2">

        <div class="login-form" align="center">
        <form action="forgetpassword.php" method="post" autocomplete="off">
        <input type="hidden" name="token" value="'.$_SESSION["token"].'">
        <h2 class="text-center">Password Update</h2>       
        <div class="form-group">
        <input type="text" class="form-control" id="email" name="email" placeholder="Email address" required="required" value="'.htmlspecialchars($email).'">
        <span class="help-block">'.$error_email.'</span>
        </div>
        <div class="form-group">
        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required="required" value="">
        <span class="help-block">'.$error_password.'</span>
        </div>
        <div class="form-group">
        <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" placeholder="Confirm password" required="required" value="">
        <span class="help-block">'.$error_confirmpassword.'</span>
        </div>
        <div class="form-group">
        <input type="text" class="form-control" id="securephrase" name="securephrase" placeholder="Secure phrase that only you know, used for password reset" required="required" value="'.htmlspecialchars($securephrase).'">
        <span class="help-block">'.$error_securephrase.'</span>
        </div>
        <div class="form-group">
        <button type="submit" class="btn-block alert alert-warning">Update</button>
        </div>
        </form>
        </div>
        </div>
        </div>
        </div>
        ';
      }
    }
    ?>
