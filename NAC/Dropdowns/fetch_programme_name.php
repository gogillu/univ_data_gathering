<?php
    session_start();
    include("../credential.php");
    
    $connection = mysqli_connect($servername, $username, $password, $dbname);
    $prog = "SELECT DISTINCT Prog_name FROM programme WHERE Prog_code LIKE '".$_GET['Prog_code']."' AND Username LIKE '".$_SESSION['username']."'";
    $res  = mysqli_query($connection,$prog);
    
    $row = $res->fetch_assoc();
        echo $row['Prog_name'];
    
?>