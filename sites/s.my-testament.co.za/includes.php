<?php
error_reporting(E_ALL);

function includes(){
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    include "accounts/whmcsapi.php";
    include "includes/header.php";
    include "includes/footer.php";
    include "includes/sidebar.php";
    include "includes/navigator.php";
    include "includes/scripts.php";

    if (empty($_SESSION['token'])) {
        $_SESSION['token'] = bin2hex(openssl_random_pseudo_bytes(32));
    }  

    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
        // logged in
    } else {
        if ((strpos($_SERVER['REQUEST_URI'], 'login.php') == false) &&
            (strpos($_SERVER['REQUEST_URI'], 'register.php') == false) &&
            (strpos($_SERVER['REQUEST_URI'], 'forgetpassword.php') == false))
        {   
            header("location: login.php");
            exit;
        }   
    }
}

function get_temp_path(){
    $temp = tmpfile();
    $meta = stream_get_meta_data($temp);
    return $meta['uri'];
}

function ensure_active(){
    $api = new WHMCSAPI();
    $api->ensure_active();
}

function ensureUserDirectory(){
    $dirname = "/data2/".$_SESSION["id"];
    if (!is_dir($dirname)){
        mkdir($dirname, 0700, true);
    }
    return $dirname;
}

function debuglog($message){
    $timestamp = date("Y/m/d")." ".date("h:i:sa");
    $fp = fopen('my-testament.log', 'a');
    fwrite($fp, $timestamp." ".$message."\n");
    fclose($fp);
}

function debugarray($array, $title){
    $fp = fopen('my-testament.log', 'a');
    fwrite($fp, "[".$title."]\n");
    foreach ($array as $key=>$value){
        fwrite($fp, "[".$key."] => [".$value."]\n");
    }
    fclose($fp);
}

?>
