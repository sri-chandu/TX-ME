<?php
session_start();
$user=$_SESSION["username"];
$friend=$_POST["friend"];
// UPDATE messages set message_status=0 where ((fromm= '$friend') and (too='$user')and (message_status=1));
	$query_status="UPDATE messages set message_status=0 where ((fromm= '$friend') and (too='$user')and (message_status=1))";
require 'connect.php';
	if ($con)
	{
		# code..
		$result=mysqli_query($con,$query_status);
		if($result)
		{

		}
		else{
			echo "query error";
		}
	}
?>