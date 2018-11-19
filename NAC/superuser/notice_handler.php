<?php session_start();
$_SESSION['msg']='';
include("../credential.php");

$date = date_create();
save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));


if(!isset($_SESSION['names'])){
		header("Location: ../index.php");

}

$query = "Delete from notice;";
$connection = mysqli_connect($servername, $username, $password, $dbname);
$res = mysqli_query($connection,$query);


$query = "Insert into notice values('".$_POST['notice']."');";
$connection = mysqli_connect($servername, $username, $password, $dbname);
$res = mysqli_query($connection,$query);

if($res){
  echo "NOTICE SUCCESSFULLY ADDED";
}else{
  echo "Notice failed try again";
}

?>
<a href="progress.php"> continue </a>
