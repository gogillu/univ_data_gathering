<?php
    session_start();
    include("../credential.php");
    
    echo "<option value='".""."'>"."Select"."</option>";

    $connection = mysqli_connect($servername, $username, $password, $dbname);
    $prog = "SELECT DISTINCT Prog_code FROM programme WHERE Uname LIKE '".$_SESSION['username']."'";
    $res  = mysqli_query($connection,$prog);
    
    while($row = $res->fetch_assoc()){
        echo "<option value='".$row['Prog_code']."'>".$row['Prog_code']."</option>";
    }
?>