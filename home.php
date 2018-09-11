<?php
session_start();
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
    /* Disable horizontal scroll */
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
      width:750px;
      height:470px;
      border-style: hidden;
      overflow:scroll;
     
      background:url("containerback.jpg");
      background-size: 750px 420px;
      border-radius: 10px 10px 10px 10px;
  
      

    }

    input[type=text]
    {

      overflow-x:hidden;
      overflow: scroll;
    word-wrap:break-word;

    }
   
    #message{
      margin-top: 0;
    
      height:470px;
      border-style: hidden;
      overflow:scroll;
     
      background:url("containerback.jpg");
      background-size: 750px 420px;
      border-radius: 10px 10px 10px 10px;
  
      

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
   width:367px;
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
      
      background-size: 750px 420px;
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
  </style>
  <script>

  $(document).ready(function()
      {
     setInterval(function(){
         $("#message").load("getmsg.php"); //for loading friends
         },1000)
      
//                            $("#container").scrollTop($("#container")[0].scrollHeight);
//                         $("#clicked").click(function(){
//                   $(this).hide();
//                         });

//           $("#send").hide();
//          $("#text-message").hide();
//          $("#attach").hide();
                 
// setInterval(function(){
//          $("#statuscon").load("statusload.php"); //for loading friends
//          },1000)
// setInterval(function(){
//          $("#friendss").load("friend.php"); //for loading friends
//          },1000)
//          //  setInterval(function(){
//          // $("#friends").load("friend.php"); //for loading friends
//          // },1000)
//          $("#text-message").keyup(function(event){
//            if(event.keyCode==13)
//            {
//              $("#send").click(); //for sending messeges when enter is clicked
//            }
//          });
//          $("#button-change-pass").click(function(){
//           var oldpass=$("#opwd").val();
//                     var newpass=$("#Npwd").val();
//           var Rnewpass=$("#Rnpwd").val();

//           if(Rnewpass!=newpass)
//           {
//             alert("enter same passwords");
//           }
//           else
//           {
//           $.ajax({
//               url:"changepass.php",
//               method:"post",
//               data:{pass:newpass,old:oldpass},
//               success:function(data)
//               {
//                 if(data=='true')
//                 {
//                   alert("password changed sccessfully");
//                 }
//                 else
//                 {
//                   audioElement.play();
//                   alert("check your old password!");
//                 }
//               },
//               cache:false,

//           });
//           $("#Rnpwd").val("");$("#opwd").val("");$("#Npwd").val("");

//           }
//         });
      



//            $("#button-change-mobile").click(function(){
//           var mobile1=$("#mobile123").val();

//           $.ajax({
//               url:"changemobile.php",
//               method:"post",
//               data:{mobile:mobile1},
//               cache:false,
//           });
//         });
//                 $("#mobile123").keyup(function(event){
//            if(event.keyCode==13)
//            {
//              $("#button-change-mobile").click(); 
//            }
//          });

//                 $("#statusbar").click(function(){
//                   $("#statust").hide();
//                   $("#status").hide();
//                 });
//                 $("#statusbarr").click(function(){
//                    $("#statust").show();
//                   $("#status").show();
//                 });

//           $("#button-change-email").click(function(){
//           var email=$("#email123").val();
         

//           $.ajax({
//               url:"changeemail.php",
//               method:"post",
//               data:{emailid:email},
//               cache:false,
//           });
//         }); 


//       $("#email123").keyup(function(event){
//            if(event.keyCode==13)
//            {
//              $("#button-change-email").click(); 
//            }
//          });

//          $(document).on('click','[class^=search-content]',function(){

//                     $(this).click(function(){
//                       var peoplename=$(this).attr('id'); //for getting id of a person
                    
                    
//             $("#search-for-friend").val(peoplename); //getting value of search box
//             $("#people").html(" ");
//         });

   
//         });
//         $(document).on('click','[class^=search-content]',function(){

//                     $(this).click(function(){
//                       var peoplename=$(this).attr('id'); //for getting id of a person
                    
//             $("#search-for-friend").val(peoplename); //getting value of search box
//             $("#people").html(" ");
//         });
//         });
//         $(document).on('click','[id^=add]',function(){
          
//           var result=$("#search-for-friend").val();
//           // alert(result);
//           $.ajax({
//             url:"addfriend.php",   //for adding friend
//             method:"post",
//             data:{name:result},
//             cache:false,
//           });
//             $("#search-for-friend").val("");
//         });
//         $(document).on('click','[class^=row]','[class^=name]',function()
//         {

//           var recid=$(this).attr('id');
        
//           if(recid!=undefined)
//           {
//                $.ajax({
//             url:"addsession.php",                   //for knowing the receiver 
//             method:"post",
//             data:{to:recid},
//             cache:false,
//           });
//           var friend= $(this).attr('id');
//           $.ajax({
//             url:"unread.php",   // for unread messeges
//             method:"post",
//             data:{friend:friend},
//             cache:false,
            
//           });
//           /* when user click on friend name*/
//           setInterval(function(){
//           $("#container").load("getmsg.php");
//           },1000)/* for loadng messages*/
//           $("#container").ready(function(){
//           $("#container").animate({scrollTop:$("#container").prop("scrollHeight")},1000);
//            // alert("hii");
//           });
//           // $(this).css("background-color","green");
//           // $('#image').hide();
//           $("#person-name").html(recid);
//           $("#send").show();
//           $("#text-message").show();
//           $("#attach").show();
//                     $("#container").show();

//           $("#text-message").attr("placeholder","Type here want to Say to "+recid);
//           $("#container").ready(function(){
//           $("#container").animate({scrollTop:$("#container").prop("scrollHeight")},1000);
//           });
//           $("#container").scroll(function(){
//               if($("#container").scrollTop()==0)
//           {
            
//           }
//           });
//           }
//         });
//           $('#status').click(function(){
//             var a=$('#statust').val();
//             if(a!=undefined)
//             {
//             $.ajax({
//               url:'status.php',
//               method:'post',
//               data:{status:a},
//             });
//           }
//           $("#statust").val("");
//           });
//           $('#send').click(function(){
//           var msg=$('#text-message').val(); 
//      var audioElement = document.createElement('audio');
//     audioElement.setAttribute('src', 'messenger_web.mp3');
//     $.get();
//         audioElement.play();
//     //for getting the messegeFs
//           // alert(recid);
//           $.ajax({
//             url:"send.php",
//             method:"post",
//             data:{message:msg},
//             cache:false,
//           });
//           $("#container").ready(function(){
//           $("#container").animate({scrollTop:$("#container").prop("scrollHeight")},1000);
            
//           });
//           $("#text-message").val("");
//         // $("#container").scrollTop($("#container")[0].scrollHeight);
//         }); 
//               // searching
//           $('#search-for-friend').keyup(function(event){
//           var value=$('#search-for-friend').val();
//           // alert(value);
//           if((event.keyCode!=40)&&(event.keyCode!=38))
//           {
//           $.ajax({
//             url:"search.php",
//             method:"post",
//             data:{name:value},
//              cache:false,
//              success:function(data) {
//                $("#people").html(data);
//                 },
//             });
//         }
//         });
//           $('#text-message').click(function(event){
//     var audioElement = document.createElement('audio');
//     audioElement.setAttribute('src', 'facebook_msnger_2014.mp3');
//     $.get();
//         audioElement.play();
//           });
 

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
            </div>
                <div class="col-sm-6 col-xs-6 sidenava sidep" id="friendspage"><br>
                
               <!--   <div class="col-sm-6 col-xs-6 col-lg-6 col-md-6">
                 <div id='container'>
              
                 </div>
               </div> -->
               <div id='message'>
               
              </div>
            </div>
                 <div class="col-sm-3 col-xs-3 sidenava sidep" id="friendspage"><br>
                    <span style="font-size:20px;cursor:pointer" onclick="openNav()" id="statusbar">&#9776; Change Your Account Settings</span><br><br>
       <!-- <i id="statusbar"></i> -->  
      <center><span style="font-size:20px;cursor:pointer;border-bottom:solid;" > see status</span></center><!-- <br> --><br>
        <div class="input-group">
        <input  class="form-control"  placeholder="post status here..." id="statust">
        <button class="btn btn-primary"  id="status" type="button">post</button>
                <br><a href="fsp.php" target="_blank"><button class="btn btn-danger"  id="status" >post a image</button></a>

      </div>
    
    <br><br><br>
    <div id="statuscon"></div>

            </div>

        </div>
      

</div>

<!-- password change -->


  <!-- Trigger the modal with a button -->
  <!-- Modal -->
 
 


<!-- mobile change -->





  

</body>

  </html>
  