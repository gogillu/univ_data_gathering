<?php
	
    session_start();
    include("../credential.php");
    
    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "Select * from t3_4_2 where Username like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
	while($row = $res->fetch_assoc()){
        echo  '<tr id = "'.$row["id_time"].'"><td><center><input type="text"   value = "'.$row["Name"].'"placeholder="Name" style="width:200px;" required></center></td>'.
              '<td><center><input type="text" placeholder="Award" style="width:200px;"  value = "'.$row["Award"].'" required></center></td>'.
              '<td><center><input type="text" placeholder="Agency" style="width:200px;"  value = "'.$row["Agency"].'" required></center></td>'.
              '<td><center><select placeholder="Year" class="year" style="width:165px;"  value = "'.$row["Year"].'" required></select></center></td>'.'<td><center><input type ="text" placeholder="Year" value = "'.$row["Period"].'"  style="width:200px;" required></select></center></td>'.
              '<td><center><input type="text" placeholder="Details" style="width:200px;"  value = "'.$row["Details"].'" required></center></td>'.
			  '<td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td></tr>';
    }
	
?>
