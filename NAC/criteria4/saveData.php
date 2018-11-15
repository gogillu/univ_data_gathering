<?php

    session_start();
    include("../credential.php");

    $connection = mysqli_connect($servername, $username, $password, $dbname);

mysqli_autocommit($connection,FALSE);
try{
mysqli_begin_transaction($connection);

	$query = "Delete from ".$_GET["table"]." where Username like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query);
	$query = "Insert into ".$_GET["table"]." Values".$_POST['rows']."";
	//echo $query;
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
