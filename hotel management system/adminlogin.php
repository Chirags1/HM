<?php
session_start();
$server="localhost";
$user="root";
$pass="";
$db="hotel";
$conn=new mysqli($server,$user,$pass,$db);
if($conn->connect_error)
{
    die("unable to connect".$conn->connect_error);
}else{
    //echo"connect";
}
if(isset($_POST["submit"]))
{
 $email=$_POST['mail'];
 $pass=$_POST['password'];
$_SESSION['information']=$email; 

$sql="SELECT * FROM admin WHERE email='$email'";
$run=$conn->query($sql);
$row=$run->fetch_assoc();
if($row['email']==$email)
{

    if($pass==$row['password'])
    {
    
       header('location:admindashboard.php');
       
    }else{
        echo "<script>alert('Wrong Credentials');</script>";
    }
}

}

?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <style>
    h2{color:orangered;text-align:left;}
    h1{text-align:center;color:grey;}
    div{display:flex;justify-content:center;margin-top:3em;}
    label{padding-bottom:2em;}
    input{box-sizing:border-box;margin:5px;padding:6px 5px ;width:150%;transition:1s background-color;outline:none;border:1px solid black;}
    button{padding:9px;padding-left:7px;padding-right:7px;background-color:yellow;border:none;width:40%;}
    input:focus{background-color:lightgreen;}
    /* body{animation-name:example;animation-duration:4s;animation-iteration-count:infinite;animation-direction:alternate-reverse;}
@keyframes example{
    0%{background-color:pink;background-position:25%% 25%;}
    50%{background-color:hotpink;background-position:25% 50%;}
    75%{background-color:skyblue;background-position:50% 75%;}
    100%{background-color:dodgerblue;background-position:75% 100%;}
       
     }*/
    </style>
</head>
    <body>
    <h2>ROYAL HOTEL </h2>
    <h1>Admin Login </h1>
    <div class="container">
    <form action="adminlogin.php" method="post">
    
    <label> E-mail : </label><br>
    <input type="text" name="mail"><br>
    
    
    <label>Password : </label><br>
    <input type="password" name="password"><br><br>
    
    <button type="submit" name="submit">Login</button>
    </form>
    </div>
    </body>
    </html>