<?php
	
    session_start();
    include("../credential.php");
    
    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "Select * from t3_1_6 where Username like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
	while($row = $res->fetch_assoc()){
        echo  '<tr id = "'.$row["id_time"].'"><td><center><input type="text" value = "'.$row["Scheme"].'" placeholder="Name of Scheme" style="width:250px;" required></center></td>'.
              '<td><center><input type="text" placeholder="Name of Agency" style="width:250px;" value = "'.$row["Agency"].'" required></center></td>'.
			  '<td><center><select placeholder="Year" class="year" style="width:165px;" value = "'.$row["Year"].'" required></select></center></td>'.
			  '<td><center><input type="number" placeholder="Funds" style="width:160px;" value = "'.$row["Funds"].'" required></center></td>'.
			  '<td><center><input type="number" placeholder="Duration" style="width:160px;" value = "'.$row["Duration"].'" required></center></td></tr>';
    }
	
?>
