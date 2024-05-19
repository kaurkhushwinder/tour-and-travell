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
  <body>
   <div class="container ">
    <button class=" btn btn-primary my-5">
    <a href="crud.php" class="text-light">Add User </a>
    </button>
    <table class="table">
    <div class="text-center w-100 ">
      <h1 >Hotel Gallery</h1>
      </div>
  <thead>
  
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Hotel_Id</th>
      <th scope="col">Image</th>
       
      
      
    </tr>
  </thead>
  <tbody>

    <?php
    $sql="SELECT * FROM hotel_gallery";
    $result=mysqli_query($con,$sql);
    if($result)
    {
   while( $row=mysqli_fetch_assoc($result))
   {
    
    $id=$row['id'];
    
    
    $hotel_id=$row['hotel_id'];
    $image=$row['image'];
    

    
    echo'<tr>
    <th scope="row">'.$id.'</th>
    <td>'.$hotel_id.'</td>
    <td><img src="image/'.$image.'" width="100px"</td>
    
    
    
    
   
   
    <td>
    <button class="btn btn-primary"><a href="Edit_hotel_gallery.php?updateid='.$id.'" class="text-light">Update</a></button>
    <button class="btn btn-primary"><a href="delete_hotel_gallery.php?deleteid='.$id.'" class="text-light">Delete</a></button>

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