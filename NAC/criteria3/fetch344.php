<?php
	
    session_start();
    include("../credential.php");
    
    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "Select * from t3_4_4 where Username like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
	while($row = $res->fetch_assoc()){
        echo  '<tr id = "'.$row["id_time"].'"><td><center><input type="text" value = "'.$row["Name"].'" placeholder="Name" style="width:200px;" required></center></td>'.
              '<td><center><input type="text" placeholder="Department" value = "'.$row["Department"].'" style="width:200px;" disabled></center></td>'.
              '<td><center><input type="text" placeholder="Guide/s" value = "'.$row["Guide"].'" style="width:200px;" required></center></td>'.
              '<td><center><input type="text" placeholder="Title" value = "'.$row["Title"].'" style="width:200px;" required></center></td>'.
              '<td><center><input type="text" placeholder="Year of Registeration" value = "'.$row["Reg"].'" style="width:200px;" required></center></td>'.'<td><center><input type ="text" placeholder="Year" value = "'.$row["Year"].'"  style="width:200px;" required></select></center></td>'.
              '<td><center><select placeholder="Year" class="year" style="width:165px;" value = "'.$row["Period"].'" required></select></center></td>'.
			  '<td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td></tr>';
    }
	
?>