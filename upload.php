<?php
session_start();
    $src = $_FILES['file']['tmp_name'];
    $id = $_POST["id"];
    $ext = $_POST["ext"];
    $name=$_SESSION['username'];
    $info = pathinfo($_FILES['file']['tmp_name']);
    $ran=rand();
    $newname = $ran.".".$ext;

    $targ = "uploads/".$newname;
    $con = mysqli_connect("localhost","root","karthik","chatting");
    
    if($con)
    {
        $q = "update propic set image='$targ' where name='$name'";
        $e = mysqli_query($con,$q);
        if($e)
        {
            move_uploaded_file($src, $targ);
            echo true;
        }
        else
            echo false;
    }
?>