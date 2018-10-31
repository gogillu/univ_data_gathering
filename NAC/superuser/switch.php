<?php session_start();
$_SESSION['msg']='';
include("../credential.php");
if(!isset($_SESSION['names'])){
		header("Location: ../index.php");
}

$_SESSION['username']=$_GET['username'];
$_SESSION['login']="YES";
$_SESSION['name']=$_GET['name'];

  header("Location: ../homepage.php");

?>
