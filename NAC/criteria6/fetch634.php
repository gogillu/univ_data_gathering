<?php
	
    session_start();
    include("../credential.php");

$date = date_create();
//save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));


    
    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "select distinct * from t6_3_4 where Username like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
	while($row = $res->fetch_assoc()){
        echo '<tr id="id'.$row['id_time'].'" ><td><center><select id="y'.$row['id_time'].'" required  style="width:175px;" value="'.$row['Year'].'"></select></center></td><td><center><input type="text" value="'.$row['Teacher_number'].'" placeholder="Teacher Name" style="width:200px;"></center></td><td><center><input type="text" value="'.$row['Title'].'" placeholder="PAN NO" style="width:200px;" required></center></td><td><center><input  type="date" value="'.$row['Dates_from'].'" placeholder="Name" style="width:200px;" required></center></td><td><center><input  type="date" value="'.$row['Date_to'].'" placeholder="Name" style="width:200px;" required></center></td><td class="remove"><center><button type="button" onclick="remove_row(this);">Remove</button></center></td></tr>';
    }
?>
