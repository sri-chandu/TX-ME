<?php
session_start();
require 'connect.php';
$email=$_POST["emailid"];
$query="update login set email ='$email' where username='$_SESSION[username]'";
$res=mysqli_query($con,$query);

?>