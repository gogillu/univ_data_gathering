<?php
	
    session_start();
    include("../credential.php");
    
    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "select distinct * from t4_3_2 where Username like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
	while($row = $res->fetch_assoc()){
	 echo '<tr id="id3" ><td><center><input type="number" id="pid"  value="'.$row['numbers'].'" style="width:150px;" required></center></td><td><center><input type="number" id="cid"  value="'.$row['numberc'].'"  style="width:150px;" required></select></center></td><td class="remove" style="width:40px;"><center><button type="button" onclick="remove_row(this);">Remove</button></center></td></tr>';
    }
	
?>
