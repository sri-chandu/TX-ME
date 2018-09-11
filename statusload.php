<html>
<head>
  <title>TX'ME</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <style>
hr{
  border-width:3px;
}
#imagetag{
 
  word-break: break-all;
  max-height: 80px;
margin-left: 30px;
margin-right: 50px;
}
#mine{
  margin-left:120px;
  color:blue;
font-size: 20px;  

}
#friends{
  margin-left:90px;
  color:blue;
font-size: 20px;  

}

  </style>
   <script>
$(document).ready(function(){
$('#s').click(function(){
$('#s').css("color","red");

});
});
</script>
</html>


 <?php
 session_start();
 $name=$_SESSION['username'];
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
       function status($v,$t)
       {
require 'connect.php';
         $name=$_SESSION['username'];
         $i="select * from chat where sender='$v' and clock='$t'";
            $is=mysqli_query($con,$i);
            while ($rows=mysqli_fetch_assoc($is))
              {
              $proff=$rows["status"];
              $pro=$rows["sender"];
              $e=explode(" ",$rows['clock']);
              $c=$e[1];
              

              $var=propic($pro);
              echo "<hr>";
            echo "<img src='$var' alt='ubj' style='width:30px;height:30px;border-radius:50%;margin-top:5px;margin-left:18px'>";
            if(strpos($proff,'uploadstatus')===0)
            {
              echo "<i style='color:red;'>&nbsp;&nbsp;".$pro."</i><i style='margin-left:180px;' >".$c."</i><br><br>";
              $var=$rows['imagetag'];
              echo "<img src='$proff' style='width:140px;height:170px;border-radius:10%;margin-left:128px;'><br>";
              echo "<br><i id='imagetag'>".$var."</i><br>";
            }
              else{
                echo "&nbsp;&nbsp;<i  style='color:red;'>".$pro."</i><i style='border-radius:5px;float:right;'>".$c."</i>&nbsp;&nbsp;&nbsp;<br><br></i><i style='margin-left:30px;'>".$proff."</i>";
                // .$proff."</i><br><br>";
              }
            
                } 

       }
          
require 'connect.php';
         date_default_timezone_set("Asia/Calcutta");
    $d=date('Y-m-d H:i:s');
// $iu="select * from chat where sender in (select freind from freinds where username='$name') ";
//             $isu=mysqli_query($con,$iu);
//  while ($rowsu=mysqli_fetch_assoc($isu))
//               {
//               $cu=$rowsu["clock"];
//               $vu=$rowsu["sender"];

// }
$m=$_SESSION['username'];
$im="select * from chat where sender='$m'";
$y=mysqli_query($con,$im);

  echo "<br><i id='mine' >your posts</i>";
while($rowsm=mysqli_fetch_assoc($y))
{

  $vm=$rowsm['sender'];
  $rm=$rowsm['clock'];
  status($vm,$rm);
}


  echo "<br><i id='friends' >your friends posts</i>";


$i="select * from chat where sender in (select freind from freinds where username='$name')";
            $is=mysqli_query($con,$i);
            while ($rows=mysqli_fetch_assoc($is))
              {
                $v=$rows['sender'];
                $r=$rows['clock'];
status($v,$r);
                } 
                 // echo "<span class='glyphicon glyphicon-heart' id='s'></span>";
 echo "<hr>";
              ?> 