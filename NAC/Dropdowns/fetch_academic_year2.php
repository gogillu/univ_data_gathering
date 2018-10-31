<?php
    session_start();
    include("../credential.php");
    
    echo "<option value=''>"."Select"."</option>";

    $connection = mysqli_connect($servername, $username, $password, $dbname);
    $prog = "SELECT DISTINCT Year FROM academic_year2";
    $res  = mysqli_query($connection,$prog);
    
    while($row = $res->fetch_assoc()){
        echo "<option value='".$row['Year']."'>".$row['Year']."</option>";
    }
?>