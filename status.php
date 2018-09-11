<?php
session_start();
$var=$_POST["status"];
$p=$_SESSION['username'];
date_default_timezone_set("Asia/Calcutta");
		$date=date('Y-m-d H:i:s');
require 'connect.php';
          $r="insert into chat values('$var','','$p','$date') ";
          $a=mysqli_query($con,$r);
          ?>

          <!-- all you guyss listen..it is very important notice---"i am beautiful person on this universe
.if any girl see me,they will immediately propose me!!if u want any girl friend contact me!
and from tommorow onwards call me as manmadha..if u don't call with that name i will kill you" -->