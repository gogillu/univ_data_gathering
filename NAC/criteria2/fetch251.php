<?php
	
    session_start();
    include("../credential.php");
    
    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "Select * from t2_5_1 where Uname like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
	while($row = $res->fetch_assoc()){
	  echo '<tr id="id'.$row['id_time'].'" ><td><center><select id="pid'.$row['id_time'].'" required onchange="fetch_course_code(this.value,this.id)" text="Programme Code" style="width:150px;" value="'.$row['Prog_code'].'"></select></center></td><td><center><input id="npid'.$row['id_time'].'" type="text" value="'.$row['Prog_name'].'" placeholder="Programme Name" style="width:250px;" disabled></center></td><td><center><input type="text"  value="semester" disabled required></center></td><td><center><input type="text"  placeholder="Date (Exam End)"  value="'.$row['Exam_end_date'].'" required></center></td><td><center><input type="text" placeholder="Date (Result Declaration)" style="width:250px;" value="'.$row['Result_date'].'" required></center></td><td class="remove"><center><button onclick="remove_row(this);" type="button" >Remove</button></center></td></tr>';
    }
	
?>