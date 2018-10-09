<?php
	
    session_start();
    include("../credential.php");
    
    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "Select * from t7_1_8 where Uname like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
	while($row = $res->fetch_assoc()){
        echo '<tr id="id'.$row['id_time'].'" >
			
		<td><center><select value = "'.$row['Year'].'" id="y'.$row['id_time'].'" placeholder="Year" style="width:180px;" required></select></center></td>
				
		<td><center><input id="per'.$row['id_time'].'" type="number" min="0" value="'.$row['budget_green'].'" placeholder="" style="width:180px;" required></center></td>
		<td><center><input id="per'.$row['id_time'].'" type="number" min="0" value="'.$row['expenditure_green'].'" placeholder="" style="width:180px;" required></center></td>
		<td><center><input id="per'.$row['id_time'].'" type="number" min="0" value="'.$row['annual_expenditure'].'" placeholder="" style="width:180px;" required></center></td>
						
		<td class="remove"><center><button type="button" onclick="remove_row(this);">Remove</button></center></td></tr>';
    }
	
?>
