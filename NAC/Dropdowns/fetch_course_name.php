<?php
    session_start();
    include("../credential.php");
    
    $connection = mysqli_connect($servername, $username, $password, $dbname);
    $prog = "SELECT DISTINCT Course_name FROM course WHERE Course_code LIKE '".$_GET['Course_code']."' AND Uname LIKE '".$_SESSION['username']."'";
    $res  = mysqli_query($connection,$prog);
    
    $row = $res->fetch_assoc();
        echo $row['Course_name'];    
?>