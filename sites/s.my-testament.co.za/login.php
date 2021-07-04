<?php
if (session_status() != PHP_SESSION_NONE) {
    session_unset();
}
include_once "includes.php";
includes();
include "content/logincontent.php";

docopen();
pageheader();
wrapperopen();
emptysidebar();
mainopen();
emptynavigator();
content("login");
mainclose();
wrapperclose();
pagefooter();
pagescripts();
docclose();
?>
