<?php

$id=$_GET['update'];
session_start();
?>
<?php include("header.php");
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

<?php
 include('include/connect.php');

 if(isset($_POST['click']))
 {
  $tour_name = $_POST['tfd'];
  $name = $_POST['tf'];
  $email_id = $_POST['fl'];
  $Mobile_number = $_POST['de'];
  $address= $_POST['not'];
  $no_of_person = $_POST['ti'];
  $start_date= $_POST['noc'];
  $amount = $_POST['s'];
    
  $a=$_POST['ti'] ;
  $b=$_POST['s'];
  $c=$a * $b;
  $_SESSION["T_amount"]=$c;


  $insert_query = "insert into tour_booking(tour_name,name,email_id,Mobile_number,address,no_of_person,start_date,amount,status) values ('$tour_name','$name','$email_id','$Mobile_number','$address','$no_of_person','$start_date','$amount','Pending')";
  if($insert_query)

  {
    // echo"<script> alert('found')</script>";
  }
  $result = mysqli_query($con,$insert_query);
  if($result) 
  {  
    echo "<script>alert ('Tour Booking Successfully');
    window.open('hotels.php','_self');
    </script>";
  }


}

?>
<br>
<br>
<br>
<br>
<br>
<br>
<body>
<div class="container-fluid  text-light py-3 ">
<!-- bg-dark -->
       
           <h1 style="margin-left:42%;" class="display-6 ">Tour_Booking</h1>
       

   <section class="container my-2  w-50 text-light p-2 ">
   <!-- bg-dark -->
<form action="" method="post" class="row g-3 p-3" enctype="multipart/form-data">
        <div class="col-md-4">
         
         <label for="inputAddress" class="form-label" >Tour Name</label>
  
         <input type="text" class="form-control" name="tfd"  id="validationDefault02" value="<?php echo  $_SESSION['tour']?>"readonly>
    

      </div>

          <div class="col-md-4">
            <label for="validationDefault02" class="form-label">Name</label>
            <input type="text" class="form-control" name="tf" id="validationDefault02" value="" required>
          </div>
          <div class="col-md-4">
            <label for="validationDefaultUsername" class="form-label">Email_Id</label>
            <div class="input-group">
              <span class="input-group-text" id="inputGroupPrepend2"></span>
              <input type="email" class="form-control" name="fl" id="validationDefault03"  aria-describedby="inputGroupPrepend2" required>
            </div>
          </div>
          <div class="col-md-12">
            <label for="validationDefault02" class="form-label">Mobile_number</label>
            <input type="number" maxlength="10" class="form-control" name="de" id="validationDefault02" value="" required>
          </div>


        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">Address</label>
          <input type="text" class="form-control" name="not" id="validationDefault05">
        </div>
        <div class="col-6">
          <label for="inputAddress" class="form-label">No_of_person</label>
          <input type="text" class="form-control" name="ti" id="validationDefault06" placeholder="">
        </div>
        <div class="col-6">
          <label for="inputAddress2" class="form-label">Start_Date</label>
          <input type="date" class="form-control" name="noc" id="validationDefault07" placeholder="">
        </div>
        <div class="col-md-6">
          <label for="inputCity" class="form-label">Amount Per Person</label>
          <input type="text" class="form-control" value="<?php echo  $_SESSION['amount']?>"  name="s" id="inputemail" readonly>
        </div>
       
    
        <div class="col-12">
        
      

          <button type="submit" class="btn btn-primary" name="click">Save</button>
        </div>
      




   




        </div>
      


</form>
</section>
</body>
</html>