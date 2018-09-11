<?php
session_start();
 // $search=$_POST['search'];
require 'connect.php';
function pro($tu)
{
		$qu="select image from propic where name like '$tu%'";

require 'connect.php';
	$re=mysqli_query($con,$qu);
	while($t=mysqli_fetch_assoc($re))
	{
		$y=$t['image'];
	}
    return $y;
}
if(isset($_POST['name']))
{
 $value=$_POST['name'];
// $value="d";
if($con)
{
	if($value!='')
	{
	$query="select username from login where username like '$value%'";
	$res=mysqli_query($con,$query);
	if($res)
	{
		$i=0;
		$number=mysqli_num_rows($res);
		if($number>0)
		{


			  
			while ($data=mysqli_fetch_assoc($res) )
			{
				// echo "<p class='search-content' id='$data[username]'>".$data["username"]."</p>";
				if($data['username']==$_SESSION['username'])
				{
                             
				}
				else
				{
						$var=pro($data['username']);
						
						// $image="<img src='$var' width='20px' height='10px' border-radius='50%'>"
							// echo "<option value='$image'>";					
						// echo "<img src='$var' width='20px' height='10px' border-radius='50%'>";
						echo "<option value='$data[username]'>";
				}
		}

		}
		else
		{
			echo "no people found";
		}
	}
}

}
else{
	echo "not connected to database";
}
}
else
{
  echo "not submit";
}
?>