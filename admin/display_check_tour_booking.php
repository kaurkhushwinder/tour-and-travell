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
      <h1 >Check Tour Booking</h1>
      </div>
  <thead>
  
    <tr>

  
    
      <th scope="col">Booking_Id</th>
      <th scope="col">Tour_Name</th>
      <th scope="col">Name</th>
      <th scope="col">Email_Id</th>
      <th scope="col">Mobile_no</th>
      <th scope="col">Address</th>
      <th scope="col">No_of_Person</th>
      <th scope="col">Start_date</th>
      <th scope="col">Amount</th>
      <th scope="col">Status</th>
      
    </tr>
  </thead>
  <tbody>

    <?php
    $sql="SELECT * FROM tour_booking ";
    $result=mysqli_query($con,$sql);
    if($result)
    {
   while( $row=mysqli_fetch_assoc($result))
   {
    
    $id=$row['booking_id'];
    $name=$row['tour_name'];
    $mobile=$row['name'];
    $email=$row['email_id'];
    $no_of_persons=$row['Mobile_number'];
    
    $id_proof=$row['address'];
    $check_in_date=$row['no_of_person'];
    $check_out_date=$row['start_date'];
    $amount=$row['amount'];
    $status=$row['status'];
   
    
    echo'<tr>
    <th scope="row">'.$id.'</th>
    <td>'.$name.'</td>
    <td>'. $mobile.'</td>
    <td>'.$email.'</td>
    <td>'.$no_of_persons.'</td>
    <td>'.$id_proof.'</td>
    <td>'.$check_in_date.'</td>
    <td>'.$check_out_date.'</td>
    <td>'.$amount.'</td>
    <td>'.$status.'</td>
    
    <td>
   
    <button class="btn btn-primary ms-1 "><a href="delete_tour_booking.php?deleteid='.$id.'" class="text-light">Delete</a></button>

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