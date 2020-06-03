<?php 
    # Define constants for paths to this file
    # Find this files location and get directory
    define("PRIVATE_PATH", dirname(__FILE__));
    define("PROJECT_PATH", dirname(PRIVATE_PATH));
    define("PUBLIC_PATH", PROJECT_PATH . '/public/');
    define("SHARED_PATH", PRIVATE_PATH . '/shared/');

    require_once('functions.php');
?>