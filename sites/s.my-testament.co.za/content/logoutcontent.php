<?php
function pagecontent($data){
  if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }

  session_unset();
  $_SESSION = array();
  session_destroy();

  echo '
  <div class="container-fluid">
  <div class="row" >
  <div class="col-md-12 col-md-offset-2">

  <div class="login-form" align="center">
  <form action="login.php" method="post">
  <h2 class="text-center">You have been logged out</h2>       
  <br><br>
  <div class="form-group">
  <button type="submit" class="btn-block alert alert-warning">Log in</button>
  </div>
  </form>
  </div>

  </div>
  </div>
  </div>

  ';
}
?>
