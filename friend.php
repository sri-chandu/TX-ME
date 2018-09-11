<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="style.css">

	</head>
	<body>
	


<?php
session_start();	
require 'connect.php';
if (!isset($_SESSION['authuser'])) 
{
					header("location:login.php");
}
$status=0;
function propic($te)
{
	require 'connect.php';

	$r="select image from propic where name='$te'";
	$re=mysqli_query($con,$r);
         while ($row=mysqli_fetch_assoc($re))
				{
							$status=$row['image'];
				}
				return $status;
}
function unread($user,$freind)
{
	$query_status="select message_status from messages where ((fromm= '$freind') and (too='$user') and (message_status=1))";
	
	require 'connect.php';	
	if($con)
	{

		$result_status=mysqli_query($con,$query_status);
		if($result_status)
		{
			$count=mysqli_num_rows($result_status);
				return $count;
		}
		else
		{
			echo "query error";
		}
	}
	else
	{
		echo "cant connect to the database";
	}
		
}
function userstatus($a)
{
	require 'connect.php';
	$query_status="select userstatus from login where username='$a'";
			$result_status=mysqli_query($con,$query_status);
			if($result_status)
			{
				while ($row_status=mysqli_fetch_assoc($result_status))
				{
							$status=$row_status['userstatus'];
				}
				return $status;
			}
}
if($con)
{
	$username=$_SESSION["username"];
	$query ="SELECT distinct * FROM FReiNDS WHERE  username='$username'";
	$res=mysqli_query($con,$query);
	$number=mysqli_num_rows($res);
	if ($number) 
	{
		# code...
		if($res)
		{
			while ($row=mysqli_fetch_assoc($res))
			{
				echo "<table width='100%'>";
				# code...
				echo "<tr><td width='50px'>";
					$status=userstatus($row['freind']);
					$unread=unread($username,$row['freind']);
					// echo $unread;
					if($status)
					{
						if ($unread)
						{
								$var=propic($row["freind"]);
							echo "<img src='$var' alt='ubj' style='width:40px;height:40px;border-radius:50%'></td>";
							echo "<td class='row' id='$row[freind]' width='240px'>
							      <i align='center' class='name' id='$row[freind]' ><i>&nbsp;&nbsp;</i>".$row['freind']."
							      </i><td>&nbsp;</td>
							      <td>
							      <i class='badge'>".$unread."</i>
							      <i class='fa fa-circle' style='color:green'></i></td>
							      </td>
							      </tr><br>";
						}
						else
						{
							$var=propic($row["freind"]);
							echo "<img src='$var' alt='ubj' style='width:40px;height:40px;border-radius:50%'></td>";
							echo "<td class='row' id='$row[freind]' width='240px'>
							      <i align='center' class='name' id='$row[freind]' ><i>&nbsp;&nbsp;</i>".$row['freind']."
							      </i><td>&nbsp;</td>
							      <td><i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i>
							      <i class='fa fa-circle' style='color:green'></i></td>
							      </td>
							      </tr><br>";
						}
					}
					else
					{
						if ($unread)
						{
													$var=propic($row["freind"]);
							echo "<img src='$var' alt='ubj' style='width:40px;height:40px;border-radius:50%'></td>";
							echo "<td class='row' id='$row[freind]' width='240px'>
							
							<i align='center' class='name' id='$row[freind]'><i>&nbsp;&nbsp;</i>".$row['freind']."
							</i><td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
							<td><i class='badge'>".$unread."</i><i class='fa fa-circle' style='color:red'></i>
							</td></td>
							</tr><br>";
						}
						else
						{
														$var=propic($row["freind"]);
							echo "<img src='$var' alt='ubj' style='width:40px;height:40px;border-radius:50%'></td>";
							echo "<td class='row' id='$row[freind]' width='240px'>
							
							<i align='center' class='name' id='$row[freind]'><i>&nbsp;&nbsp;</i>".$row['freind']."
							</i>
							<td></td>

							<td><i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i><i class='fa fa-circle' style='color:red'></i>
							</td></td>
							</tr><br>";
						}
					}
				
				echo "</table>";
				}
			}
				else
				{
					echo "error in query";
		}
	}
	else
	{
		echo "<br><br><center>No friends to show</center>";
	}
}
else
{
	echo "cannot connect to the datbase";
}	
?>

</body>
	</html>