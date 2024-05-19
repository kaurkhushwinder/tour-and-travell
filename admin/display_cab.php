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
      <h1 >Edit Cab </h1>
      </div>
  <thead>
  
    <tr>

  
  
      <th scope="col">Taxi_Id</th>
      <th scope="col">Taxi_Type</th>
      <th scope="col">Taxi_Model</th>
      <th scope="col">Image</th>
      <th scope="col">Rent_for_a_day</th>
      <th scope="col">No_of_Seats</th>
      
     
    </tr>
  </thead>
  <tbody>

    <?php
    $sql="SELECT * FROM cab_table";
    $result=mysqli_query($con,$sql);
    if($result)
    {
   while( $row=mysqli_fetch_assoc($result))
   {
    
    $id=$row['taxi_id'];
    $name=$row['taxi_type'];
    $mobile=$row['taxi_model'];
    $image=$row['image'];
    $email=$row['rent_for_a_day'];
    $no_of_seat=$row['no_of_seats'];
    
    
    echo'<tr>
    <th scope="row">'.$id.'</th>
    <td>'.$name.'</td>
    <td>'. $mobile.'</td>
    <td><img src="../image/'.$image.'" width="100px"</td>
    <td>'.$email.'</td>
    <td>'. $no_of_seat.'</td>
 
   

    
    <td>
    <button class="btn btn-primary md-2 ms-1"><a href="Edit_cab_table.php?updateid='.$id.'"class="text-light">Update</a></button>
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