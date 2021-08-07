<?php
session_start();
if(empty($_SESSION['information']))
{
  header("location:adminlogin.php");
}
?>



<!doctype html>
<html lang="en">
  <head>
    <title>Admin Dashboard</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    div{display:flex;justify-content:center;margin-top:2em;}
    button{margin:0px 3px 0px 3px;padding:10px;border:none;border-radius:3px;}
    .first{background-color:blue;color:white;}
    .second{background-color:green;color:white;}
    .third{background-color:yellow;color:black;}
    .fourth{background-color:skyblue;color:white;}
    .five{background-color:red;color:white;}
    button:hover{cursor:pointer;}
    


    </style>
</head>
  <body>
  <h2 style="color:orangered;">ROYAL HOTEL </h2>
      <div class="container">
   
     <a href="adminrooms.php"><button class="first">Book Room</button></a>
     <button class="second">Check Room Status </button>
     <button class="third">View User Detail</button>
     <button class="fourth">Recently Check outs </button>
    <a href="logout.php"><button class="five">Logout</button></a>   
   
   </div>
  </body>
</html>