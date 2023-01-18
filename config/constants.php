<?php 
    //start session
    session_start();
    define('SITE_URL','http://localhost/IS1109/');

    /* composer autoload */
    require SITE_URL . 'vendor/autoload.php';

    /* load PHP dotenv library */
    // $dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
    // $dotenv->load();

    include 'connection.php';    
    // $conn = mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD) or die(mysqli_error($conn));
    // $db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error($conn));
?>