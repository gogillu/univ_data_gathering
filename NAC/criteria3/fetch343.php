<?php
	
    session_start();
    include("../credential.php");
    
    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "Select * from t3_4_3 where Username like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
	while($row = $res->fetch_assoc()){
        echo  '<tr id = "'.$row["id_time"].'"><td><center><input type="text" value = "'.$row["Name"].'" placeholder="Name" style="width:200px;" required></center></td>'.
              
              '<td><center><input type="text" placeholder="Patent Number" style="width:200px;" value = "'.$row["Number"].'" required></center></td>'.
'<td><center><select placeholder="Year" class="year" style="width:165px;" value = "'.$row["Year"].'" required></select></center></td>'.
			  '<td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td></tr>';
    }
	
?>