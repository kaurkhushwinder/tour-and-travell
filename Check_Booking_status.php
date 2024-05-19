<?php
include('include/connect.php');

?>


<?php include("header.php");
?>

<?php

 
 if(isset($_POST['click']))
 {
    echo"jhjh";
  $no = $_POST['search'];
  $_SESSION["name"]=$no;
 


}

?>

<form action="" method="post">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1
        {
            text-align: center;
            margin-top: 20vh;
        }
        table,tr,td
        {
             border:2px solid black;
             margin-left: 30%;
             margin-top: 10%;
             padding: 20px;
             border-collapse: collapse;
             
        }
        tbody
        {
            
        }
    </style>
</head>
<body>
    <h1>Check Booking Status</h1>
<table>
    <tr>
        <td>Enter The booking Number</td>
        <td><input type="text" name="search"></td>
    </tr>
    <tr>
        <td></td>
        <td><button name="click">Search</button></td>
    </tr>
</table>
<table class="table">
   
  <thead>
  
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Tour Name</th>
      <th scope="col">Person Name</th>
      <th scope="col">Amount </th>
      <th scope="col">Status</th>
  
      
    </tr>
  </thead>
  <tbody>

    <?php
    $sql="SELECT * FROM tour_booking where booking_id='23'";
    $result=mysqli_query($con,$sql);
    if($result)
    {
   while( $row=mysqli_fetch_assoc($result))
   {
    
    $id=$row['booking_id'];
    $name=$row['tour_name'];
    $name2=$row['name'];
    $name3=$row['amount'];
    $status=$row['status'];
    
    
    echo'<tr>
    <th scope="row">'.$id.'</th>
    <td>'.$name.'</td>
    <td>'. $name2.'</td>
    <td>'. $name3.'</td>
    <td>'. $status.'</td>
   
  </tr>';
    
   }
}
    ?>

    
  </tbody>
</table>
</body>
</html>
</form>