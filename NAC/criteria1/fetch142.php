<?php

    session_start();
    include("../credential.php");

    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "Select * from t1_4_2 where Username like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));

	while($row = $res->fetch_assoc()){
		echo '<tr id = "'.$row["id_time"].'"><td><center><select id="s'.$row["id_time"].'" style="width:200px" value = "'.$row["opt"].'"><option value = "A">A</option><option value = "B"> B</option><option value = "C"> C</option><option value = "D"> D</option><option value = "E"> E</option></select></center></td><td><center><input type="text" value="'.$row["url"].'" style="width:250px"></center></td>   <td class="remove"><center><button onclick="remove_row(this);" type="button">Remove</button></center></td>  </tr>';
	}

?>