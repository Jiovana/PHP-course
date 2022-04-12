<?php
    session_start();
    unset($_SESSION['name']);//removes individual varibles


    session_destroy();

?>