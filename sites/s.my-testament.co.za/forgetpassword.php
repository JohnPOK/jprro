<?php
include_once "includes.php";
includes();
include "content/forgetpasswordcontent.php";

docopen();
pageheader();
wrapperopen();
emptysidebar();
mainopen();
emptynavigator();
content("forgetpassword");
pagefooter();
mainclose();
wrapperclose();
pagescripts();
docclose();
?>
