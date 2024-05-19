<?php
 include('include/connect.php');
 if(isset($_POST['click']))
 {
  $from_location = $_POST['location'];
  $destination = $_POST['destination'];
  $noof_traveller= $_POST['traveller'];
  $taxi = $_POST['taxi'];
  $email= $_POST['email'];
  $date= $_POST['date'];
  $rent= $_POST['rent'];
  $_SESSION["G_amount"]=$_POST['rent'];
  $insert_query = "insert into cab_booking(from_location,destination,noof_traveller,taxi_name,email_id,date, rent) values ('$from_location','$destination','$noof_traveller','$taxi','$email','$date','$rent')";
  if($insert_query)

  {
    echo"<script> alert('found')</script>";
  }
  $result = mysqli_query($con,$insert_query);
  if($result) 
  {  
    echo "<script>alert ('Thnaks for Booking !!!!. Click Ok For Payment....');
    window.open('payments.php','_self');
    </script>";
  }
 

}

?>

<?php

session_start();
?>
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
    background: url(image/bg.jpeg);
}
/* form{
    box-shadow: 2px 6px 100px #ffffff;
} */
   
</style>

</head>


<body>
<div class="container-fluid  text-light py-3 ">
<!-- bg-dark -->
       
           <h1 style="margin-left:42%;" class="display-6 ">Cab_Booking</h1>
       

   <section class="container my-2  w-50 text-light p-2 ">
   <!-- bg-dark -->
<form action="" method="post" class="row g-3 p-3" enctype="multipart/form-data">
        <div class="col-md-4">
         
         <label for="inputAddress" class="form-label" >Taxi type</label>
  
         <input type="text" class="form-control" name="taxi" value="<?php echo  $_SESSION['taxitype']?>">
    

      </div>

          <div class="col-md-4">
            <label for="validationDefault02" class="form-label">from_location</label>
            <input type="text" class="form-control" name="location" id="validationDefault02" value="" required>
          </div>
          <div class="col-md-4">
            <label for="validationDefaultUsername" class="form-label">destination</label>
            <div class="input-group">
              <span class="input-group-text" id="inputGroupPrepend2"></span>
              <input type="text" class="form-control" name="destination" id="validationDefault03"  aria-describedby="inputGroupPrepend2" required>
            </div>
          </div>
          <div class="col-md-12">
            <label for="validationDefault02" class="form-label">noof_traveller</label>
            <input type="number" maxlength="10" class="form-control" name="traveller" id="validationDefault02" value="" required>
          </div>
          


        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">taxi_rent</label>
          <input type="text" class="form-control" name="rent" id="validationDefault05" value="<?php echo  $_SESSION['rent']?>"readonly>
        </div>
        <div class="col-6">
          <label for="inputAddress" class="form-label">email_id</label>
          <input type="text" class="form-control" name="email" id="validationDefault06" placeholder="">
        </div>
        <div class="col-6">
          <label for="inputAddress2" class="form-label">date</label>
          <input type="date" class="form-control" name="date" id="validationDefault07" placeholder="">
        </div>
        <div class="col-md-6">
          
        <div class="col-12">
        
      

          <button type="submit" class="btn btn-primary" name="click">Save</button>
        </div>
      




   




        </div>
      


</form>
</section>
</body>
</html>