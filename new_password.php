<!DOCTYPE html>
<html>
<head>
	<title>password</title>
</head>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<script type="text/javascript" src="js/jquery.min.js"></script>
 	<!-- <script> 
 		 $(document).ready(function()
      	{
        	$("#rem").click(function()
        	{
          		$("#middle").load("studentprofile.html");
        	});
      	}); -->
<script type="text/javascript">      	
function openNav() {
    document.getElementById("mySidenav").style.width="200px";
}

function closeNav() {
    // document.getElementById("mySidenav").style.width="0";
    // document.getElementById("mySidenav").style.height="0";
    document.getElementById("mySidenav").style.display="none";
    // $("#mySidenav").load("");
    // alert("dlngjf");
}
</script>

<script type="text/javascript" src="js/jquery.min.js"></script>
<!-- <script type="text/javascript"> 
	window.onload = function(){
    document.getElementById('close').onclick = function(){
        this.parentNode.parentNode.parentNode
        .removeChild(this.parentNode.parentNode);
        return false;
    };
};
</script> -->
<style type="text/css">
	body{
			color:blue;
			transform: uppercase;
			font-family: sofia;
			
		}

		.container{
			width:450px; 
			height:auto;
			color:cyan;
			top:60%;
			left:50%;
			position:absolute;
			transform:translate(-45%,-55%);
			box-sizing:border-box;
			background: rgba(0,0,0,0.4);
			padding: 50px 30px;
			font-family: :sofia;

			
			
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
			color: cyan;
			font-size: 25px;
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
		.container input[type="text"],input[type="password"]{
			border-radius: 25px;
			border-bottom: 1px solid white;
			outline: none;
			background: transparent;
			color:white;
			transform: uppercase;
			font-weight: italic;
			font-size: 20px;
		}
		.button{
					background-color: teal;
			 		font-size: 20;
    				border: none;
    				color: black;
    				padding: 10px 2px;
    				text-align: center;
    				text-decoration: none;
    				display: inline-block;
    				font-size: 16px;
    				border-radius: 25px;
    				
				}
		.button:hover{
			background-color: cyan;
			text-decoration-color: green;
		}
		/*#close {
    float:right;
    float: top;
    display:inline-block;
    padding:2px 4px;
    /*background:#ccc;*/
/*}
#close:hover {
    float:right;
    display:inline-block;
    padding:2px 4px;
    background:#ccc;
    /*color:#fff;*/
/*}*/
.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}
</style>
<body>
<div class="container" style="float: left" id="mySidenav">
	
		<form method="post"  action="update.php">
		<h1>Password Change
			 <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
			<!-- <span><i class="fa fa-remove" aria-hidden="true" id="rem"></i></span> -->
<!-- <span id='close' onclick='this.parentNode.parentNode.parentNode.removeChild(this.parentNode.parentNode); return false;'>x</span> -->
		</h1>
			
			<label>New Password</label><br><input type="password" name="new_password" required style="border-width: 20;border-top:30px"><br>
			<label>Retype-password</label><br><input type="password" name="retype_password" required style="border-width: 20;border-top:30px"><br><br>
		
			<input type="submit" name="submit" value="submit" class="button" onclick="submit" style="width: 120px;float: right">

			
		</form>
	</div>
</body>
</html>