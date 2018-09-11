<?php
session_start();
	$file=$_FILES['name'];
	$fileName=$_FILES['file']['name'];
	$fileTmpName=$_FILES['file']['tmp_name'];
    $fileSize=$_FILES['file']['size'];
    $fileError=$_FILES['file']['error'];
	$fileType=$_FILES['file']['type'];


  // $con=mysqli_connect("localhost","root","karthik","chatting");
  //           $s="update propic set image='$fileName' where name='karthik1' ";
  //                       $res=mysqli_query($con,$s);

   $fileExt =explode('.',$fileName);
   $fileActualExt = strtolower(end($fileExt));

   $allowed =array('jpg','jpeg','png','pdf','avi','webm','gif');

   if(in_array($fileActualExt,$allowed)){
      if($fileError===0)
      {
        if($fileSize <100000000000000000){
          $name=$_SESSION['username'];
require 'connect.php';
         

          if($con)
            {
               $del="select * from propic where name='$name'";
          $w=mysqli_query($con,$del);
          if($w)
          {
            while($row=mysqli_fetch_assoc($w))
            {
  // echo "connected sucessfully";
              $path=$row["image"];
              $v=$row['propicstatus'];
            }
          }

          $pathh=$path;
          if($v==1)
          {
              unlink($pathh);
          }
        
          
          }
          $ran=rand();
        	$fileNamenew="$ran".".".$fileActualExt;
        	$fileDestination ='uploads/'.$fileNamenew;
        	move_uploaded_file(	$fileTmpName=$_FILES['file']['tmp_name'],$fileDestination);
require 'connect.php';
          $r="select propicstatus from propic where username='$name' ";
            // $res=mysqli_query($con,$s);
            $re=mysqli_query($con,$r);
  while ($roww=mysqli_fetch_assoc($re))
          {
        $prostatus=$roww["propicstatus"];
          }
          if($prostatus==1)
          {
              $s="update propic set image='$fileDestination where name='$name'";
            mysqli_query($con,$s);
            header("Location:a.php");
}
else
{
 $s="update propic set image='$fileDestination' where name='$name'";
 $k="update propic set propicstatus=1 where name='$name'";
            $rs=mysqli_query($con,$s);   
           $e=mysqli_query($con,$k);
            header("Location:a.php");
            


}
          
        }
        else{
echo "error in uploading the current file! choose another file";
        // header("location:f.php");   
        echo "error in uploading the current file! choose another file";
     }
      }
      else
      {
      	echo "error in uploading the current file! choose another file";
        // header("location:f.php");
                echo "error in uploading the current file! choose another file";

      }



   } else
{
	echo "not a immage";
}
?>