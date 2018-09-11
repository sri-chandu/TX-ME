<!DOCTYPE html>
<html>
<head>
	<title>register</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="images/terminal1.png" />
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/register.css">
	<script type="text/javascript" src="js/bootbox.min.js"></script>
	<script type="text/javascript" src="js/register.js"></script>
	
	<link href="https://fonts.googleapis.com/css?family=Oxygen:400,700" rel="stylesheet">
	<style type="text/css">
		body{
			background-image: url('images/registercover.png');
		}
	</style>
</head>
<body id="body"><br>

<form action="validate.php" method="post" id="registration" enctype="multipart/form-data">
<div class="container">
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4">
			<div class="form-group" id="regdnoo">
				<label for="text-input">Register Number</label>
      			<input type="text" class="form-control" id="regdno" placeholder="Register Number" name="regdno" data-toggle="tooltip" title="" data-placement="right" required>
    		</div>	
		</div>		
	</div>
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-2">
			<div class="form-group" id="srnameee">
				<label for="text-input">SurName</label>
      			<input type="text" class="form-control" id="srname" placeholder="Surname" name="srname"
      			data-toggle="tooltip" title="" data-placement="right" required>
    		</div>	
		</div>
		<div class="col-sm-2">
			<div class="form-group" id="unameee">
				<label for="text-input">Name</label>
      			<input type="text" class="form-control" id="uname" placeholder="Name" name="uname"
      			data-toggle="tooltip" title="" data-placement="right" required>
    		</div>	
		</div>
	</div>
	<!-- <div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-2">
			<div class="form-group" id="fnameee">
				<label for="text-input">Full Name</label>
      			<input type="text" class="form-control" id="fname" placeholder="Full Name" name="fname"
      			data-toggle="tooltip" title="" data-placement="right" required>
    		</div>	
		</div>
	</div> -->
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4">
			<div class="form-group" id="emailll">
				<label for="text-input">Email</label>
      			<input type="text" class="form-control" id="email" placeholder="Email" name="email" 
      			data-toggle="tooltip" title="" data-placement="right" required>
    		</div>	
		</div>
	</div>
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4">
			<div class="form-group" id="stphhh">
				<label for="text-input">Student Mobile Number</label>
      			<input type="text" class="form-control" id="stph" placeholder="Student's Mobile Number" name="stph"
      			data-toggle="tooltip" title="" data-placement="right" required>
    		</div>	
		</div>
	</div>
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4">
			<div class="form-group" id="ftphhh">
				<label for="text-input">Parent Mobile Number</label>
      			<input type="text" class="form-control" id="ftph" placeholder="Parent's Mobile Number" name="ftph"
      			data-toggle="tooltip" title="" data-placement="right" required>
    		</div>	
		</div>
	</div>
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4">
			<div class="form-group" id="stwhnooo">
				<label for="text-input">Student Whatsapp Number</label>
      			<input type="text" class="form-control" id="stwhno" placeholder="Students's Whatsapp Number" name="stwhno" data-toggle="tooltip" title="" data-placement="right" required>
    		</div>	
		</div>
	</div>
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-2">
			<div class="form-group" id="yearrr">
				<label for="text-input">Year</label>
      			 <select class="form-control" id="year" name="year" data-toggle="tooltip" title="" data-placement="right" required>
      			 	<option>Year</option>
				    <option value="2">2</option>
				    <option value="3">3</option>
				    <option value="4">4</option>
  				</select>
    		</div>	
		</div>
		<div class="col-sm-2">
			<div class="form-group" id="seccc">
				<label for="text-input">Section</label>
      			<select class="form-control" id="sec" name="sec" data-toggle="tooltip" title="" data-placement="right" required>
      				<option>Section</option>
    				<!-- <option value="a">a</option>
				    <option value="b">b</option>
				    <option value="c">c</option>
				    <option value="">d</option> -->
  				</select>
    		</div>	
		</div>
	</div>
	

		<div class="row">
			<div class="col-sm-4"></div>
			<div class="col-sm-2">
				<label for="file-upload1" class="custom-file-upload-1" id="custom-file-1">
	    			<i class="glyphicon glyphicon-upload"></i> Upload resume
				</label>
				<div id="form-group" id="resumeee">
					<input id="file-upload1" type="file" class="resume1" name="filee" required/>
				</div>
			</div>
			<div class="col-sm-2">
				<p id="resumeres" style="color: white;font-size: 20px;"></p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4"></div>
			<div class="col-sm-2">
				<label for="file-upload2" class="custom-file-upload-2" id="custom-file-2">
	    			<i class="glyphicon glyphicon-upload"></i><!-- &nbsp;Upload &nbsp;image&nbsp; -->
				</label>
				<div id="form-group" id="imageee">
					<input id="file-upload2" type="file" class="image1" name="imagee" required/>
				</div>
			</div>
			<div class="col-sm-2 imageress" >
				<p id="imageres" style="color: white;font-size: 20px;"></p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4"></div>
			
	   		<div class="col-sm-2">
	   			<input type="reset" class="btn btn-danger " name="reset" id="reset">
	   		</div>
	   		<div class="col-sm-2">
	   			<button type="button" id="helpbtn" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-question-sign"></span>&nbsp;Help</button>
	   		</div>		
		</div>
		<div class="row">
			<div class="col-sm-4"></div>
			<div class="col-sm-4">					
	   			<input type="submit" class="btn btn-success" name="register" id="register"><br><br>
	   		</div>
		</div>
		</form>
</div>
</body>
</html>