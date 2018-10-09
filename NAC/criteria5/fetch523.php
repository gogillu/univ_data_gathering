<?php
	
    session_start();
    include("../credential.php");
    
    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "Select * from t5_2_3 where Uname like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
	while($row = $res->fetch_assoc()){
        echo '<tr id="id'.$row['id_time'].'" >
			
		<td><center><select value = "'.$row['Year'].'" id="y'.$row['id_time'].'" placeholder="Year" style="width:180px;" required></select></center></td>
		
		<td><center><input type="text" value="'.$row['rollnumber'].'" placeholder="" style="width:150px;" required></center></td>
		
		<td><center><select id="per'.$row['id_time'].'" value="'.$row['exam'].'" placeholder="" style="width:150px;" required ><option value="NET">NET</option><option value="SLET">SLET</option><option value="GATE">GATE</option><optionvalue="GMAT">GMAT</option><option value="CAT">CAT</option><option value="GRE">GRE</option><option value="TOEFL">TOEFL</option>3<option value="CIVIL SERVICES">CIVIL SERVICES</option><option value="OTHER STATE EXAMS">OTHER STATE EXAMS</option></select></center></td>
		
		
		
		<td class="remove"><center><button type="button" onclick="remove_row(this);">Remove</button></center></td></tr>';
    }
	
?>
