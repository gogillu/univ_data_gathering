<?php
	
    session_start();
    include("../credential.php");
    
    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "Select * from t4_2_1 where Uname like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
	while($row = $res->fetch_assoc()){
	 echo '<tr id="id'.$row['id_time'].'" ><td><center><input id="ncid'.$row['id_time'].'" type="text"  value = "'.$row['nameil'].'" style="width:160px;" ></center></td><td><center><input type="text" id="pid'.$row['id_time'].'" required   style="width:200px;" value="'.$row['nature'].'"></center></td><td><center><input id="npid'.$row['id_time'].'" type="text" value="'.$row['version'].'"  style="width:150px;" ></center></td><td><center><select value = "'.$row['yearat'].'" id="y'.$row['id_time'].'" placeholder="Year" style="width:175px;" ></select></center></td><td class="remove"><center><button type="button" onclick="remove_row(this);">Remove</button></center></td></tr>';
    }
	
?>
