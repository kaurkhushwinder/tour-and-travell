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
      <h1 >Check Hotel Booking</h1>
      </div>
  <thead>
  
    <tr>

  
    
      <th scope="col">BookinghotelID</th>
      <th scope="col">name</th>
      <th scope="col">mobile</th>
      <th scope="col">email</th>
      <th scope="col">noofperson</th>
      <th scope="col">check in date</th>
      <th scope="col">noof days</th>
      <th scope="col">amount</th>
      <th scope="col">status</th>
      <th scope="col">hotel name</th>
      <th scope="col">tour name</th>
      
    </tr>
  </thead>
  <tbody>

    <?php
    $sql="SELECT * FROM hotel_booking_table ";
    $result=mysqli_query($con,$sql);
    if($result)
    {
   while( $row=mysqli_fetch_assoc($result))
   {
    
    $id=$row['booking_hotel_id'];
    $name=$row['name'];
    $mobile=$row['mobile'];
    $email=$row['email'];
    $no_of_persons=$row['no_of_persons']; 
    $check_in_date=$row['check_in_date'];
    $No_of_days=$row['No_of_days'];
    $amount=$row['amount'];
    $status=$row['status'];
    $hotel_name=$row['hotel_name'];
    $tour_name=$row['tour_name'];
    
      
   
    
    echo'<tr>
    <th scope="row">'.$id.'</th>
    <td>'.$name.'</td>
    <td>'. $mobile.'</td>
    <td>'.$email.'</td>
    <td>'.$no_of_persons.'</td>
    <td>'.$check_in_date.'</td>
    <td>'.$No_of_days.'</td>
    <td>'.$amount.'</td>
    <td>'.$status.'</td>
    <td>'.$hotel_name.'</td>
    <td>'.$tour_name.'</td>
    
    <td>
   
    <button class="btn btn-primary ms-1 "><a href="delete_hotel.php?deleteid='.$id.'" class="text-light">Delete</a></button>

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