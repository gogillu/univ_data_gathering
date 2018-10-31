<?php
	
    session_start();
    include("../credential.php");
    
    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "Select * from t4_2_4 where Uname like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
	while($row = $res->fetch_assoc()){
        echo '<tr id="id'.$row['id_time'].'" ><td><center><input type="number" id="pid'.$row['id_time'].'" required style="width:200px;" value="'.$row['books'].'"></select></center></td><td><center><input id="npid'.$row['id_time'].'" type="number" value="'.$row['journals'].'"  style="width:200px;" ></center></td><td><center><select value = "'.$row['year'].'" id="y'.$row['id_time'].'" placeholder="Year" style="width:175px;" ></select></center></td><td><center><input id="ncid'.$row['id_time'].'" type="number"  value = "'.$row['budget'].'" style="width:200px;" ></center></td><td><center><input type="number" value = "'.$row['subscriptions'].'" id="y'.$row['id_time'].'"style="width:200px;" ></select></center></td><td class="remove"><center><button type="button" onclick="remove_row(this);">Remove</button></center></td></tr>';
    }
	
?>
