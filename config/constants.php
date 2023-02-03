<?php 
    //start session

    session_start();
    define('SITE_URL','http://localhost/IS1109/');
    define('API_KEY', '4f2ed61f9d974c3ea1848e563efa7f82');

    /* composer autoload */
    require SITE_URL . 'vendor/autoload.php';
    include_once '../libs/CSRF-Protector-PHP/libs/csrf/csrfprotector.php';

    include 'connection.php';    
?>