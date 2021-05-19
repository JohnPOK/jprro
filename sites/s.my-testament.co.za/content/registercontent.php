    <?php

    require_once "accounts/whmcsapi.php";

    function pagecontent($data){
      $error_firstname = "";
      $error_lastname = "";
      $error_email = "";
      $error_password = "";
      $error_confirmpassword = "";
      $error_securephrase = "";
      $error_message = "";
      $error_tc = "";
      $error = false;
      $success = false;
      if (isset($_POST["firstname"])) {
        $firstname = trim($_POST["firstname"]);
        $lastname = trim($_POST["lastname"]);
        $email = trim($_POST["email"]);
        $securephrase = trim($_POST["securephrase"]);
        $password = trim($_POST["password"]);
        $confirmpassword = trim($_POST["confirmpassword"]);
        $tc = "";
        if (isset($_POST["tc"])){
          $tc = trim($_POST["tc"]);
        }
        
        if($_SERVER["REQUEST_METHOD"] == "POST"){
          if(empty(trim($_POST["firstname"]))){
            $error_firstname = "Please enter your name";
            $error = true;
          }
          if(empty(trim($_POST["lastname"]))){
            $error_lastname = "Please enter your surname";
            $error = true;
          }
          if(empty(trim($_POST["email"]))){
            $error_email = "Please enter a valid email address";
            $error = true;
          }
          if(empty(trim($_POST["securephrase"]))){
            $error_securephrase = "Please enter a secure phrase that only you know, used to reset your password if necessary";
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
          if("$tc" != "accept"){
            $error_tc = "Please read and accept the My Testament privacy policy.";
            $error = true;
          }
          
          if ($error == false){
            $api = new WHMCSAPI();
            $api->register(
              $firstname,
              $lastname,
              $email,
              "anonymous",//$address1,
              "anonymous",//$city,
              "anonymous",//$state,
              "0000",//$postcode,
              "ZA",
              "0000",//$phonenumber,
              $password,
              $securephrase);
            $success = true;

            $data = json_decode($api->response);
            if ($data->{'result'} == 'error') {
              $error_message = $data->{'message'};
              $error = true;
              $success = false;
            }

            if(!isset($data->{'clientid'}) && ($error == false)){
              $error_message = "An error occurred interpreting the information you provided.";
              $error = true;
              $success = false;
            }

            $_SESSION["loggedin"] = true;
            $_SESSION["role"] = "Owner";
            $_SESSION["id"] = $data->{'clientid'};      
          } 
          if ($error == true){
            print("<div><p class='alert alert-warning'>Missing or invalid fields. Please ensure all required fields are filled in.<br>");
            // if requiring the phone number field, also stat here 'Please do not include a country code in your phone number'
            if (empty(trim($error_message)) == false){
              print($error_message."<br></p></div>");
            }
          }
        } else {
          print("Only POST accepted here.");
        }
      } else {
        $firstname = "";
        $lastname = "";
        $email = "";
        $address1 = "";
        $city = "";
        $postcode = "";
        $state = "";
        $country = "";
        $phonenumber = "";
        $securephrase = "";
        $password = "";
        $confirmpassword = "";
      }

      if ($success == true){
        $api = new WHMCSAPI();
	    $api->autoauth();
      } else {
        echo '
        <script>var submitted = false;</script>
        <div class="container-fluid">

        <div class="row" >
        <div class="col-md-12 col-md-offset-2">
        <div class="login-form" align="center">
        <form id="form" action="register.php" method="post">
        <input type="hidden" name="token" value="'.$_SESSION['token'].'">
        <br>
        <div class="form-group">
        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First name" required="required" value="'.htmlspecialchars($firstname).'">
        <span class="help-block">'.$error_firstname.'</span>
        </div>
        <div class="form-group">
        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Surname" required="required" value="'.htmlspecialchars($lastname).'">
        <span class="help-block">'.$error_lastname.'</span>
        </div>
        <div class="form-group">
        <input type="text" class="form-control" id="email" name="email" placeholder="Email address" required="required" value="'.htmlspecialchars($email).'">
        <span class="help-block">'.$error_email.'</span>
        </div>
        <div class="form-group">
        <input type="password" class="form-control" id="password" name="password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{12,}" required="required" value="">
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
        <button type="submit" class="btn-block alert alert-warning" id="action" name="action" value="monthly" onclick="if (!submitted) { submitted = true; document.getElementById(\'form\').submit(); } else { return false;}">REGISTER</button>
        <div class="form-group">
        <input type="checkbox" id="tc" name="tc" value="accept">&nbsp;&nbsp;I have read and accept the My Testament it safe <a href="https://my-testament.co.za/en/privacy_policy.html">privacy policy</a></a></input>
        <span class="help-block">'.$error_tc.'</span>
        </div>
        </div>
        </form>
        </div>
        </div>
        </div>
        </div>

        <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
        <script>
        $(function(){
          $("input[name*=\"password\"]")[0].oninvalid=function(){
            this.setCustomValidity("Please use a strong password. At least 12 characters, containing at least one digit, at least one lowercase character and at least one upper case character.");
          };
        });
        $(function(){
          $("input[name*=password]")[0].oninput=function(){
            this.setCustomValidity("");
          };
        });
        </script>
        ';
      }
    }
    ?>
