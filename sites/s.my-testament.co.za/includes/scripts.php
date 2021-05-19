<?php
function pagescripts(){
    echo '
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    ';

    if (function_exists("pageadditionalscripts")){
        pageadditionalscripts();
    }
}
?>
