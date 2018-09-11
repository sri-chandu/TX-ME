
<?php
session_start();
$user=$_SESSION["username"];
require 'connect.php';
if($con)
{
	$query="UPDATE login set userstatus=0 where username='$user'";
    mysqli_query($con,$query);
	session_destroy();
	header("location:side.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
</body>
</html>