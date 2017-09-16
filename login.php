<?php
include 'db.php';
session_start();
if(isset($_POST["sub"]))
{
	$username=$_POST["txtuser"];
	$password=$_POST["txtpass"];

	$query= "select * from user where username='$username' and password='$password'";
	$exe_query= mysqli_query($conn,$query);
	$found_num_rows= mysqli_num_rows($exe_query);
	if($found_num_rows==1)
	{
		$_SESSION["login_user"]=$username;//echo 'Welcome';
		header("location:welcome.php");
		//("location:index.php?success=Login Successfull");
	}
else {

	header("location:index.php?invalid=Your username or password are incorrect | Please Try Again");//echo 'Login Failed';
	}
}
?>