<?php
session_start();
if(isset($_SESSION["failed"]))
{
  echo "<div class='container'>
                     <div class='alert alert-danger'>
                     <strong>Warning!</strong> Enter correct Credentials.
                     </div>
                     </div>";
                     session_destroy();
}
?>
<?php
 $characters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz@#$&*";
$length=5;
$i=0;
$captcha='';
for($i=0;$i<$length;$i++)
{
    $character=$characters[rand(0,66)];
    $captcha=$captcha.$character;
    
}
?>

<html lang="en" >
<head>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <!-- // <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->

<script src="js/bootstrap.min.js"></script>
  <script >
  $(document).ready(function(){

       $('#login').attr('disabled',true); 
       $("#recaptcha").bind('copy cut paste drop',function(e){
        e.preventDefault();
       });
       $("#captcha").bind('copy cut paste drag',function(e){
        e.preventDefault();
       })
        $("#recaptcha").keyup(function(){
            var recaptcha=$("#recaptcha").val();
           var captcha='<?php echo $captcha;?>';
            if(captcha==recaptcha)
                {
                     $('#login').attr('disabled',false);
                }
            else{
                $('#login').attr('disabled',true);
            }
            
        
        });
      });
        </script>

</head>
   <body>
      <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Welcome To Login Page</a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="signin.html">signup</a></li>
    </ul>
  </div>
</nav>
<form  method="post" action="validate.php">
  <div class="container"><br>
<h4><span class="label label-warning">username</span></h4>   
<div class="form-group row">
    <div class="col-xs-6">
   <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    <input id="username" type="text" class="form-control input-small" required  name="username" placeholder="username">
  </div> 
   </div>
</div>
<br>
<h4><span class="label label-danger">PASSWORD</span></h4>
  <div class="form-group row">  
  <div class="col-xs-6">
  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
    <input id="password" type="password" class="form-control input-small"  required name="password" placeholder="Password">
  </div>
  </div>
</div>

   
<!--   <p>gddaj</p>
 --><br>

<h4><!-- <span class="label label-info"> --> captcha<!-- </span> --></h4>

<div class="form-group row">
    <div class="col-xs-4">
   <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-font"></i></span>
<input type="text" name="form-username" class=" form-control input-small" id="captcha" autocomplete="off" style="color:black;font-weight:bold;" value=<?php echo $captcha;?> readonly>  </div> 
   </div>
</div>
<h4><!-- <span class="label label-info"> --> enter the above captcha <!-- </span> --></h4>

<div class="form-group row">
    <div class="col-xs-4">
   <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-font"></i></span>
<input type="text" name="form-username" placeholder="Please Enter captcha" class=" form-control input-small" id="recaptcha" autocomplete="off"> 
   </div>
</div>
  
  </div>
      <button type="submit"  id="login" name="submit" class="btn btn-primary">sumbit</button></form><br><br>
</div>
</body>




</html>
