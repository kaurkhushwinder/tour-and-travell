<?php

include('../include/connect.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </head>
  <style>

    .container{
      /* background-color: green; */
      
    }
    .table{
      /* background-color: yellow; */
      width: 98vw;
      margin-left: -8%;
    }
    
    /* tr th{
      display: flex;
      flex-wrap: wrap;
     flex-direction: left;
    } */
    
    thead{
      /* background-color: pink; */
    }
  </style>
  <body>
   <div class="container ">
    
    <table class="table">
    <div class="text-center w-100 ">
      <h1 >Check Cab Booking</h1>
      </div>
  <thead>
  
    <tr>

  
    
      <th scope="col">BookingID</th>
      <th scope="col">From_location</th>
      <th scope="col">Destination</th>
      <th scope="col">Noof_traveller</th>
      <th scope="col">Taxi_name</th>
      <th scope="col">Email_id</th>
      <th scope="col">Date</th>
      <th scope="col">Rent</th>
      
    </tr>
  </thead>
  <tbody>

    <?php
    $sql="SELECT * FROM cab_booking ";
    $result=mysqli_query($con,$sql);
    if($result)
    {
   while( $row=mysqli_fetch_assoc($result))
   {
    
    $id=$row['bookingid'];
    $from_location=$row['from_location'];
    $destination=$row['destination'];
    $noof_traveller=$row['noof_traveller'];
    $taxi_name=$row['taxi_name']; 
    $email_id=$row['email_id'];
    $date=$row['date'];
    $rent=$row['rent'];

   
    
    echo'<tr>
    <th scope="row">'.$id.'</th>
    <td>'.$from_location.'</td>
    <td>'. $destination.'</td>
    <td>'.$noof_traveller.'</td>
    <td>'.$taxi_name.'</td>
    <td>'.$email_id.'</td>
    <td>'.$date.'</td>
    <td>'.$rent.'</td>
    
    <td>
   
    <button class="btn btn-primary ms-1 "><a href="delete_cab_table.php?deleteid='.$id.'" class="text-light">Delete</a></button>

</td>
  </tr>';
    
   }
}
    ?>

    <!-- <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr> -->
  </tbody>
</table>
</div>
   
 </body>
</html>