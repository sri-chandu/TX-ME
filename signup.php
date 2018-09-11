<?php
if(isset($_POST["submit"]))
{
	$firstname=$_POST["firstname"];
	$lastname=$_POST["lastname"];
		$username=$_POST["username"];

	$email=$_POST["email"];

	$passwor=$_POST["password"];
	$password=md5($passwor);
	$repassword=$_POST["Repassword"];
	$mobile=$_POST["MobileNumber"];
	$gender=$_POST["gender"];
	$status=0;

require 'connect.php';
	if($con)
	{
		if($username&&$password)
		{


					$query="insert into login values('$firstname','$lastname','$username','$email','$password','$mobile','$gender','$status','')";
					$res=mysqli_query($con,$query);
					$queryy="insert into propic values('$username','uploads/default.jpg','')";
					$ress=mysqli_query($con,$queryy);
			if($res)
			{
		header("location:successr.php");
			}
			else
			{
				echo("registration failed");
			}
		}

		
	}
	else
	{
		echo "cannot connect to the server";
	}
}
else{

echo "not submited";}			
?>