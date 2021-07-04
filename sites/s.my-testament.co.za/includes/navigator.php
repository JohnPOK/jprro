<?php
function emptynavigator(){
    echo '
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-my-testament fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">MY TESTAMENT</a>
    </div>
  </nav>
    ';
}

function pagenavigator(){
    echo '
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-my-testament fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">MY TESTAMENT</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/index.php">My Safe
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://accounts.my-testament.co.za/accounts">Account</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://accounts.my-testament.co.za/accounts/submitticket.php?step=2&deptid=1">Support</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/logout.php">Logout</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">&nbsp;&nbsp;&nbsp;&nbsp;</a>
          </li>          
          <li class="nav-item">
            <a style="font-weight: bold" class="nav-link" href="#">AFRIKAANS</a>
          </li>
          <li class="nav-item">
            <a style="font-weight: bold" class="nav-link" href="#">ENGLISH</a>
          </li>          
        </ul>
      </div>
    </div>
  </nav>
    ';
}
?>
