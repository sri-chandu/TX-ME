<?php
$con=mysqli_connect("localhost","root","karthik","chatting");
$name=$_POST["username"];
if($con)
{
$v=preg_match('/^[0-9]{10}+$/', $name);
if($v)
{

	if($name!='')
	{
		$query="select * from login where mobile ='$name'";
		$res=mysqli_query($con,$query);
		if($res)
		{
			$num=mysqli_num_rows($res);
			echo $num;
		}
	}
}
else
{
	$num=99;
	echo $num;
}
}
?>