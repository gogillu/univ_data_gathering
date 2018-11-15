<?php
	
    session_start();
    include("../credential.php");
    
    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "select distinct * from t4_2_5 where Username like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
	$sel1 = '';
	$sel2 = "";
	
	while($row = $res->fetch_assoc()){
	
	
        echo '<tr id="id'.$row['id_time'].'" ><td><center><input type="text" id="pid'.$row['id_time'].'" style="width:150px;" value="'.$row['ereso'].'"></select></center></td><td><center><input id="npid'.$row['id_time'].'" type="text" value="'.$row['det'].'" style="width:250px;" ></center></td><td><center><input type="text" value = "'.$row['raccess'].'" id="y'.$row['id_time'].'" style="width:165px;" ></center></td><td class="remove"><center><button type="button" onclick="remove_row(this);">Remove</button></center></td></tr>';
       
        
	$sel1 = "";
	$sel2 = "";
    }
	
?>
