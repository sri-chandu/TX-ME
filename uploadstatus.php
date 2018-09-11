<?php
session_start();
if(isset($_POST['submit']))
{
$imagetag=$_POST['imagetag'];
  $file=$_FILES['file'];
  $fileo=$_FILES['file']['name'];
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
   $allowed =array('jpg','jpeg','png','pdf','doc','pptx','docx');
   if(in_array($fileActualExt,$allowed)){
      if($fileError===0)
      {
        if($fileSize <100000000000000000){
           $ran=rand();
          $fileNamenew="imagestatus"."$ran".".".$fileActualExt;
          $fileDestination ='uploadstatus/'.$fileNamenew;
          move_uploaded_file( $fileTmpName=$_FILES['file']['tmp_name'],$fileDestination);
require 'connect.php';
            $from=$_SESSION['username'];
            date_default_timezone_set("Asia/Calcutta");
            $date=date('Y-m-d H:i:s');
            $s="insert into chat values('$fileDestination','$imagetag','$from','$date')";
            $q=mysqli_query($con,$s);
             
            echo "<script>window.close();</script>";
        }
        else{
echo "error in uploading the current file! choose another file";
        header("location:f.php");   
        echo "error in uploading the current file! choose another file";
     }
      }
      else
      {
        echo "error in uploading the current file! choose another file";
        header("location:fs.php");
                echo "error in uploading the current file! choose another file";
      }
   } else
{
  echo "not a immage";
}
}



?>