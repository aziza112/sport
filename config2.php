<?php 
    $conn = new mysqli("localhost","root","","sportnews1");
    if($conn->connect_error){
        die("Connection Failed!".$conn->connect_error);
    }
?>
