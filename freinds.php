<?php
session_start();
require 'connect.php';
?>
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
	<form action="addf.php" method="post">
<br><br>
   <div class="form-group">
  <div class="col-xs-6">
 <input type="text" class="form-control" id="usr" placeholder="Enter username or Mobile number" name="username">
          
        
  </div><button type="submit" class="btn btn-primary" name="submit">Primary</button>

</div>
</form>
  </body>
  </html>
  <?php

  $accuser=$_SESSION["username"];
$query="select freind from freinds where username='$accuser'";
// echo "string";	
$res=mysqli_query($con,$query);
if($res)
{
	$i=0;
	$number=mysqli_num_rows($res);
	// echo "hiii";
	if($number)
	{
		// echo "hiiii";
	while ($row=mysqli_fetch_assoc($res))
	{
		$messages[$i]=$row["freind"];
		$i++;
	}
	while ($i>0)
	{
		$i--;
		echo $messages[$i]."<p>";
	}
    }
}

?>