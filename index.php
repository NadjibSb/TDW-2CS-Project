<?php
    session_start();
    
    define('ROOT_DIR', dirname(__FILE__),true);
    define('ROOT_URL', substr($_SERVER['PHP_SELF'], 0, - (strlen($_SERVER['SCRIPT_FILENAME']) - strlen(ROOT_DIR))));
    $_SESSION["ROOT_DIR"] = ROOT_DIR;
    $_SESSION["ROOT_URL"] = ROOT_URL;

    header("location: ./Accueil");
?>