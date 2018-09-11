<html lang="en">
<head>
  <title>TX'ME</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>

        <link rel="stylesheet" href="style.css">
                <link rel="stylesheet" href="pro.css">

<script src="js/bootstrap.min.js"></script>
</head>
<body>
	<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<form action='valotp1.php' method='post'>
<div class="jumbotron text-center">
  <h2>Enter the OTP sent to your registered mobile number..!</h2><br>
 <div class="form-group row">
      
    <div class="col-xs-9">
   <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    <input id="MobileNumber" type="text" class="form-control input-lg" name="otp" placeholder="enter otp here">
  </div> 
   </div>
</div>



<button type="submit" class="btn btn-warning" name='submit1'>submit</button>
</div>
  
</form>

</body>
</html>
<?php
session_start();
$t=$_SESSION['otp'];
if(isset($_POST['submit1']))
{
  $var=$_POST['otp'];
  $con=mysqli_connect("localhost","root","karthik","chatting");
            $s="select * from otp where mobile='$t'";
            $res=mysqli_query($con,$s);
            while($e=mysqli_fetch_assoc($res))
            {
              $ot=$e['otp'];
            }

    if($var==$ot)
  
      header('location:login.php');
    }
    else
    {
      echo "invalid";
    }
}