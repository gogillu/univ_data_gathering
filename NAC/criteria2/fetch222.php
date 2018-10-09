<?php
	
    session_start();
    include("../credential.php");
    
    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "Select * from t2_2_2 where Uname like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
	while($row = $res->fetch_assoc()){
	 echo '<tr id="id'.$row['id_time'].'" ><td><center><select value = "'.$row['Year'].'" id="y'.$row['id_time'].'" placeholder="Year" style="width:175px;" ></select></center></td><td><center><select id="pid'.$row['id_time'].'" onchange="fetch_course_code(this.value,this.id)" text="Programme Code" value="'.$row['Prog_code'].'" style="width:150px;" required></select></center></td><td><center><input id="npid'.$row['id_time'].'" value="'.$row['Prog_name'].'" type="text" placeholder="Programme Name" style="width:250px;" disabled></center></td><td><center><input id="npid'.$row['id_time'].'" type="number" value="'.$row['UG_students'].'" placeholder="Number" style="width:140px;" required></center></td><td><center><input id="npid'.$row['id_time'].'" type="number" value="'.$row['PG_students'].'" placeholder="Number" style="width:140px;" required></center></td><td><center><input id="npid'.$row['id_time'].'" type="number" value="'.$row['UG_only_teachers'].'" placeholder="Number" style="width:140px;" required></center></td><td><center><input id="npid'.$row['id_time'].'" type="number" value="'.$row['PG_only_teachers'].'" placeholder="Number" style="width:140px;" required></center></td><td><center><input id="npid'.$row['id_time'].'" type="number" value="'.$row['UG_PG_teachers'].'" placeholder="Number" style="width:140px;" required></center></td><td class="remove"><center><button type="button" onclick="remove_row(this);">Remove</button></center></td></tr>';
    }
	
?>
