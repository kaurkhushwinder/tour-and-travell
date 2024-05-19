<?php

$id=$_GET['update'];
session_start();
?><!DOCTYPE html>
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

<?php
 include('include/connect.php');
 if(isset($_POST['click']))
 {
  $name = $_POST['tfd'];
  $mobile = $_POST['tf'];
  $email = $_POST['fl'];
  $no_of_persons = $_POST['de'];
  // $id_proof= $_POST['not'];
  $check_in_date = $_POST['ti'];
  $day= $_POST['days'];
  $amount = $_POST['ei'];

  $hotel_name= $_POST['hotel'];
  $tour_name= $_POST['tour'];
  $a=$_POST['de'];
  $b=$_POST["ei"];
  $d=$_POST["days"];
  $c=$a*$b*$d;
  $_SESSION["rent"]=$_SESSION["T_amount"]+$c;
  
  $insert_query = "insert into hotel_booking_table(name,mobile,email,no_of_persons,check_in_date,No_of_days,amount,status,hotel_name,tour_name) values ('$name','$mobile','$email','$no_of_persons','$check_in_date','$day','$amount','true','$hotel_name','$tour_name')";
  if($insert_query)

  {
    // echo"<script> alert('found')</script>";
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
<body>
<div class="container-fluid  text-light py-3 ">
<!-- bg-dark -->
      
           <h1 class="display-6 text-center w-100">Hotel_Booking</h1>
      

   <section class="container my-2  w-50 text-light p-2 ">
   <!-- bg-dark -->
<form action="" method="post" class="row g-3 p-3" enctype="multipart/form-data">
        <div class="col-md-4">
            <label for="validationDefault01" class="form-label">Name</label>
            <input type="text" class="form-control" name="tfd" id="validationDefault01">
          </div>
          <div class="col-md-4">
            <label for="validationDefault02" class="form-label">Mobile_No</label>
            <input type="text" class="form-control" name="tf" id="validationDefault02" value="" required>
          </div>
          <div class="col-md-4">
            <label for="validationDefaultUsername" class="form-label">Email_Id</label>
            <div class="input-group">
              <span class="input-group-text" id="inputGroupPrepend2"></span>
              <input type="email" class="form-control" name="fl" id="validationDefault03"  aria-describedby="inputGroupPrepend2" required>
            </div>
          </div>
          
          <div class="col-md-6">
          <label for="inputState"  class="form-label">no_of_persons</label>
          <select name="de" id="inputState" class="form-select">
            <option selected>Choose...</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
          </select>
        </div>
        
       
        <div class="col-6">
          <label for="inputAddress" class="form-label">Check_in_date</label>
          <input type="date" class="form-control" name="ti" id="validationDefault06" placeholder="">
        </div>
        <div class="col-6">
          <label for="inputAddress2" class="form-label">Number Of Days</label>
          <select name="days" id="inputState" class="form-select">
            <option selected>Choose...</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="inputCity" class="form-label">Amount</label>
          <input type="text" class="form-control" name="ei" id="inputemail" value="<?php echo  $_SESSION['amount']?>"readonly>
        </div>
       
      
       
        
        <!-- <div class="col-md-4">
          <label for="inputZip" class="form-label">tour_id</label>
          <input type="text" class="form-control" name="tis" id="inputdate">
        </div> -->

        <div class="col-md-4">
         
         <label for="inputAddress" class="form-label" >Hotel Name</label>
  
         <input type="text" class="form-control" name="hotel" id="inputemail" value="<?php echo  $_SESSION['name']?>"readonly>
      
      </div>
      <div class="col-md-4">
         
         <label for="inputAddress" class="form-label" >Tour Name</label>
  
         <input type="text" class="form-control" name="tour" id="inputemail" value="<?php echo  $_SESSION['tour']?>"readonly>
      
      </div>






        <div class="col-12">
        
      

          <button type="submit" class="btn btn-primary" name="click">Save</button>
        </div>
      




        </div>





      


</form>
</section>
</body>
</html>