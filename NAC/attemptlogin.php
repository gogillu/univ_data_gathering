<?php 

    
//error_reporting(E_ERROR | E_PARSE | E_NOTICE);
if(isset($_POST["submit"])){
	include("credential.php");
	$connection = mysqli_connect($servername, $username, $password, $dbname);
	
	if(mysqli_connect_errno()){
	die("Connection to Database failed:" .mysqli_connect_error()." (".mysqli_connect_errno().")");}
	if(isset($_POST["username"])){
		$username=$_POST["username"];
	}else{
		$username="";
	}
	if(isset($_POST["password"])){
		$password=$_POST["password"];
	}else{
		$password="";
	}

	$query1="select * from admins where username='$username' and password='$password'";
	$result1 = mysqli_query($connection,$query1);
	$number_of_rows1 = mysqli_num_rows($result1);
	
	$query2="select * from superusers where username='$username' and password='$password'";
	$result2 = mysqli_query($connection,$query2);
	$number_of_rows2 = mysqli_num_rows($result2);
	
	if($number_of_rows1>0){
		session_start();
		$_SESSION['username']=strtolower($username);
		$_SESSION['login']="YES";
		$row = mysqli_fetch_assoc($result1);
		$_SESSION['name']=$row['name'];
		header("Location: homepage.php");
		
	}else if($number_of_rows2>0){
		session_start();
		$_SESSION['login']="YES";
		$_SESSION['username']=strtolower($username);
		$row = mysqli_fetch_assoc($result2);
		$_SESSION['names']=$row['name'];
        //echo $_SESSION['name'];
		echo"<script>alert('success');";
		header("Location: superuser\index.php");
	}
	else{ session_start();
		$_SESSION['login']="NO";			
		echo"<script>alert('Wrong username/password combination');
					 window.location='login.php';</script>";
	}
	
}else{
	
	die('sorry, there was a problem connecting to database, Pleasse try again!');
}

?>
