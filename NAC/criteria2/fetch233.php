<?php
	
    session_start();
    include("../credential.php");
    
    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "Select * from t2_3_3 where Uname like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
	while($row = $res->fetch_assoc()){
	  echo '<tr id="id'.$row['id_time'].'" ><td><center><select value = "'.$row['Year'].'" id="y'.$row['id_time'].'" placeholder="Year" style="width:175px;" ></select></center></td><td><center><input type="number" onkeypress="return event.charCode >= 48" placeholder="Number of Students " style="width:250px;" value="'.$row['Student_number'].'" required></center></td><td><center><input type="number" onkeypress="return event.charCode >= 48" placeholder="Number of Students " style="width:250px;" value="'.$row['Full_time_teacher'].'" required></center></td><td><center><input type="number" onkeypress="return event.charCode >= 48" placeholder="Number of Students " style="width:250px;" value="'.$row['mentor_ratio'].'" required></center></td><td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td></tr>';
    }
	
?>