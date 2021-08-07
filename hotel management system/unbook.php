<?php
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
if($_GET["rt"]=='a')
{
    $no=$_GET['rn'];
    $sql="UPDATE single_non_ac SET holdername=null,holdermobile=null,
    holderaddress=null,adult=null,child=null,status=0,
    indate=null,outdate=null WHERE Room_no=$no";
    $run=$conn->query($sql);
}
if($_GET["rt"]=='b')
{
    $no=$_GET['rn'];
    $sql="UPDATE single_ac SET holdername=null,holdermobile=null,
    holderaddress=null,adult=null,child=null,status=0,
    indate=null,outdate=null WHERE Room_no=$no";
    $run=$conn->query($sql);
}
if($_GET["rt"]=='c')
{
    $no=$_GET['rn'];
    $sql="UPDATE double_non_ac SET holdername=null,holdermobile=null,
    holderaddress=null,adult=null,child=null,status=0,
    indate=null,outdate=null WHERE Room_no=$no";
    $run=$conn->query($sql);
}
if($_GET["rt"]=='d')
{
    $no=$_GET['rn'];
    $sql="UPDATE double_ac SET holdername=null,holdermobile=null,
    holderaddress=null,adult=null,child=null,status=0,
    indate=null,outdate=null WHERE Room_no=$no";
    $run=$conn->query($sql);
}
echo "<br><br><br><br>Room Unbooked Successfully";
?>