<<?php 
session_start();
 error_reporting(0);
 
    $varsesion = $_SESSION['email'];
    if($varsesion == null || $varsesion = ''){
        echo 'Usted no tiene autorizacion';
        die();
    }

session_destroy();
header("location: index.php")
 ?>