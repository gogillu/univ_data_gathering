<?php
	
    session_start();
    include("../credential.php");
    
    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "Select * from t4_3_4 where Uname like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
	while($row = $res->fetch_assoc()){
	  echo '<tr id="id'.$row['id_time'].'" ><td><center><input type="text" id="pid'.$row['id_time'].'" required style="width:250px;" value="'.$row['namee'].'"></select></center></td><td><center><input id="npid'.$row['id_time'].'" type="text" value="'.$row['linkm'].'"  style="width:165px;" ></center></td><td class="remove"><center><button type="button" onclick="remove_row(this);" >Remove</button></center></td></tr>';
    }
	
?>
