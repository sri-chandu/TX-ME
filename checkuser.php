<?php
$con=mysqli_connect("localhost","root","karthik","chatting");
$name=$_POST["username"];
if($con)
{
	if($name!='')
	{
		$query="select * from login where username ='$name'";
		$res=mysqli_query($con,$query);
		if($res)
		{
			$num=mysqli_num_rows($res);
			echo $num;
		}
	}
}
?>