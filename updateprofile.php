<?php
require 'connect.php';
// if($con)
// {
	if(isset($_POST['pswd'])))
	{

		$new=$_POST['pswd'];
		$query="update login set userpassword='$new' where username='$_SESSION[username]' ";
		$res=mysqli_query($con,$query);
		
	}
	// if(isset($_POST['mobilec'])))
	// {
	// 	$new=$_POST['mobilec'];
	// 			echo $new;

	// }
	// if(isset($_POST['emailc'])))
	// {
	// 	$new=$_POST['emailc'];
	// 			echo $new;

	// }
// }
echo "hiii";


?>
