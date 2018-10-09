<?php
    session_start();
    include("../credential.php");
    
    //echo $_GET["Prog_code"];
    echo "<option value='".""."'>"."Select"."</option>";

    $connection = mysqli_connect($servername, $username, $password, $dbname);
    $query = "SELECT DISTINCT Course_code FROM course WHERE Prog_code LIKE '".$_GET['Prog_code']."' AND Uname LIKE '".$_SESSION['username']."'";
    $res  = mysqli_query($connection,$query);
    
    while($row = $res->fetch_assoc()){
        echo "<option value='".$row['Course_code']."'>".$row['Course_code']."</option>";
    }
?>