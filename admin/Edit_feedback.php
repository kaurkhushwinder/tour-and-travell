<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <style>

   
*{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}
body{
    background: url(bg.jpeg);
}
/* form{
    box-shadow: 2px 6px 100px #ffffff;
} */
   
</style>

</head>

<?php

 include('../include/connect.php');
 $id=$_GET['updateid'];
 if(isset($_POST['click']))
 {
  $name = $_POST['tfd'];
  $mobile_no = $_POST['tf'];
  $email_id = $_POST['fl'];
  $feedback = $_POST['de'];
  
  $sql="update feedback_table set name='$name',mobile_no='$mobile_no',email_id='$email_id',feedback='$feedback'where id=$id";
  $result=mysqli_query($con,$sql);
    if($result) 
    {
      echo"<script> alert('data inserted successfully')
      window.location.href='display_feedback.php';
      </script>";
      
      }
      else{
        die(mysqli_error($con));
      }
    }

?>
<body>
<div class="container-fluid  text-light py-3 ">
<!-- bg-dark -->
       <header class="text-center">
           <h1 class="display-6">Welcome to our page</h1>
       </header>
   </div>
   <section class="container my-2  w-50 text-light p-2 ">
   <!-- bg-dark -->
    
<form action="" method="post" class="row g-3 p-3" enctype="multipart/form-data">
        <div class="col-md-4">
            <label for="validationDefault01" class="form-label">Name</label>
            <input type="text" class="form-control" name="tfd" id="validationDefault01" value="" required>
          </div>
          <div class="col-md-4">
            <label for="validationDefault02" class="form-label">Mobile_no</label>
            <input type="text" class="form-control" name="tf" id="validationDefault02" value="" required>
          </div>
          <div class="col-md-4">
            <label for="validationDefaultUsername" class="form-label">Email_Id</label>
            <div class="input-group">
             <input type="email" class="form-control" name="fl" id="validationDefault03"  aria-describedby="inputGroupPrepend2" required>
            </div>
          </div>


         
        
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">Feedback</label>
          <input type="text" class="form-control" name="de" id="validationDefault05" aria-describedby="inputGroupPrepend2" required>
        </div>
        
        <div class="col-12">
        
      

          <button type="submit" class="btn btn-primary" name="click">Save</button>
        </div>
      




   





      


</form>
</section>
</body>
</html>