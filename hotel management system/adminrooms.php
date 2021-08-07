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
    /*echo "connect success";*/
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hotel</title>
    <style>
    
        h2{color:orangered;}
        h1,h4{text-align:center;}
        h4{text-decoration:underline;color:grey;}
        
        table,th,td{ border-bottom:0.5px solid black;
        border-collapse:collapse;
            padding:15px;
        text-align:center;}
        table{margin:auto;width:80%;}
        b{color:orange;}
        button{padding:8px;border:none;background-color:blue;color:white;transition:background-color 0.5s;border-radius:1em;}
        button:hover{background-color:red;}
        button[type="disabled"]{opacity:0.3;}
        
    
        </style>
</head>
<body>
    <h2>ROYAL HOTEL</h2>
    <h1>Room Booking Page</h1>
    <h4 style="padding:20px 0px 0px 0px;">Room Type:-Single Non-AC Rooms</h4>
    <?php
    $sql="SELECT * FROM single_non_ac";
    $run=$conn->query($sql);
    while($rows=$run->fetch_assoc())
    {
    ?>
        <table>
        <tr>
        <th>
        ROOM NO : <?php echo $rows['Room_no']; ?>
        </th>
        <td>
        Room Status :<?php if($rows['status']==0)
                                      {
                                          echo "<b> Available</b>";
                                      } else {
                                          echo "<b> &nbsp Booked</b>";
                } ?>

        </td>
        <td>
        <a href="book.php?rn=<?php echo $rows['Room_no']."&rt=a";?>"><button type="<?php if($rows['status']==1){ echo "disabled";}?>" <?php if($rows['status']==1){ echo "disabled";}?>>Book</button></a>
        <a href="unbook.php?rn=<?php echo $rows['Room_no']."&rt=a";?>"><button style="background-color:red" type="<?php if($rows['status']==0){echo"disabled";}?>" <?php if($rows['status']==0){echo "disabled";}?>>UnBook</button></a>
        </td>
        </tr>
         </table>
          <?php
         }
         ?>



<h4 style="padding:20px 0px 0px 0px;">Room Type:-Single AC Rooms</h4>
<?php
    $sql="SELECT * FROM single_ac";
    $run=$conn->query($sql);
    while($rows=$run->fetch_assoc())
    {
    ?>
        <table>
        <tr>
        <th>
        ROOM NO : <?php echo $rows['Room_no']; ?>
        </th>
        <td>
        Room Status :<?php if($rows['status']==0)
                                      {
                                          echo "<b> Available</b>";
                                      } else {
                                          echo "<b> &nbsp Booked</b>";
                } ?>

        </td>
        <td>
        <a href="book.php?rn=<?php echo $rows['Room_no']."&rt=b";?>"><button  type="<?php if($rows['status']==1){ echo "disabled";}?>" <?php if($rows['status']==1){ echo "disabled";}?>>Book</button></a>
        <a href="unbook.php?rn=<?php echo $rows['Room_no']."&rt=b";?>"><button style="background-color:red" type="<?php if($rows['status']==0){echo"disabled";}?>" <?php if($rows['status']==0){echo "disabled";}?>>UnBook</button></a>
        </td>
        </tr>
         </table>
          <?php
         }
         ?>
                   


         <h4 style="padding:20px 0px 0px 0px;">Room Type:-Double Non-AC Rooms</h4>
<?php
    $sql="SELECT * FROM double_non_ac";
    $run=$conn->query($sql);
    while($rows=$run->fetch_assoc())
    {
    ?>
        <table>
        <tr>
        <th>
        ROOM NO : <?php echo $rows['Room_no']; ?>
        </th>
        <td>
        Room Status :<?php if($rows['status']==0)
                                      {
                                          echo "<b> Available</b>";
                                      } else {
                                          echo "<b> &nbsp Booked</b>";
                } ?>

        </td>
        <td>
        <a href="book.php?rn=<?php echo $rows['Room_no']."&rt=c";?>"><button  type="<?php if($rows['status']==1){ echo "disabled";}?>"<?php if($rows['status']==1){ echo "disabled";}?>>Book</button></a>
        <a href="unbook.php?rn=<?php echo $rows['Room_no']."&rt=c";?>"><button style="background-color:red;" type="<?php if($rows['status']==0){echo"disabled";}?>" <?php if($rows['status']==0){echo "disabled";}?>>UnBook</button></a>
        </td>
        </tr>
         </table>
          <?php
         }
         ?>      
            

            <h4 style="padding:20px 0px 0px 0px;">Room Type:-Double AC Rooms</h4>
     
            <?php
    $sql="SELECT * FROM double_ac";
    $run=$conn->query($sql);
    while($rows=$run->fetch_assoc())
    {
    ?>
        <table>
        <tr>
        <th>
        ROOM NO : <?php echo $rows['Room_no']; ?>
        </th>
        <td>
        Room Status :<?php if($rows['status']==0)
                                      {
                                          echo "<b> Available</b>";
                                      } else {
                                          echo "<b> &nbsp Booked</b>";
                } ?>

        </td>
        <td>
        <a href="book.php?rn=<?php echo $rows['Room_no']."&rt=d";?>"><button  type="<?php if($rows['status']==1){ echo "disabled";}?>"<?php if($rows['status']==1){ echo "disabled";}?>>Book</button></a>
        <a href="unbook.php?rn=<?php echo $rows['Room_no']."&rt=d";?>"><button style="background-color:red" type="<?php if($rows['status']==0){echo"disabled";}?>" <?php if($rows['status']==0){echo "disabled";}?>>UnBook</button></a>
        </td>
        </tr>
         </table>
          <?php
         }
         ?>      






</body>
</html>