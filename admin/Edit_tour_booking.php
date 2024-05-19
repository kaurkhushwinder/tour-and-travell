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

   
h1{
      text-align: center;
    }
    body{
  background: url(waterfall.jpg);
  background-size: cover;
    background-position: center;
  background-repeat: no-repeat;
}
.container-fluid{
  width: 50%;
  height: 80vh;
  margin-top: 2%;
    background: linear-gradient(135deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0));
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    border-radius: 20px;
    border:1px solid rgba(255, 255, 255, 0.18);
    box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);

}
.display-6{
  margin-top: 0%;
}
</style>

</head>
<?php
include('../include/connect.php');
$id=$_GET['updateid'];
if(isset($_POST['click']))
{
   
    $tour_id = $_POST['tfd'];
    $name = $_POST['tf'];
    $email_id = $_POST['fl'];
    $Mobile_number = $_POST['de'];
    $address= $_POST['not'];
    $no_of_person = $_POST['ti'];
    $start_date= $_POST['noc'];
    $amount = $_POST['s'];
    $status= $_POST['d'];
  
   
    $sql="update tour_booking set tour_id='$tour_id',name='$name',email_id='$email_id',Mobile_number='$Mobile_number',address='$address',no_of_person='$no_of_person',start_date='$start_date',amount='$amount',status='$status' where booking_id=$id";
    $result=mysqli_query($con,$sql);
    if($result) 
    {
      echo"<script> alert('data inserted successfully')
      </script>";
      // window.location.href='admin.php?insert_display4';
      }
      else{
        die(mysqli_error($con));
      }

    }
    

?>

<body>
<div class="container-fluid  text-light py-3 ">
<!-- bg-dark -->
       
           <h1 class="display-6 text-center w-100">Tour_Booking</h1>
       

           <section class="container my-2  w-70 text-light p-2 ">
   <!-- bg-dark -->
<form action="" method="post" class="row g-3 p-3" enctype="multipart/form-data">
        <div class="col-md-4">
         
         <label for="inputAddress" class="form-label" >Select Tour id</label>
  
        
        <?php
$query = ("select * from tour_table");
$run = mysqli_query($con, $query);
$rowcount = mysqli_num_rows($run);
?>  
 
    <select  class="form-control" name="tfd">
   
<option selected>Select tour name</option>
<?php
for($i=1;$i<=$rowcount;$i++)
{
  $row=mysqli_fetch_array($run);

?> 
<option value="<?php echo  $row["tour_id"] ?>"><?php echo  $row["tour_name"] ?> </option>
<?php
}
?>
</select>
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
            <input type="text" class="form-control" name="de" id="validationDefault02" value="" required>
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
          <label for="inputCity" class="form-label">Amount</label>
          <input type="text" class="form-control" name="s" id="inputemail">
        </div>
        <div class="col-md-12">
          <label for="inputState" class="form-label">status</label>
          <input type="text" class="form-control" name="d" id="validationDefault07">
          
        </div>
    
        <div class="col-12">
        
      

          <button type="submit" class="btn btn-primary" name="click">Save</button>
        </div>
      




   




        </div>
      


</form>
</section>
</body>
</html>