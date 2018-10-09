<?php
	
    session_start();
    include("../credential.php");
    
    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "Select * from t2_4_3 where Uname like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
	while($row = $res->fetch_assoc()){
	  echo '<tr id="id'.$row['id_time'].'" ><td><center><input type="text" placeholder="Name" style="width:250px;" value="'.$row['Teacher_name'].'" required></center></td><td><center><input type="text" placeholder="PAN No." style="width:250px;" value="'.$row['Pan_no'].'" required></center></td><td><center><input type="text" placeholder="Designation" style="width:250px;" value="'.$row['Designation'].'" required></center></td><td><center><input type="text" placeholder="Number of Sanctioned post" style="width:250px;" value="'.$row['Name_of_Dept'].'" required></center></td><td><center><input type="text"  placeholder="Experience" style="width:250px;" value="'.$row['Experience'].'" required></center></td><td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td></tr>';
    }
	
?>
