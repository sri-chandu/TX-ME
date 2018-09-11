<?php
session_start();
require 'connect.php';
$mobile=$_POST["mobile"];
$query="update login set mobile ='$mobile' where username='$_SESSION[username]'";
$res=mysqli_query($con,$query);

?>