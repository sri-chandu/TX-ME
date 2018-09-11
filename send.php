<?php
session_start();
require 'connect.php';
	$from=$_SESSION['username'];
	// $to=$_POST['to'];
	$to=$_SESSION["recid"];
	$message=$_POST['message'];
	$messegs_status=1;
	if($con)
	{
		date_default_timezone_set("Asia/Calcutta");
		$date=date('Y-m-d H:i:s');
		$query="insert into messages values('','$from','$to','$message','$messegs_status','$date')";
		$res=mysqli_query($con,$query);
		
}
else
{
# code...
echo "database error";
}
?>