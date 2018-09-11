<?php
session_start();
if(isset($_POST['submit']))
{
  $count=count(array_filter($_FILES['file']));
  $i=0;
  for($i=0;$i<$count;$i++)
  {
	$file=$_FILES['file'][$i];
  $fileo=$_FILES['file']['name'][$i];
	$fileName=$_FILES['file']['name'][$i];
	$fileTmpName=$_FILES['file']['tmp_name'][$i];
    $fileSize=$_FILES['file']['size'][$i];
    $fileError=$_FILES['file']['error'][$i];
	$fileType=$_FILES['file']['type'][$i];


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
          $fileNamenew="$ran".".".$fileActualExt;
        	$fileDestination ='uploadfile/'.$fileNamenew;
        	move_uploaded_file(	$fileTmpName=$_FILES['file']['tmp_name'][$i],$fileDestination);
require 'connect.php';
            $from=$_SESSION['username'];
            $to=$_SESSION["recid"];
            $messegs_status=1;
            date_default_timezone_set("Asia/Calcutta");
            $date=date('Y-m-d H:i:s');
            $s="insert into messages values('','$from','$to','$fileDestination','$messegs_status','$date')";
            $q=mysqli_query($con,$s);
             $p="insert into original values('$fileDestination','$fileo')";
            $po=mysqli_query($con,$p);
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

}

?>