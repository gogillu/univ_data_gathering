<?php
	
    session_start();
    include("../credential.php");
    
    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "Select * from t5_1_1 where Uname like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
	while($row = $res->fetch_assoc()){
        echo '<tr id="id'.$row['id_time'].'" ><td><center><select value = "'.$row['Year'].'" id="y'.$row['id_time'].'" placeholder="Year" style="width:180px;" required></select></center></td><td><center><input id="per'.$row['id_time'].'" type="text" value="'.$row['name_of_scheme'].'" placeholder="Percentage" style="width:120px;" required></center></td><td><center><input id="per'.$row['id_time'].'" type="number" value="'.$row['number_of_students_benefited_govt_scheme'].'" placeholder="Percentage" style="width:120px;" required></center></td><td class="remove"><center><button type="button" onclick="remove_row(this);">Remove</button></center></td></tr>';
    }
	
?>