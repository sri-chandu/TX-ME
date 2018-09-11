<?php
session_start();
if(isset($_SESSION["invalid_account"]))
{
  echo "<div class='container1'>
                     <div class='alert alert-danger'>
                     <strong>Warning!</strong> Enter correct Credentials.
                     </div>
                     </div>";
                     session_destroy();
}
if(isset($_SESSION["invalid_otp"]))
{
  echo "<div class='container1'>
                     <div class='alert alert-danger'>
                     <strong>Warning!</strong> Enter correct otp.
                     </div>
                     </div>";
                     session_destroy();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>pass</title>
	 <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<style type="text/css">
	body{
			color:white	;
			transform: uppercase;
			font-family: sofia;
			background-image: url(visakhapatnam-hivizag.jpg);
			background-repeat:no-repeat;
			background-size: cover;
			
		}

		.container{
			width:400px; 
			height:auto;
			color:black;
			top:40%;
			left:50%;
			position:absolute;
			transform:translate(-45%,-55%);
			box-sizing:border-box;
		/*	background: rgba(0,0,0,0.3);*/
			padding: 50px 30px;
			font-family: :sofia;
			border-radius:30%;
			
			
		}
		.background-wrap{
			position: fixed;
							z-index: -1000;
							width: 100%;
							height: 100%;
							overflow: hidden;
							top:0;
							left:0;
							box-sizing: border-box;
		}
		label{
			color: black;
			font-size: 15px;
			font-family: :sofia;
		}
		.container h1{
			font-weight: bold;
			font-family: sans-serif;
			text-align: center;
		}
		.container input{
			width: 100%;
			margin-bottom: 20px;
		}
		.container input[type="text"],input[type="email"]{
			border-radius: 5px;
			border-bottom: 1px solid white;
		
			/*background: transparent;*/
			color:black;
			transform: uppercase;
			font-weight: italic;
			font-size: 20px;
		}
		.button{
					background-color:#4caf50;
			 		font-size: 20;
    				border: none;
    				color: black;
    				padding: 10px 2px;
    				text-align: center;
    				text-decoration: none;
/*    				display: inline-block;
*/    				font-size: 16px;
    				border-radius: 5px;
    				
				}
		.button:hover{
			background-color: #e7e7e7;
			text-decoration-color: green;
		}
		}
</style>
<body>

<div class="container" style="float: left">
	
		<form action="account_recovery.php" method="POST">
		<h2>Forgot Password</h2><br>
			<!-- <label>User Name</label><br><input type="text" name="name" required style="border-width: 20;border-top:30px"><br><br> -->
			<label>Enter your Email</label><br><input type="email" name="email" required style="border-width: 20;border-top:30px"><br>
			
			<a href="side.php"><input type="button" name="cancel" value="cancel" class="button" onclick="submit" style="width: 120px"></a>
			<input type="submit" name="submit" value="submit" class="button" onclick="submit" style="width: 120px;float: right">

			
		</form>
	</div>
</body>
</html>