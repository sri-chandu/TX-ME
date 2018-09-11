<?php
session_start();
?>

<!DOCTYPE html>
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
  <style>
  div.bott
  {
      position: absolute;
      bottom:0px;

  }


  /*online style*/
  .sidenav {
    height: 100%; /* 100% Full-height */
    width: 0; /* 0 width - change this with JavaScript */
    position: fixed; /* Stay in place */
    z-index: 1; /* Stay on top */
    top: 0; /* Stay at the top */
    right: 0;
    background-color: #111; /* Black*/
    overflow-x: hidden; /* Disable horizontal scroll */
    padding-top: 60px; /* Place content 60px from the top */
    transition: 0.5s; /* 0.5 second transition effect to slide in the sidenav */
}

/* The navigation menu links */
.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 15px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

/* When you mouse over the navigation links, change their color */
.sidenav a:hover {
    color: #f1f1f1;
}

/* Position and style the close button (top right corner) */
.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
   
}

/* Style page content - use this if you want to push the page content to the right when you open the side navigation */
#main {
    transition: margin-right .5s;
    padding: 20px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
}

    /* Set height of the grid so .sidenava can be 100% (adjust if needed) */
    .row.content {height: 750px}
    
    /* Set gray background color and 100% height */
    .sidenava {
      
      height: 100% ;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenava and grid */
    @media screen and (max-width: 767px) {
      .sidenava {
        height: 100%;
        padding: 15px;
      }
      .row.content {height: 100%;} 
    }
    .sidep
    {
          background: linear-gradient(to bottom, #ccffff 0%, #0066ff 100%);

    }
    #container{
    /*  min-height: 400px;
      min-width: 800px;
      width: auto;
      height: auto;*/
     /* max-width:800px;
      max-height:570px;*/
      margin-top: 0;
      width:800px;
      height:470px;
      border:2px solid black;
      overflow:scroll;
  
      

    }
    body{
      background-color:white;
    }
  </style>
  <script>
  $(document).ready(function()
      {
        $("#send").hide();
        $("#text-message").hide();
        $("#attach").hide();
                $("#container").hide();

        setInterval(function(){
        $("#friends").load("friend.php");
        },1000)
        $("#text-message").keyup(function(event){
          if(event.keyCode==13)
          {
            $("#send").click();
          }
        });
        // $(document).on('click','[class^=omessage]','[class^=umessage]',function()
        // {
        //  var msgid=$(this).attr('id');
        //  alert(msgid);
        // });
        $(document).on('click','[class^=row]','[class^=name]',function()
        {

          var recid=$(this).attr('id');
          if(recid!=undefined)
          {
               $.ajax({
            url:"addsession.php",
            method:"post",
            data:{to:recid},
            cache:false,
          });
          var friend= $(this).attr('id');
          $.ajax({
            url:"unread.php",
            method:"post",
            data:{friend:friend},
            cache:false,
            
          });
          /* when user click on friend name*/
          setInterval(function(){
          $("#container").load("getmsg.php");
          },1000)/* for loadng messages*/
          $("#container").ready(function(){
          $("#container").animate({scrollTop:$("#container").prop("scrollHeight")},1000);
           // alert("hii");
          });
          // $(this).css("background-color","green");
          $("#person-name").html(recid);
          $("#send").show();
          $("#text-message").show();
          $("#attach").show();
                    $("#container").show();

          $("#text-message").attr("placeholder","Type here want to Say to "+recid);
          $("#container").ready(function(){
          $("#container").animate({scrollTop:$("#container").prop("scrollHeight")},1000);
          });
          $("#container").scroll(function(){
              if($("#container").scrollTop()==0)
          {
            // $.ajax({
            //  url:"load.php",
            //  method:"post",
            //  data:{message:msg},
            //  cache:false,
            // });


          }
          });
          }
  
          
          
          
        });
          $('#send').click(function(){
          var msg=$('#text-message').val();
          // alert(recid);
          $.ajax({
            url:"send.php",
            method:"post",
            data:{message:msg},
            cache:false,
          });
          $("#container").ready(function(){
          $("#container").animate({scrollTop:$("#container").prop("scrollHeight")},1000);
            
          });
          $("#text-message").val("");
        // $("#container").scrollTop($("#container")[0].scrollHeight);
        }); 
              // searching
          $('#search').keyup(function(){
          var value=$('#search').val();
          // alert(value);
          $.ajax({
            url:"search.php",
            method:"post",
            data:{name:value},
            // cache:false,
            success:function(data) {
              $("#display").html(data);
                },
            });
        });
                   $("#container").scrollTop($("#container")[0].scrollHeight);

      });
  </script>
</head>
<body>

  <div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenava sidep" id='friends'>
      
      
    </div>

    <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
   
<center>
  <div class="profile-pic">
  <img src='download.jpg'  style='border-radius:100px;width:120px;height:120px'> 
  <div class="edit"><input type="file" value='jbf' class='hidden'><i class="fa fa-pencil fa-lg"></i></div>
  </div></center><br>

  
  <div class="input-group">
   <input type="text" class="form-control" placeholder="search friend..">
   <span class="input-group-btn">
        <button class="btn btn-default" type="button">Add</button>
   </span>
</div>
<center>  <a data-toggle="modal" data-target="#changepass">Change Password</a>

  </center>
  <center>  <a data-toggle="modal" data-target="#mobile">change moblie number</a>

  </center>
  <center>  <a data-toggle="modal" data-target="#Email">change Email address</a>

  </center>
  <center><a href="">Status
</a>
  </center align="bottom">
<center><a href="logout.php">Logout
</a>
  </center>
</div>

<div id="main">
  <p align="right">
  <span style="font-size:20px;cursor:pointer" onclick="openNav()">&#9776; View Profile</span></p>
</div>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
    document.body.style.backgroundColor = "white";
}
</script>
<div class="col-xs-9">
   <div class="container">
    <div id="container" >


    </div>
   <br> <br><br>
    <div class="bott">
    
    <div class="col-xs-6">
    <input class="form-control" type="text" name="message" id="text-message" placeholder="type here" size="180">
    </div><button type="submit" class="btn btn-success" id="send" name="send">send</button>
    <button type="submit" class="btn btn-primary" id="attach" name="attach">Attach files</button>
    
    </div>
    
    </div>
  </div>
</div>
<!-- password change -->
<form>
<div class="container">
  <!-- Trigger the modal with a button -->
  <!-- Modal -->
  <div class="modal fade" id="changepass" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content"><center style="margin-top:20px"><b>Change Your Password Here</b></center>
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div><br>
       <div class="form-group input-sm">
           <label for="usr">Enter Old Password</label>
           <input type="password" class="form-control" id="apwd" size="20">
       </div><br>
      <div class="form-group input-sm">
           <label for="pwd">Enter New Password:</label>
             <input type="password" class="form-control" id="Npwd">
      </div><br>
       <div class="form-group input-sm">
           <label for="pwd">Renter New Password:</label>
             <input type="password" class="form-control" id="Rnpwd">
      </div><br>

        <div class="modal-footer">
         <button type="submit" class="btn btn-success" data-dismiss="modal" name="mobilec">change</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>


<!-- mobile change -->


<div class="container">
  <!-- Trigger the modal with a button -->

  <!-- Modal -->
  <div class="modal fade" id="mobile" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content"><center style="margin-top:20px"><b>Change Your Mobile Number Here</b></center>
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div><br>
       <div class="form-group input-sm">
           <label for="usr">New Mobile Number</label>
           <input type="text" class="form-control" id="mobile" size="20">
       </div><br>
  
        <div class="modal-footer">
                  <button type="submit" class="btn btn-success" data-dismiss="modal">change</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

<!-- email change -->
<div class="container">
  <!-- Trigger the modal with a button -->

  <!-- Modal -->
  <div class="modal fade" id="Email" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content"><center style="margin-top:20px"><b>Change Email address</b></center>
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div><br>
       <div class="form-group input-sm">
           <label for="usr">New Email address</label>
           <input type="text" class="form-control" id="mobile" size="20">
       </div><br>
  
        <div class="modal-footer">
                  <button type="submit" class="btn btn-success" data-dismiss="modal">change</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
</form>
</body>
  </body>
  </html>
  