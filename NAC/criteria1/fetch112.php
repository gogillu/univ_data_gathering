<?php

    session_start();
    include("../credential.php");

    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "Select * from t1_1_2 where Uname like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
	while($row = $res->fetch_assoc()){
        echo '<tr id="id'.$row['id_time'].'" ><td><center><select id="pid'.$row['id_time'].'" required onchange="fetch_course_code(this.value,this.id)" text="Programme Code" style="width:150px;" value="'.$row['Prog_code'].'"></select></center></td><td><center><input id="npid'.$row['id_time'].'" type="text" value="'.$row['Prog_name'].'" placeholder="Programme Name" style="width:250px;" disabled></center></td><td><center><select value = "'.$row['Year'].'" id="y'.$row['id_time'].'" placeholder="Year" style="width:165px;" required></select></center></td><td><center><input id="per'.$row['id_time'].'" type="number" value="'.$row['Percent'].'" onkeyup="percent_limit_input(this.value,this.id,event)" placeholder="Percentage" style="width:120px;" required></center></td> <td><center><input id="l'.$row['id_time'].'" type="text" value="'.$row['Link'].'" placeholder="Link of the relevant document" style="width:250px;"></center></td> <td class="remove"><center><button type="button" onclick="remove_row(this);">Remove</button></center></td></tr>';
    }

?>