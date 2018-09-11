<?php
session_start();
$name=$_SESSION['account_recover_username'];
// echo $name;
echo "123";
$otp=rand(1000,9999);
require 'connect.php';
if($con)
{
	echo $name;
	$query="insert into otp values('$name','$otp')";
	$result=mysqli_query($con,$query);
	if($result)
	{
		// mail code;
		//mail();
		header("location:enterotp.php");
	}
else
{
	echo "database connection error";
}
}
else
{
	echo "lkenflkndf";
}
?>