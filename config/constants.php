<?php 
    //Start Session
    session_start();


    //Create Constants to Store Non Repeating Values
    define('SITEURL', 'http://web.hci-food.tk/');
    define('LOCALHOST', 'localhost');
    define('DB_USERNAME', 'webchci_ce_2');
    define('DB_PASSWORD', 'in177XPtDOfHo4');
    define('DB_NAME', 'webhci_ce_2');
    
    $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error("")); //Database Connection
    $db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error("")); //SElecting Database


?>