<html>
<head>
  <title>TX'ME</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>

        <link rel="stylesheet" href="style.css">
                <link rel="stylesheet" href="pro.css">

<script src="js/bootstrap.min.js"></script>
<style>
    #container{
      margin-top: 0;
     
      height:410px;
      border-style:solid;
      border-width: 1px;
      overflow:scroll;
      overflow-x:hidden;
     
    
      border-radius: 10px;
    }
    ::-webkit-scrollbar
{
width:4px;

}
::-webkit-scrollbar-thumb
{
  background:linear-gradient(#F5F5F5, #C0C0C0);
  border-radius: 2px;
}
</style>
<script>
$(document).ready(function(){
	 $("#container").animate({scrollTop:$("#container").prop("scrollHeight")},2000);
	$('#send').click(function(){
		var a=$('#message').val();
		if(a!=undefined)
		{
			$.ajax({
				url:'bsend.php',
				method:'post',
				data:{me:a},
				cache:false,
				
				
			});
		}
		$('#message').val("");
		$("#container").ready(function(){
          $("#container").animate({scrollTop:$("#container").prop("scrollHeight")},1000);
          });
	});

	 setInterval(function(){
          $("#container").load("bget.php");
          },1000)
});
  
        

</script>
</head>
<body>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-6 col-xs-6 sidenava sidep" id="friendspage"><br>
       <h3 align="center"> GROUP CHAT</h3><br>
      
<div class="col-sm-12 col-xs-12">
<div id='container'></div><br><br>
</div>
<div class="col-sm-8 col-xs-8">
<input class="form-control" type="text" placeholder="type here" id='message'>

</div>
<div class="col-sm-4 col-xs-4">
<button type="submit" class="btn btn-success" id="send" name="send">send</button>
</div>
    </div>
</body>
</html>