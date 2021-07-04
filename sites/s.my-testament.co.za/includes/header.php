<?php

function get_lang(){
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    $params = session_get_cookie_params();
    $lang = "en";
    if (isset($params['lang'])) {
        $lang = $params['lang'];
    }
    return $lang;
}

function docopen(){
    echo '
<!DOCTYPE html>
<html lang="en">
    ';
}

function contentopen(){
    echo'
  <div class="container">
    ';
}

function mainopen(){
    echo '
    ';
}

function wrapperopen(){
    echo '
    <body>
      <div class="row">
    ';
}

function pageheader(){
    echo '
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>MY TESTAMENT - SAFE</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">

</head>
    ';
}

function wrapperclose(){
    echo '
      </div>
    </body>
    ';
}

function mainclose(){
    echo '
    ';
}

function contentclose(){
    echo'
  </div>
    ';
}

function docclose(){
    echo '
    </html>
    ';
}

function content($data){
    contentopen();
    pagecontent($data);
    contentclose();
}

function page($active, $data){
    docopen();
    pageheader();
    wrapperopen();
    pagesidebar($active);
    mainopen();
    pagenavigator();
    content($data);
    mainclose();
    wrapperclose();
    pagefooter();
    pagescripts();
    if (function_exists("pagereadyscript")){
        pagereadyscript($data);
    }
    docclose();
}

?>
