<?php
session_start();
require 'connect.php';
if($con)
{
	$pass=$_POST["new_password"];
	$pass1=$_POST["retype_password"];
	$regdno=$_SESSION["account_recover_username"];
	if($pass==$pass1)
	{
		$pass=md5($pass);
		$query="update login set userpassword='$pass' where email='$regdno'";
	$result=mysqli_query($con,$query);

	if($result)
	{
		header("location:side.php");
	}
	}
	

}
else
{
	echo "database connection error";
}

?>