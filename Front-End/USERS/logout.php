<?php
   require "/Applications/MAMP/htdocs/LordStride/Front-End/redirect.php";

    session_start();
    session_destroy();

    redirect("../SIGNIN/index.php");
?>