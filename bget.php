<?php
$con=mysqli_connect('localhost','root','karthik','b');
$r="SELECT * from b ORDER by time ASC";
$re=mysqli_query($con,$r);
while($res=mysqli_fetch_assoc($re))
{
	$t=$res['message'];
	$s=$res['fromi'];
	if($s=='dattu')
	{
	echo "<i style='float:left;margin-left:15px;'>".$s.":".$t."</i><br>";
}
else
{
	echo "<i style='float:right;margin-right:15px;'>".$t.":you</i><br>";
}
}
	?>