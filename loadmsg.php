<?php
session_start();
$user=$_SESSION['username'];
$recid=$_SESSION["recid"];
require 'connect.php';
if($con)
{

 $query="SELECT * FROM (SELECT * from messages  where (((too='$recid') and (fromm='$user')) or ((too='$user') and (fromm='$recid'))) ORDER by clock DESC limit 6)messages order by clock ASC";

$res=mysqli_query($con,$query);
if($res)
{
	$i=0;
	$number=mysqli_num_rows($res);
	if($number>0)
	{
	while ($data=mysqli_fetch_assoc($res))
	{
		if($data["fromm"]==$user)
		{
			
		echo "<div class='umessage' id='$data[id]' ><span>".$data["message"]."<p></span></div>";
		}
		else {
			# code..
					echo "<div class='omessage' id='$data[id]' ><span>".$data["message"]."<p></span></div>";

		}
	}
	
}
else
{
	echo "no messseges";
}
}
else
{
	echo " query not executed";
}
}
else{
	// echo "query not executed";
	echo "cannot connect to the database";
}
?>