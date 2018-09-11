<!-- <html>
<head>
	<style>
	body{
		background-color:red;
	}
	</style>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<center><img src="dragon_classical_light_luster_surface_background_16050_1024x1024.jpg" class="img-circle" alt="Cinque Terre"style="width:30%">
<h3><b>WELCOME</b></h3></center>
</body>
</html> -->
<?php
require 'connect.php';
$query="select propic from login where username='123'";
$res=mysqli_query($con,$query);
if($res)
{

	$row=mysqli_fetch_assoc($res);
	
	    echo $row['propic'];
		echo "<html><head></head><body><img src=".$row['propic']."></body></html>";
	
}
?>