<?php
	
    session_start();
    include("../credential.php");
    
    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "Select * from t6_5_3 where Uname like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
	while($row = $res->fetch_assoc()){
        echo '<tr id="id'.$row['id_time'].'" ><td><center><select id="y'.$row['id_time'].'" required  style="width:175px;" value="'.$row['Year'].'"></select></center></td><td><center><input type="text" value="'.$row['Quality_name'].'" placeholder="Quality Name" style="width:200px;"></center></td><td><center><input  type="date" value="'.$row['Date_from'].'" placeholder="Conference Name" style="width:200px;" required></center></td><td><center><input  type="date" value="'.$row['Date_to'].'" placeholder="Conference Name" style="width:200px;" required></center></td><td><center><input  type="text" value="'.$row['Duration'].'" placeholder="Number" style="width:200px;" required></center></td><td><center><input  type="number" value="'.$row['participant_no'].'" placeholder="amount" style="width:200px;" required></center></td><td class="remove"><center><button type="button" onclick="remove_row(this);">Remove</button></center></td></tr>';
    }
?>