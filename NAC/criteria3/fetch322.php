<?php
	
    session_start();
    include("../credential.php");
    
    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "Select * from t3_2_2 where Username like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
	while($row = $res->fetch_assoc()){
        echo  '<tr id = "'.$row["id_time"].'"><td><center><input type="text" value = "'.$row["Project"].'" placeholder="Name of Project" style="width:250px;" required></center></td>'.
              '<td><center><input type="text" placeholder="Name of Principal Investigator" value = "'.$row["Principal"].'" style="width:250px;" required></center></td>'.
              '<td><center><input type="text" placeholder="Department of Principal Investigator" value = "'.$row["Department"].'" style="width:250px;" required></center></td>'.
			  '<td><center><select placeholder="Year" class="year" value = "'.$row["Year"].'" style="width:165px;" required></select></center></td>'.
			  '<td><center><input type="number" placeholder="Funds" value = "'.$row["Funds"].'" style="width:160px;" required></center></td>'.
			  '<td><center><input type="number" placeholder="Duration" value = "'.$row["Duration"].'" style="width:160px;" required></center></td>'.
'<td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td></tr>';
    }
	
?>
