<?php
session_start();
require 'connect.php';
if (!isset($_SESSION['authuser'])) {
          header("location:login.php");
}
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
  .username{
color: red;
font-size: 50px;
  }
  .search-content{

  }
  .search-content:hover
  {
    background-color: green;
  }
.rssdog
{
  border: none;
}


  /*online style*/
  .sidenav {
  
    height: 100%; /* 100% Full-height */
    width: 0; /* 0 width - change this with JavaScript */
    position:fixed; /* Stay in place */
    z-index: 1; /* Stay on top */
    top: 0; /* Stay at the top */
    right: 0;
    border-left: 1px solid;
    border-color: grey;
    border-position:fixed;
    background-color:white; /* Black*/
    overflow-x: hidden; /* Disable horizontal scroll */
    padding-top: 60px; /* Place content 60px from the top */
    transition: 0.5s; /* 0.5 second transition effect to slide in the sidenav */
}

/* The navigation menu links */
.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 15px;
    color: black;
    display: block;
    transition: 0.3s;
}

/* When you mouse over the navigation links, change their color */
.sidenav a:hover {
    color:red;
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
    .row.content {height: 1000px;
    }
    
    /* Set gray background color and 100% height */
    .sidenava {
      
      height: 1000px ;

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
        height: 1000px;
        padding: 15px;
     
      }
      .row.content {height: 100%;

      } 
    }
    .sidep
    {
/*          background: linear-gradient(to bottom, #ccffff 0%, #0066ff 100%);*/
background-color: white;
overflow-y: scroll;

    }
    #container{
      margin-top: 0;
     
      height:410px;
      border-style: hidden;
      overflow:scroll;
      overflow-x:hidden;
      background:url("containerback.jpg");
      background-size: 750px 420px;
      border-radius: 10px;
  
      

    }
       #contai{
  margin-top: 0px;
  border-radius: 10px 10px 0px 0px;

height:50px;
border-style:hidden;
background-color:black;
color:white;
font-size: 25px;
/*margin-left: -15px;
*/  }
    input[type=text]
    {

      overflow-x:hidden;
      overflow: scroll;
    word-wrap:break-word;

    }
        #containern{
      margin-top: 0;
      width:750px;
      height:470;
      border-style: hidden;
      overflow:scroll;
      overflow-x:hidden;
      background:url("containerback.jpg");
      background-size: 750px 420px;
      border-radius: 10px;
  
      

    }
    #friendspage
    {
      border-right:solid;
      border-color:grey;
      border-width: 1px;
      overflow:scroll;
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

    body{
      background-color:white;
      overflow-y:hidden;
    }
.right
{
  margin-top:-20px;
  
   /*   min-height:750px;*/
   height: auto;
      border-left: solid;
      border-color:grey;
        border-width: 1px;
}
.top
{
  height:120px;
  margin-top: 0px;
  margin-left: -16px;
  margin-right: -30px;
 border-bottom: solid;
      border-color:grey;
        border-width: 1px;
}
/*#statuscon{
  background-color: grey;
  width:250px;
  height:400px;
    border-radius: 10px 10px 10px 10px;
    border:solid;
    border-width:1px;
    border-color: black;
    margin-left: 5px;*/
#friendss{
  height: 599px;
  overflow: scroll;
  width: 365px;
  background-color: white;
  /*border: solid;*/
}
 #statuscon{
      margin-top: 0;
      min-height: 580px;
      min-width:340px;
      max-width:340px;
      max-height:580px;
      border-style: hidden;
      overflow:scroll;
      overflow-x:hidden;
      margin-left: 10px;
      
/*      background:url("containerback.jpg");
*/      background-size: 750px 420px;
      border-radius: 10px;
  
      

    }
  
#statusdec{
    border-radius: 10px 10px 10px 10px;
    margin-left: 10px;
width:290px;
height:40px;
position:fixed;

background-color:black;
color:white;
font-size: 25px;
}
#profilename{
  font-size: 15px;
  height: 15px;
}
/*#status{
  overflow: scroll;
}
#text-message{
  overflow: scroll;
}*/

  </style>
  <script>

  $(document).ready(function(){
     
      
                           $("#container").scrollTop($("#container")[0].scrollHeight);
                        $("#clicked").click(function(){
                  $(this).hide();
                        });

          $("#send").hide();
         $("#text-message").hide();
         $("#attach").hide();
                 $("#container").hide();  
                 $("#contai").hide();  

setInterval(function(){
         $("#statuscon").load("statusload.php"); //for loading friends
         },1000)
setInterval(function(){
         $("#friendss").load("friend.php"); //for loading friends
         },1000)
         //  setInterval(function(){
         // $("#friends").load("friend.php"); //for loading friends
         // },1000)
         $("#text-message").keyup(function(event){
           if(event.keyCode==13)
           {
             $("#send").click(); //for sending messeges when enter is clicked
           }
         });
         $("#button-change-pass").click(function(){
          var oldpass=$("#opwd").val();
                    var newpass=$("#Npwd").val();
          var Rnewpass=$("#Rnpwd").val();

          if(Rnewpass!=newpass)
          {
            alert("enter same passwords");
          }
          else
          {
          $.ajax({
              url:"changepass.php",
              method:"post",
              data:{pass:newpass,old:oldpass},
              success:function(data)
              {
                if(data=='true')
                {
                  alert("password changed sccessfully");
                }
                else
                {
                  audioElement.play();
                  alert("check your old password!");
                }
              },
              cache:false,

          });
          $("#Rnpwd").val("");$("#opwd").val("");$("#Npwd").val("");

          }
        });
      



           $("#button-change-mobile").click(function(){
          var mobile1=$("#mobile123").val();

          $.ajax({
              url:"changemobile.php",
              method:"post",
              data:{mobile:mobile1},
              cache:false,
          });
        });
                $("#mobile123").keyup(function(event){
           if(event.keyCode==13)
           {
             $("#button-change-mobile").click(); 
           }
         });

                $("#statusbar").click(function(){
                  $("#statust").hide();
                  $("#status").hide();
                });
                $("#statusbarr").click(function(){
                   $("#statust").show();
                  $("#status").show();
                });

          $("#button-change-email").click(function(){
          var email=$("#email123").val();
         

          $.ajax({
              url:"changeemail.php",
              method:"post",
              data:{emailid:email},
              cache:false,
          });
        }); 


      $("#email123").keyup(function(event){
           if(event.keyCode==13)
           {
             $("#button-change-email").click(); 
           }
         });

         $(document).on('click','[class^=search-content]',function(){

                    $(this).click(function(){
                      var peoplename=$(this).attr('id'); //for getting id of a person
                    
                    
            $("#search-for-friend").val(peoplename); //getting value of search box
            $("#people").html(" ");
        });

   
        });
        $(document).on('click','[class^=search-content]',function(){

                    $(this).click(function(){
                      var peoplename=$(this).attr('id'); //for getting id of a person
                    
            $("#search-for-friend").val(peoplename); //getting value of search box
            $("#people").html(" ");
        });
        });
        $("#imgselect").click(function(){
            $("#uploadimg").trigger("click");
        });
        $("#uploadimg").change(function(e){
            var name = e.target.files[0].name;

                    var ext = name.split('.').pop();

                    var file_data = $('#uploadimg').prop('files')[0]; 

                    var form_data = new FormData();  
                    var id="";
 
                    form_data.append('file', file_data);
                    form_data.append('id',id);
                    form_data.append('ext',ext);
            $.ajax({
                 url: "upload.php",
                        type: "POST",
                        data:  form_data,
                        contentType: false,
                        cache: false,
                        processData:false,
                        success: function(data){
                            if(data == true)
                            {
                                location.reload(true);
                            }
                            else
                                alert("failed to update the image");
                        }
            });
        });
        $(document).on('click','[id^=add]',function(){
          
          var result=$("#search-for-friend").val();
          // alert(result);
          $.ajax({
            url:"addfriend.php",   //for adding friend
            method:"post",
            data:{name:result},
            cache:false,
          });
            $("#search-for-friend").val("");
        });
        $(document).on('click','[class^=row]','[class^=name]',function()
        {

          var recid=$(this).attr('id');
        
          if(recid!=undefined)
          {
               $.ajax({
            url:"addsession.php",                   //for knowing the receiver 
            method:"post",
            data:{to:recid},
            cache:false,
          });
          var friend= $(this).attr('id');
          $.ajax({
            url:"unread.php",   // for unread messeges
            method:"post",
            data:{friend:friend},
            cache:false,
            
          });
           setInterval(function(){
          $("#contai").load("info.php");
          },1000)
          /* when user click on friend name*/
          setInterval(function(){
          $("#container").load("getmsg.php");
          },1000)/* for loadng messages*/
          $("#container").ready(function(){
          $("#container").animate({scrollTop:$("#container").prop("scrollHeight")},1000);
           // alert("hii");
          });
          // $(this).css("background-color","green");
          // $('#image').hide();
          $("#person-name").html(recid);
          $("#send").show();
          $("#text-message").show();
          $("#attach").show();
                    $("#container").show();
$("#contai").show(); 
          $("#text-message").attr("placeholder","Type here want to Say to "+recid);
          $("#container").ready(function(){
          $("#container").animate({scrollTop:$("#container").prop("scrollHeight")},1000);
          });
          $("#container").scroll(function(){
              if($("#container").scrollTop()==0)
          {
            
          }
          });
          }
        });
          $('#status').click(function(){
            var a=$('#statust').val();
            if(a!=undefined)
            {
            $.ajax({
              url:'status.php',
              method:'post',
              data:{status:a},
            });
          }
          $("#statust").val("");
          });
          $('#send').click(function(){
          var msg=$('#text-message').val(); 
     var audioElement = document.createElement('audio');
    audioElement.setAttribute('src', 'messenger_web.mp3');
    $.get();
        audioElement.play();
    //for getting the messegeFs
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
          $('#search-for-friend').keyup(function(event){
          var value=$('#search-for-friend').val();
          // alert(value);
          if((event.keyCode!=40)&&(event.keyCode!=38))
          {
          $.ajax({
            url:"search.php",
            method:"post",
            data:{name:value},
             cache:false,
             success:function(data) {
               $("#people").html(data);
                },
            });
        }
        });
          $('#text-message').click(function(event){
    var audioElement = document.createElement('audio');
    audioElement.setAttribute('src', 'facebook_msnger_2014.mp3');
    $.get();
        audioElement.play();
          });
 

      });
  </script>
</head>
<body>

  <div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 col-xs-3 sidenava sidep" id="friendspage"><br>
       <h3 align="center"> Find Your Friends Here</h3><br>
        <div class="input-group">
        <input list="people" class="form-control" id="search-for-friend" placeholder="add new freind here...">
        <datalist id="people">
        </datalist>

        <span class="input-group-btn"><button class="btn btn-default"  id="add" type="button">Add</button></span>
      </div>
<div id="friendss"></div>
      <div id="friends"></div>
    </div>

    <!--       <div class="col-sm-6 col-xs-6" id="image">
              <img src="open-uri20151118-3-o3iwrn.gif" widtj="200px" height="180px" align="left">
               <h5 class="username"><?php echo "Welcome "."$_SESSION[username]"?></h5>
              
          </div> -->
          <div id="mySidenav" class="sidenav">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" id="statusbarr">&times;</a>
          <center>
          <div class="profile-pic">
          <a id="imgselect">
          <?php
          $name=$_SESSION['username'];
       
            $s="select * from propic where name='$name' ";
            $res=mysqli_query($con,$s);
            while ($row=mysqli_fetch_assoc($res))
              {
              $prof=$row["image"];
                }          
              echo "<img src='$prof'  style='border-radius:100px;width:120px;height:120px' name='profile'><br>";
              echo "<i id='profilename'>".$name."</i>";
              ?> </a>
              <input type="file" id="uploadimg" style="display:none;">
              <div class="edit"><label for="file-upload2" class="custom-file-upload-2" id="custom-file-2">
              <i class="glyphicon glyphicon-upload"></i><!-- &nbsp;Upload &nbsp;image&nbsp; -->
              </label>
              <div id="form-group" id="imageee">
            </div>
            </div>
            </div>
            </center>
            <center>  <a data-toggle="modal" data-target="#mobile">change moblie number</a></center>
            <center>  <a data-toggle="modal" data-target="#Email">change Email address</a></center>
            <center>  <a data-toggle="modal" data-target="#changepass">Change Password</a></center>
<!--               <center><button id="clicked">cil</button></center>
 -->            <center><a href="logout.php">Logout</a></center>
            </div>


  
<br>
<!-- <br><br>
Invite new friends&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br><br>
See Status Here &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br><br>
<a href="game.html">Try this games here</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br> -->

</span>


<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "380px";
    document.getElementById("main").style.marginLeft = "250px";
    document.body.style.backgroundColor = "white";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
    document.body.style.backgroundColor = "white";
}
</script>

<div class="col-sm-6 col-xs-6">
<div class="col-sm-12 col-xs-12">
 <div class="top" >
<!--   <img src="tenor.gif" width="250px" height="120px" align="left" style="margin-top:-15px;margin-left:20px;margin-right:30px">
 -->      
       <?php
          $name=$_SESSION['username'];
      
            $i="select * from propic where name='$name' ";
            $is=mysqli_query($con,$i);
            while ($rows=mysqli_fetch_assoc($is))
              {
              $proff=$rows["image"];
              
                }  
                $m=$_SESSION['mobile'];        
              echo "<img src='$proff'  style='border-radius:20px;width:120px;height:120px;margin-left:30px;margin-top:-8px;align:left;' name='profile'>";
              echo "<i style='margin-left:15px;font-size:30px;'>".$name."</i>";
             echo "<i style='margin-left:15px;font-size:10px;'>".$m."</i>";
             
              ?> 

<!--               <img src="open-uri20151118-3-o3iwrn.gif" width="120px" height="120px" align="right" style="margin-top:-15px;margin-right:20px">
 -->               
</div>
 </div>
<div class="col-sm-12 col-xs-12 col-lg-12 col-md-12">
   <br>
     <div id='contai'>
    
    
     </div>

 </div>
       
<div class="col-sm-12 col-xs-12 col-lg-12 col-md-12">
    <div id="container" >


    </div>
       <br> <br> <br> 

 </div>
   
    <div class="bott">
    
    <div class="col-sm-8 col-xs-8 col-lg-8 col-md-8">
    <input class="form-control" type="text" name="message" id="text-message" placeholder="type here" size="290">
      
    </div>
        <div class="col-sm-4 col-xs-4 col-lg-4 col-md-4">

<button type="submit" class="btn btn-success" id="send" name="send">send</button>
<!--      <a href="fs.php" target="_blank"> -->
    <a data-toggle="modal" data-target="#attaches">  <button type="submit" class="btn btn-primary" id="attach" name="attach">Attach files</button></a>
<!--     </a>
 --></div>

    </div>
    
    </div>

 <div class="col-sm-3 col-xs-3">
  <div class="right" class="col-sm-9 col-xs-9" >
    <br>

 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <span style="font-size:20px;cursor:pointer" onclick="openNav()" id="statusbar">&#9776; Change Your Account Settings</span><br><br>
       <!-- <i id="statusbar"></i> -->  <div class="col-sm-11 col-xs-11">
      <center><span style="font-size:20px;cursor:pointer;border-bottom:solid;" > see status</span></center><!-- <br> --><br>
        <div class="input-group">
        <input  class="form-control"  placeholder="post status here..." id="statust" overflow="scroll" >
        <span class="input-group-btn"><button class="btn btn-primary"  id="status" type="button">post</button></span>
                <span class="input-group-btn"><a href="fsp.php" target="_blank"><button class="btn btn-danger"  id="status" >post a image</button></a></span>

      </div>
    </div>
    <br><br><br>
    <div id="statuscon"></div>
 
  <br><br>

  </div>

<br>
<!-- start sw-rss-feed code --> 

<!-- The link below helps keep this service FREE, and helps other people find the SW widget. Please be cool and keep it! Thanks. --> 
<!-- end sw-rss-feed code -->
</div>
</div>


<!-- password change -->
<form>

  <!-- Trigger the modal with a button -->
  <!-- Modal -->
 
 
<div class="container">
  <!-- Trigger the modal with a button -->

  <!-- Modal -->
  <div class="modal fade" id="attaches" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content"><center style="margin-top:20px"><b>Change Your Mobile Number Here</b></center>
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <form action="uploadds.php" method="post" enctype="multipart/form-data">
      <input type="file" name="file[]" multiple="multiple" accept="video/*">
            <button type="submit" name="submit">upload</button>
    </form> 
       
        <div class="modal-footer">
                  <button type="submit"  id="button-change-mobile" class="btn btn-success" data-dismiss="modal">change</button>
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
           <input type="text" class="form-control" id="mobile123" size="20">
       </div><br><br>
  
        <div class="modal-footer">
                  <button type="submit"  id="button-change-mobile" class="btn btn-success" data-dismiss="modal">change</button>
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
          <button type="button"   class="close" data-dismiss="modal">&times;</button>
        </div><br>
       <div class="form-group input-sm">
           <label for="usr">New Email address</label>
           <input type="text" class="form-control" id="email123" size="20">
       </div><br><br>

        <div class="modal-footer">
                  <button type="submit" id="button-change-email" class="btn btn-success" data-dismiss="modal">change</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
 <div class="modal fade" id="changepass" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content"><center style="margin-top:20px"><b>Change Your Password Here</b></center>
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div><br>
       <div class="form-group input-sm">
           <label for="usr">Enter Old Password</label>
           <input type="password" class="form-control" id="opwd" size="20">
       </div><br>
      <div class="form-group input-sm">
           <label for="pwd">Enter New Password:</label>
             <input type="password" class="form-control" id="Npwd">
      </div><br>
       <div class="form-group input-sm">
           <label for="pwd">Renter New Password:</label>
             <input type="password" class="form-control" id="Rnpwd">
      </div><br><br>

        <div class="modal-footer">
         <button type="submit" class="btn btn-success" data-dismiss="modal" name="mobilec" id="button-change-pass">change</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">close</button>
        </div>
      </div>
       </div>
  </div>
</form>

  
</div>
</body>

  </html>
  