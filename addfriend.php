<?php
session_start();
require 'connect.php';
$username=$_SESSION["username"];
$name=$_POST["name"];
$exist="select username from login where username='$name'";
$result=mysqli_query($con,$exist);
if($result)
{
	$number=mysqli_num_rows($result);
	if($number==1)
	{
		$query="insert into freinds values('$name','$username')";
		$query2="insert into freinds values('$username','$name')";
		$res=mysqli_query($con,$query);
		$res2=mysqli_query($con,$query2);
	}
}


?>