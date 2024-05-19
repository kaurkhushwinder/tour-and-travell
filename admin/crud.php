<?php
include('../include/connect.php');
if(isset($_POST['click']))
{
   
    $First_name=$_POST['name'];
    $Last_name=$_POST['last'];
    $Password=$_POST['pass'];
    $Email=$_POST['email'];
    $Mobile_number=$_POST['mobile'];
    $sql = "insert into userregistrationtable(First_name,Last_name,Password,Email,Mobile_number) values ('$First_name','$Last_name','$Password','$Email','$Mobile_number')";
    $result=mysqli_query($con,$sql);
    if($result) 
    {
echo"data inserted successfully";
      }
      else{
        die(mysqli_error($con));
      }

}
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
    <div class="container my-5"> 
    <form method="post">
        <div class="mb-3">
            <label for=" username" class="form-label">First_name</label>
            <input type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"placeholder="enter your First_name" autocomplete="off" name="name">
            
            <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Last_name</label>
          <input type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"placeholder="enter your Last_name" autocomplete="off" name="last" > 
              
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="enter your password" autocomplete="off" name="pass">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"placeholder="enter your email" autocomplete="off" name="email" > 
              
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Mobile no</label>
          <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"placeholder="enter your number" autocomplete="off" name="mobile" > 
              
        </div>
       
         
        <button type="submit" class="btn btn-primary" name="click">Submit</button>
      </form>
    </div>
  </body>
</html>