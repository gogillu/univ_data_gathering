<?php
	
    session_start();
    include("../credential.php");
    
    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "Select * from t5_2_1 where Uname like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
	while($row = $res->fetch_assoc()){
        echo '<tr id="id'.$row['id_time'].'" >
			
		<td><center><select value = "'.$row['Year'].'" id="y'.$row['id_time'].'" placeholder="Year" style="width:180px;" required></select></center></td>
		
		<td><center><select value = "'.$row['program_graduated_from'].'" id="p'.$row['id_time'].'" placeholder="Year" style="width:165px;" required></select></center></td>
		
		<td><center><input id="npid'.$row['id_time'].'" type="text" value="'.$row['prog_name'].'" placeholder="Programme Name" style="width:250px;" disabled></center></td>
		
		<td><center><input id="per'.$row['id_time'].'" type="number" value="'.$row['number_of_student_placed'].'" placeholder="Percentage" style="width:120px;" required></center></td>
	
		
		<td><center><input id="per'.$row['id_time'].'" type="text" value="'.$row['name_of_employer_with_details'].'" placeholder="Percentage" style="width:120px;" required></center></td>
		
		<td><center><input id="per'.$row['id_time'].'" type="number" value="'.$row['package_received'].'" placeholder="Percentage" style="width:120px;" required></center></td>
		
	
		
		<td class="remove"><center><button type="button" onclick="remove_row(this);">Remove</button></center></td></tr>';
    }
	
?>
