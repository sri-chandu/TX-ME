<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <style>
  #er{
    padding: 10px;
    background: blue; 
    display: table;
    color: #fff;
    border-radius: 5px;
     }



input[type="file"] {
    display: none;
}
  </style>

</head>
	<body>
		
			
 
   <div class="container-fluid">  
   <div class="col-xs-12"> 
   <form action="uploadstatus.php" method="post" enctype="multipart/form-data">  
   <br>  
      	 
<div class="form-group row">
    <div class="col-xs-6">
    	<label id="er">choose your photo<input type="file" name="file" id='file'></label><br>
   <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
    <input id="username" type="text" class="form-control input-small" name="imagetag" placeholder="write about image...">
  </div> 
</div> <br><br><br> <br><br><br> 
   <span>
            &nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" class="btn btn-success"name="submit">upload</button>

            <span></div><br>  

		</form>	
	</body>
	</html>