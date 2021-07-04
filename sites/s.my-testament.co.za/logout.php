<?php
include_once "includes.php";
includes();
include "content/logoutcontent.php";

if (session_status() != PHP_SESSION_NONE) {
    session_unset();
}

docopen();
pageheader();
wrapperopen();
emptysidebar();
mainopen();
emptynavigator();
content("logout");
mainclose();
wrapperclose();
pagefooter();
pagescripts();
docclose();
?>
