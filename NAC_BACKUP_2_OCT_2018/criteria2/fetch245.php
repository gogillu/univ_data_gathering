<?php
	
    session_start();
    include("../credential.php");
    
    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "Select * from t2_4_5 where Uname like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
	while($row = $res->fetch_assoc()){
	  echo '<tr id="id'.$row['id_time'].'" ><td><center><select value = "'.$row['Year'].'" id="y'.$row['id_time'].'" placeholder="Year" style="width:175px;" ></select></center></td><td><center><input type="text" placeholder="Name" style="width:250px;" value="'.$row['Teacher_name'].'" required></center></td><td><center><input type="text" placeholder="Name" style="width:250px;" value="'.$row['State'].'" required></center></td><td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td></tr>';
    }
	
?>
