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
      margin-left:-2%;
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
    <button class="btn btn-primary my-5">
    <a href="crud.php" class="text-light">Add User </a>
    </button>
    <table class="table">
    <div class="text-center w-100 ">
      <h1 >Feedback</h1>
      </div>
  <thead>
  
    <tr>

  
    
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Mobile_no</th>
      <th scope="col">Email_Id</th>
      <th scope="col">Feedback</th>
    
      
    </tr>
  </thead>
  <tbody>

    <?php
    $sql="SELECT * FROM feedback_table";
    $result=mysqli_query($con,$sql);
    if($result)
    {
   while( $row=mysqli_fetch_assoc($result))
   {
    
    
    $id=$row['id'];
    $name=$row['name'];
    $mobile=$row['mobile_no'];
    $email=$row['email_id'];
    $feedback=$row['feedback'];
   
   
    
    echo'<tr>
    <th scope="row">'.$id.'</th>
    <td>'.$name.'</td>
    <td>'. $mobile.'</td>
    <td>'.$email.'</td>
    <td>'.$feedback.'</td>
    
    
    <td>
   
    <button class="btn btn-primary ms-1 "><a href="delete_feedback.php?deleteid='.$id.'" class="text-light">Delete</a></button>

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