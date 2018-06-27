<?php
   require 'C:\Program Files (x86)\Ampps\apache\htdocs\UX-UI\Front-End\redirect.php';

    session_start();
    session_destroy();

    redirect("../SIGNIN/index.php");
?>