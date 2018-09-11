<?php
session_start();
if(isset($_POST["submit"]))
{
	$username=$_POST["name"];
$email=$_POST["email"];
require 'connect.php';
if($con)
{
	$query="select email from login where email='$email'";
	$result=mysqli_query($con,$query);
	if($result)
	{
		$numm=mysqli_num_rows($result);
		if($numm==1)
		{
			$_SESSION["account_recover_username"]=$email;
					header("location:otp.php");

		}
		
			else
			{
				$_SESSION["invalid_account"]=13;
				header("location:forgotpassword.php");
			}

	}
}
else
{
	echo "database connection error";
}
}
else
{
	echo 'fkdhf';
}
?>