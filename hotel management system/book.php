<?php
session_start();
$server="localhost";
$user="root";
$pass="";
$db="hotel";
$conn=new mysqli($server,$user,$pass,$db);
if($conn->connect_error)
{
    die("unable to connect");
}else{
  //  echo"connect success";
}

if(isset($_POST['book']))
{
    $name=$_POST["holdername"];
    $number=$_POST["holdermobile"];
    $address=$_POST["holderaddress"];
    $adult=$_POST["adultno"];
    $child=$_POST["childno"];
    $indate=$_POST["indate"];
    $outdate=$_POST["outdate"];
    $roomno=$_POST["roomno"];

    if($_POST['roomtype']=='Single Non AC Room')
    {
        $sql="UPDATE single_non_ac SET holdername='$name',holdermobile='$number',
        holderaddress='$address',adult='$adult',child='$child',status=1,
        indate='$indate',outdate='$outdate' WHERE Room_no='$roomno' ";
    
        $run=$conn->query($sql);
    }   
    if($_POST['roomtype']=='Single AC Room')
    {
        $sql="UPDATE single_ac SET holdername='$name',holdermobile='$number',
        holderaddress='$address',adult='$adult',child='$child',status=1,
        indate='$indate',outdate='$outdate' WHERE Room_no='$roomno' ";
        $run=$conn->query($sql);
    }
    if($_POST['roomtype']=='Double Non AC Room')
    {
        $sql="UPDATE double_non_ac SET holdername='$name',holdermobile='$number',
        holderaddress='$address',adult='$adult',child='$child',status=1,
        indate='$indate',outdate='$outdate' WHERE Room_no='$roomno' ";
        $run=$conn->query($sql);

    }
    if($_POST['roomtype']=='Double AC Room')
    {
        $sql="UPDATE double_ac SET holdername='$name',holdermobile='$number',
        holderaddress='$address',adult='$adult',child='$child',status=1,
        indate='$indate',outdate='$outdate' WHERE Room_no='$roomno' ";
        $run=$conn->query($sql);


    }
    
    header("location:bookingsuccess.php");
    

}


?>













<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book Room</title>
    <style>
        form{margin:0px auto;text-align:center;}
        input{padding:6px 8px;margin:8px;width:20%;}
        select{padding:6px 8px;margin:8px;width:22%;}
        
        button{margin:5px;padding:8px;background-color:skyblue;border:none;}
        </style>

</head>
<body>
<h2 style="color:orangered;">ROYAL HOTEL</h2>
<h1 style="text-align:center;color:grey;">Fill The Given Details</h1>
<form action="book.php" method="post">
    <label>
        Room No :
</label><br>
<input type="text" name="roomno" value="<?php echo $_GET['rn'];?>"><br>
<label>Room Type : </label><br>
<input type="text" name="roomtype" value="<?php if($_GET['rt']=='a'){echo'Single Non AC Room';}
if($_GET['rt']=='b'){echo'Single AC Room';}
if($_GET['rt']=='c'){echo'Double Non AC Room';}
if($_GET['rt']=='d'){echo'Double AC Room';}?>"><br>
<label>Holder Name :</label><br>
<input type="text" name="holdername"><br>
<label>Holder Mobile : </label><br>
<input type="text" name="holdermobile"><br>
<label>Holder Address :</label><br>
<input type="text" name="holderaddress"><br>
<label>No of Child :</label><br>
<select name="childno">
    <option>Select</option>
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
    <option>5</option>
    <option>0</option>
</select>  <br>
<label>No of Adult : </label><br>
<select name="adultno">
    <option>Select</option>
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
    <option>5</option>
    <option>6</option>
</select><br>
<label>Check In </label><br>
<input type="date" name="indate"><br>
<label>Check Out </label><br>
<input type="date" name="outdate"><br>
<button type="submit" name="book">Book Now</button>
</form>  


</body>
</html>