<?php
	
    session_start();
    include("../credential.php");
    
    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "Select * from t7_1_14 where Uname like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
	while($row = $res->fetch_assoc()){
        echo '<tr id="id'.$row['id_time'].'" >
		<td><center><select value = "'.$row['Year'].'" id="y'.$row['id_time'].'" placeholder="Year" style="width:165px;" required></select></center></td>
		
		<td><center><input id="per'.$row['id_time'].'" type="text" value="'.$row['sno'].'" placeholder="" style="width:150px;" required></center></td>
			
		<td><center><input id="per'.$row['id_time'].'" type="text" value="'.$row['title'].'" placeholder="" style="width:150px;" required></center></td>
		
		<td><center><input id="per'.$row['id_time'].'" type="date" value="'.$row['date_from'].'" placeholder="dd/mm/yy" style="width:150px;" required></center></td>
		
		<td><center><input id="per'.$row['id_time'].'" type="date" value="'.$row['date_to'].'" placeholder="dd/mm/yy" style="width:150px;" required></center></td>
		
		<td><center><input id="per'.$row['id_time'].'" type="number" value="'.$row['participants'].'" placeholder="" style="width:150px;" required></center></td>
	
	<td><center><input id="per'.$row['id_time'].'" type="number" value="'.$row['link'].'" placeholder="" style="width:150px;" required></center></td>
		
		<td class="remove"><center><button type="button" onclick="remove_row(this);">Remove</button></center></td></tr>';
    }
	
?>