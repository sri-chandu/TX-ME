<?php
session_start();
require 'connect.php';
$pass=$_POST["pass"];
$o=$_POST['old'];
$queryy="select userpassword from login where username='$_SESSION[username]'";
$r=mysqli_query($con,$queryy);
while($or=mysqli_fetch_assoc($r))
{
	$op=$or['userpassword'];
}
if($o==$op)
{
	$query="update login set userpassword ='$pass' where username='$_SESSION[username]'";
$res=mysqli_query($con,$query);
echo "true";
}
else{
echo "false";
}
?>