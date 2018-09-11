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