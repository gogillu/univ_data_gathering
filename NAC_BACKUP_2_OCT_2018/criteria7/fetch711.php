<?php
	
    session_start();
    include("../credential.php");
    
    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "Select * from t7_1_1  where Uname like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
	while($row = $res->fetch_assoc()){
	 echo '<tr id="id'.$row['id_time'].'" ><td><center><select value = "'.$row['year'].'" id="y'.$row['id_time'].'" placeholder="Year" style="width:180px;" ></select></center></td><td><center><input id="ncid'.$row['id_time'].'" type="text" placeholder="Year" value = "'.$row['titlep'].'" style="width:180px;" ></center></td><td><center><input id="ncid'.$row['id_time'].'" type="date" placeholder="" value = "'.$row['datef'].'" style="width:180px;" ></center></td><td><center><input id="ncid'.$row['id_time'].'" type="date" placeholder="" value = "'.$row['datet'].'" style="width:180px;" ></center></td><td><center><input id="ncid'.$row['id_time'].'" type="number" min="0" placeholder="" value = "'.$row['numm'].'" style="width:180px;" ></center></td><td><center><input id="ncid'.$row['id_time'].'" type="number" min="0" placeholder="" value = "'.$row['numf'].'" style="width:180px;" ></center></td><td class="remove"><center><button type="button" onclick="remove_row(this);">Remove</button></center></td></tr>';
    }
	
?>
