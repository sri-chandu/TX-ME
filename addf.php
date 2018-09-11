<?php
session_start();
require 'connect.php';
if(isset($_POST["submit"]))
{
	$user=$_POST["username"];
	$accuser=$_SESSION["username"];
	$q="select mobile from login where username='$user'";
	$re=mysqli_query($con,$q);
	$row=mysqli_fetch_assoc($re);

	$p="select mobile from login where username='$accuser'";
	$rer=mysqli_query($con,$p);
	$row1=mysqli_fetch_assoc($rer);
$query="insert into freinds values('123','$row1[mobile]','$user',0)";
$query1="insert into freinds values('$user','$row[mobile]','123',0)";
$res=mysqli_query($con,$query);
$res=mysqli_query($con,$query1);
}

?>
<html>
<head>
</head>
<body>
	scjc</body>
	</html>
