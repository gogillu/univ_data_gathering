<?php
	
    session_start();
    include("../credential.php");
    
    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "Select * from t6_3_2 where Uname like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
	while($row = $res->fetch_assoc()){
        echo '<tr id="id'.$row['id_time'].'" ><td><center><select id="y'.$row['id_time'].'" required  style="width:175px;" value="'.$row['Year'].'"></select></center></td><td><center><input type="text" value="'.$row['Teacher_name'].'" placeholder="Teacher Name" style="width:200px;"></center></td><td><center><input type="text" value="'.$row['Pan_no'].'" placeholder="PAN NO" style="width:200px;" required></center></td><td><center><input  type="text" value="'.$row['conference_name'].'" placeholder="Conference Name" style="width:200px;" required></center></td><td><center><input  type="text" value="'.$row['proffessional_body_name'].'" placeholder="Name" style="width:200px;" required></center></td><td><center><input  type="number" value="'.$row['amount'].'" placeholder="amount" style="width:200px;" required></center></td><td class="remove"><center><button type="button" onclick="remove_row(this);">Remove</button></center></td></tr>';
    }
?>