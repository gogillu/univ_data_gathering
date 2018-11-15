<?php
	
    session_start();
    include("../credential.php");
    
    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "select distinct * from t1_3_4 where Username like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
	while($row = $res->fetch_assoc()){
	  echo '<tr id="id'.$row['id_time'].'" ><td><center><select id="pid'.$row['id_time'].'" required onchange="fetch_course_code(this.value,this.id)" text="Programme Code" style="width:150px;" value="'.$row['Prog_code'].'"></select></center></td><td><center><input id="npid'.$row['id_time'].'" type="text" value="'.$row['Prog_name'].'" placeholder="Programme Name" style="width:250px;" disabled></center></td><td><center><select value = "'.$row['Year'].'" id="y'.$row['id_time'].'" placeholder="Year" style="width:165px;" ></select></center></td><td><center><input type="number" onkeypress="return event.charCode >= 48" placeholder="Students in programmes" style="width:250px;" value="'.$row['Number_of_students_programme'].'" required></center></td><td><center><input type="number" onkeypress="return event.charCode >= 48" placeholder="Students doing Internships"  value="'.$row['Number_of_students_internship'].'" style="width:250px;" required></center></td><td class="remove"><center><button type="button" onclick="remove_row(this);" >Remove</button></center></td></tr>';
    }
	
?>
