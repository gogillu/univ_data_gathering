<?php
	
    session_start();
    include("../credential.php");
    
    $connection = mysqli_connect($servername, $username, $password, $dbname);

mysqli_autocommit($connection,FALSE);
try{
mysqli_begin_transaction($connection);

	$query = "Delete from t1_3_1 where Username like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query);
	$query = "Insert into t1_3_1 Values('".$_SESSION['username']."','".$_GET['desc']."','','')";   // ".$_POST['rows']."";
	$res  = mysqli_query($connection,$query) ; //or die(mysqli_error($connection));

	if($res){
		echo "Changes Saved Successfully";
		mysqli_commit($connection);
	}else{
		throw new Exception('Last query failed');
	}

}
catch (Exception $e) {
	mysqli_rollback($connection);
	echo "There was some problem with your data, Last changes were not saved, Try Again...!!!";
}

mysqli_autocommit($connection,TRUE);

	//echo $res;
?>
