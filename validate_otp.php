<?php
session_start();
if(isset($_POST["submit"]))
{
$otp=$_POST["otp"];
$name=$_SESSION['account_recover_username'];
require 'connect.php';
if($con)
{
	$query="select otp from otp where mobile='$name'";
	$result=mysqli_query($con,$query);
	if($result)
	{
			while($row=mysqli_fetch_array($result))
		{
				$dbotp=$row["otp"];
		}
			if($dbotp==$otp)
			{
								header("location:new_password.php");

			}
			else
			{
				$_SESSION["invalid_otp"]=13;
				header("location:forgotpassword.php");
			}

	}
	$query1="delete from otp where mobile='$name'";
	$result=mysqli_query($con,$query1);
}
else
{
	echo "database connection error";
}
}
?>