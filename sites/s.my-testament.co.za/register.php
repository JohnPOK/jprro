<?php
include_once "includes.php";
includes();
include "content/registercontent.php";

docopen();
pageheader();
wrapperopen();
emptysidebar();
mainopen();
emptynavigator();
content("register");
mainclose();
wrapperclose();
pagefooter();
pagescripts();
docclose();
?>
