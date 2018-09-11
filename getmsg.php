<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <style>
 .contai{
 	margin-top: 0px;
 	border-radius: 10px 10px 0px 0px;
width:750px;
height:50px;
position:fixed;
background-color:black;
color:white;
font-size: 25px;
/*margin-left: -15px;
*/  }

#f{
   width: 5; 
  font-size: 7px;
  word-break:break-all;
}

  </style>
</head>
<body>

  <!-- <div class="contai" >

 	<?php
 	session_start();
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
function original($te)
     {
require 'connect.php';
 $p="select * from original where modifiedname='$te'";
            $po=mysqli_query($con,$p);
         while ($rowr=mysqli_fetch_assoc($po))
        {
              $statusr=$rowr['original'];
        }
        return $statusr;
       }
$varr=$_SESSION['recid'];
$var=propic($varr);
echo "<img src='$var' alt='ubj' style='width:40px;height:40px;border-radius:50%;margin-top:5px;margin-left:18px'>
</td>&nbsp;&nbsp;";
echo "<i style='margin-top:35px;'>".$varr."</i>" ;
 	?>
 	  
           
</div> -->





<?php

$user=$_SESSION['username'];
$recid=$_SESSION["recid"];
require 'connect.php';
$id=75675;


if($con)
{

 	$query="SELECT * FROM (SELECT * from messages  where (((too='$recid') and (fromm='$user')) or ((too='$user') and (fromm='$recid'))) ORDER by clock DESC )messages order by clock  ,id asc";
	$res=mysqli_query($con,$query);
	if($res)
	{
		$i=0;
		$number=mysqli_num_rows($res);
		if($number>0)
		{
			while ($data=mysqli_fetch_assoc($res))
			{
				if($id>$data["id"])
				{
					$id=$data["id"];
				}
				if($data["fromm"]==$user)
				{
						$fileName=$data["message"];
						$l=$data["message"];
             
					  	$fileExt =explode('.',$fileName);
  					 	$fileActualExt = strtolower(end($fileExt));
   						$allowed =array('jpg','jpeg','png');
   						$all=array('pdf');
   						$al=array('doc','docx','txt');
   						$allo=array('pptx');
   						if(in_array($fileActualExt,$allowed))
   						{
   							echo "<div>";
   						echo "<div  id='$data[id]' >
   						<p>
   						<br><br>
   						<div class='zoom'>
   						<span  style='padding:0.5px; border-radius:10px; font-size:20px;margin-right:5px;float:right;display:inline-block;'>
   						<a href='$l' download><img src='$l' id='image' style='border-radius:20px;height:140px;width:100px'></a><br>
   						</div>
   						</span>
   						</p>
   						<br>
   						<br><br><br><br><br>
   						</div>";
   						echo "</div>";	
						}
						else if(in_array($fileActualExt,$all))
						{
             $o=original($l);
							echo "<div  id='$data[id]' >
   						<p>
   						<br><br>
   						<span  style='padding:0.5px; border-radius:10px;margin-right:15px; float:right;'>
   						 <a href='$l' download><img src='uploadfile/pdf.png' style='height:60px;width:50px'></a>
   						</p>
   						</span>
   						<br>
   						</div>"	;
              echo "<p>
              <br>
              <span  style='padding:0.5px; border-radius:10px;margin-right:15px; float:right;'>";
              
              //  echo "<i id='f'>".$o."</i>
              // </p>
              // </span>
              
              // </div>";
						}
						else if(in_array($fileActualExt,$al))
						{
						echo "<div  id='$data[id]' >
   						<p>
   						<br><br>
   						<span  style='padding:0.5px; border-radius:10px; font-size:20px;margin-right:15px; float:right;'>
   						<a href='$l' download><img src='uploadfile/doc.png' style='height:60px;width:60px'></a>
   						</p>
   						</span>
   						<br><br><br>
   						</div>";
						}
						else if(in_array($fileActualExt,$allo))
						{
						echo "<div  id='$data[id]' >
   						<p>
   						<br><br>
   						<span  style='padding:0.5px; border-radius:10px; font-size:20px;margin-right:15px; float:right;'>
   						<a href='$l' download><img src='uploadfile/ppt1.png' style='height:70px;width:60px'></a>
   						</p>
   						</span>
   						<br><br><br>
   						</div>";
						}
					else
					{
					echo "<div  id='$data[id]' ><p><span  style='background-color:#8FBC8F;padding:0.5px; border-radius:10px; font-size:20px;margin-right:15px; float:right;'>&nbsp".$data["message"]."&nbsp</p></span><br></div>";
					}				
				}
				else 
				{
						$fileName=$data["message"];
						$l=$data["message"];
					  	$fileExt =explode('.',$fileName);
  					 	$fileActualExt = strtolower(end($fileExt));
   						$allowed =array('jpg','jpeg','png');
   						$all=array('pdf');
   						$al=array('doc','docx');
   						$allo=array('pptx');
   						if(in_array($fileActualExt,$allowed))
   						{
   						
   						echo "<div  id='$data[id]' >
   						<p>
   						
   						<span  style='padding:0.5px; border-radius:10px; font-size:20px;margin-left:15px; float:left'>
   						<a href='$l' download><img src='$l'  style='border-radius:20px;height:140px;width:100px;'></a><i>karthik</i>
   						</p>
   						</span>
   						<br>
   						<br>
   						<br><br>
   						</div>";
   					
						}
						else if(in_array($fileActualExt,$all))
						{
							echo "<div  id='$data[id]' >
   						<p>
   						<br><br>
   						<span  style='padding:0.5px; border-radius:10px; font-size:20px;margin-left:15px; float:left;'>
   						 <a href='$l' download><img src='uploadfile/pdf.png' style='height:60px;width:50px'></a>
   						</p>
   						</span>
   						<br><br>
   						</div>";	
						}
						else if(in_array($fileActualExt,$al))
						{
						echo "<div  id='$data[id]' >
   						<p>
   						<br><br>
   						<span  style='padding:0.5px; border-radius:10px; font-size:20px;margin-left:15px; float:left;'>
   						<a href='$l' download><img src='uploadfile/doc.png' style='height:60px;width:60px'></a>
   						</p>
   						</span>
   						<br><br><br>
   						</div>";
						}
						else if(in_array($fileActualExt,$allo))
						{
						echo "<div  id='$data[id]' >
   						<p>
   						<br><br>
   						<span  style='padding:0.5px; border-radius:10px; font-size:20px;margin-left:15px; float:left;'>
   						<a href='$l' download><img src='uploadfile/ppt1.png' style='height:60px;width:60px'></a>
   						</p>
   						</span>
   						<br><br><br>
   						</div>";
						}
						else{
				# code..
						
						echo "<div  id='$data[id]' ><p><span style='background-color:#F0E68C;padding:0.5px; border-radius:10px; font-size:20px;float:left;margin-left:10px;'>&nbsp".$data["message"]."&nbsp</p></span><br></div>";
				}
				}
			}
			$_SESSION["id"]=$id;
		
		}
		else
		{
			echo "<p align='center'>no conversation yet, with ".$recid."</p>";
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

</body>
</html>