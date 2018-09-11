<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>







<?php
session_start();
$_SESSION["authuser"]=0;
if(isset($_POST["submit"]))
{
	$user=$_POST["username"];
	$pas=$_POST["password"];
	$pass=md5($pas);

require 'connect.php';
	if($con)
	{
		if($user&&$pass)
		{
			$query="select * from login where username='$user' or email='$user'";

			$res=mysqli_query($con,$query);
			if($res)
			{
				while($row=mysqli_fetch_assoc($res))
				{
					$dbpass=$row['userpassword'];
					$username=$row['username'];
					$m=$row['mobile'];
				}
				if($pass==$dbpass)
				{
					$_SESSION["username"]=$username;
					$_SESSION["authuser"]=1;
						$_SESSION["mobile"]=$m;
					 $_SESSION["failed"]=0;
					$query="update login set userstatus=1 where username='$user'";
                    $res=mysqli_query($con,$query);
					header("location:a.php");
				}
				else
				{

                    $_SESSION["failed"]=1;
                  header("location:login.php");
					

				}
			}
				else
				{
					header("location:failed.html");
				}
			

		}
		else
		{
			echo "empty";
		}
	}
}
else
{
	echo "not";
}
?>
</body>
</html>