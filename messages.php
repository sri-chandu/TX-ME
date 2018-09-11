<?php
session_start();
?>
<html lang="en" >
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  div.bott
  {
  	  position: absolute;
  	  bottom:0px;

  }


  /*online style*/
  .sidenav {
    height: 100%; /* 100% Full-height */
    width: 0; /* 0 width - change this with JavaScript */
    position: fixed; /* Stay in place */
    z-index: 1; /* Stay on top */
    top: 0; /* Stay at the top */
    right: 0;
    background-color: #111; /* Black*/
    overflow-x: hidden; /* Disable horizontal scroll */
    padding-top: 60px; /* Place content 60px from the top */
    transition: 0.5s; /* 0.5 second transition effect to slide in the sidenav */
}

/* The navigation menu links */
.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

/* When you mouse over the navigation links, change their color */
.sidenav a:hover {
    color: #f1f1f1;
}

/* Position and style the close button (top right corner) */
.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
   
}

/* Style page content - use this if you want to push the page content to the right when you open the side navigation */
#main {
    transition: margin-right .5s;
    padding: 20px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
}
  </style>
</head>
<body>
	<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>


<?php
require 'connect.php';
$accuser=$_SESSION["username"];
$query="select freind from freinds where username='$accuser' and online='1'";
$res=mysqli_query($con,$query);

if($res)
{
	$i=0;
	$number=mysqli_num_rows($res);
	
	if($number)
	{
	while ($row=mysqli_fetch_assoc($res))
	{
		$persons[$i]=$row["freind"];
		
		$i++;
	}
	while ($i)
	{
		$i--;
		echo "<html><head></head><body><a href='#''>".$persons[$i]."</a></body></html>";
	}
}
}
 ?> 
</div>

<!-- Use any element to open the sidenav -->
<p align="right"><span style="font-size:20px;cursor:pointer" onclick="openNav()">&#9776; See who is online Now</span></p>
<!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
<div id="main">
 
</div>
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginRight = "250px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

/* Set the width of the side navigation to 0 and the Right margin of the page content to 0, and the background color of body to white */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginRight = "0";
    document.body.style.backgroundColor = "white";
}</script>
	<div class="bott">
	<form>
	  <div class="form-group">
	
    <div class="col-xs-9">
    <input class="form-control" id="inputlg" type="text" placeholder="type here" size="100">
   
    </div><button type="submit" class="btn btn-success" name="submit">send</button>
   <a href="#" class="btn btn-primary btn-default">
   Attach file
  </a>
  </div>
</form>
</div>
</body>
</html>
<?php
require 'connect.php';
$accuser=$_SESSION["username"];
$query="select * from messages where too='$accuser'";
$res=mysqli_query($con,$query);
if($res)
{
	$i=0;
	$number=mysqli_num_rows($res);
	if($number>0)
	{
	while ($row=mysqli_fetch_assoc($res))
	{
		$messages[$i]=$row["message"];
		$from[$i]=$row["fromm"];
		$i++;
	}
	while ($i>0)
	{
		# code...
		$i--;
		echo $from[$i]." sent you a message".$messages[$i]."<p>";
	}
}
}
?>