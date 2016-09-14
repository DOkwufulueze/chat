<?php
	if(!isset($_SESSION)) 
	{ 
		session_start(); 
	}
include('class.php');
$username = $_POST['uname'];
$password = $_POST['pwd'];

$sql = "SELECT * FROM users where username='$username' and password='$password'";
$qry = $con->query($sql);
 
if ($qry->fetchColumn() > 0) 
{
	$_SESSION['user'] = $username;
	header('location:home.php');
	exit();
}	
else
{
	$error = "Please check your username and password.";
	header('location:error.php?error='.$error.'');
	exit();
}
?>