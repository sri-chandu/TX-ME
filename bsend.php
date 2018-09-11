<?php
session_start();
$con=mysqli_connect('localhost','root','karthik','b');
	$from='da';
	// $to=$_POST['to'];
	
	$message=$_POST['me'];
	
	if($con)
	{
		date_default_timezone_set("Asia/Calcutta");
		$date=date('Y-m-d H:i:s');
		$query="insert into b values('$from','$message','$date')";
		$res=mysqli_query($con,$query);
		if($res)

		{
			echo 'true';
		}
		else
		{
			echo 'false';
		}
}
else
{
# code...
echo "database error";
}
?>