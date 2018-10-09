<?php
	
    session_start();
    include("../credential.php");
    
    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "Select * from t1_2_1 where Uname like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
	while($row = $res->fetch_assoc()){
        echo '<tr id="id'.$row['id_time'].'" ><td><center><select id="pid'.$row['id_time'].'" required onchange="fetch_course_code(this.value,this.id)" text="Programme Code" style="width:150px;" value="'.$row['Prog_code'].'"></select></center></td><td><center><input id="npid'.$row['id_time'].'" type="text" value="'.$row['Prog_name'].'" placeholder="Programme Name" style="width:250px;" disabled></center></td><td><center><select id="cid'.$row['id_time'].'" onchange="fetch_course_name(this.value,this.id)" text="Course Code" value="'.$row['Course_code'].'" style="width:150px;" ></select></center></td><td><center><input id="ncid'.$row['id_time'].'" type="text" placeholder="Course Name" value = "'.$row['Course_name'].'" style="width:250px;" disabled></center></td><td><center><select value = "'.$row['Year'].'" id="y'.$row['id_time'].'" placeholder="Year" style="width:165px;" ></select></center></td><td class="remove"><center><button type="button" onclick="remove_row(this);">Remove</button></center></td></tr>';
    }
	
?>
