

<?php
session_start();
if(isset($_POST['submit']))
{


	// Authorisation details.
	$var=$_POST['MobileNumber'];
	$username = "dattu.sai4@gmail.com";
	$hash = "21553df815aeedb6689df990d33ae2baac4a430fbbfdee7fa9d6498014e785d3";

	// Config variables. Consult http://api.textlocal.in/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = "TXTLCL"; // This is who the message appears to be from.
	$numbers = "91".$var; 
	$r=rand();// A single number or a comma-seperated list of numbers
	$message = $r;
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.textlocal.in/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	curl_close($ch);
	$_SESSION['otp']=$numbers;
	if($result)
		{
			$con=mysqli_connect("localhost","root","karthik","chatting");
            $s=" insert into otp values('$numbers','$r')";
            $res=mysqli_query($con,$s);
            header('location:valotp1.php');
		}
    }

?>
