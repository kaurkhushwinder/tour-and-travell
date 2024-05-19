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
    background-color: yellow;
   }
   
</style>

</head>
  
<?php
include('../include/connect.php');
$id=$_GET['updateid'];
if(isset($_POST['click']))
{
   
  $name = $_POST['tfd'];
  $mobile = $_POST['tf'];
  $email = $_POST['fl'];
  $no_of_persons = $_POST['de'];
  $id_proof= $_POST['not'];
  $check_in_date = $_POST['ti'];
  $check_out_date= $_POST['noc'];
  $amount = $_POST['ei'];
  $status = $_POST['s'];
  $hotel_id= $_POST['d'];
  $tour_id= $_POST['tis'];
  
    
    $sql="update hotel_booking_table set name='$name',mobile='$mobile',email='$email',no_of_persons='$no_of_persons',id_proof='$id_proof',check_in_date='$check_in_date',check_out_date='$check_out_date',amount='$amount',status='$status',hotel_id='$hotel_id',tour_id='$tour_id' where booking_hotel_id =$id";
    $result=mysqli_query($con,$sql);
    if($result) 
    {
      echo"<script> alert('data inserted successfully')
      </script>";
      // window.location.href='admin.php?insert_display8';
      }
      else{
        die(mysqli_error($con));
      }
    }


  


  



?>

<div class="container-fluid  text-light py-3 ">
<!-- bg-dark -->
       <header class="text-center">
           <h1 class="display-6">Cab_Booking</h1>
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
            <option>4</option>
            <option>8</option>
            <option>12</option>
            <option>50</option>
          </select>
        </div>
        
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">Id_Proof</label>
          <input type="text" class="form-control" name="not" id="validationDefault05">
        </div>
        <div class="col-6">
          <label for="inputAddress" class="form-label">Check_in_date</label>
          <input type="date" class="form-control" name="ti" id="validationDefault06" placeholder="">
        </div>
        <div class="col-6">
          <label for="inputAddress2" class="form-label">check_out_date</label>
          <input type="date" class="form-control" name="noc" id="validationDefault07" placeholder="">
        </div>
        <div class="col-md-12">
          <label for="inputCity" class="form-label">Amount</label>
          <input type="text" class="form-control" name="ei" id="inputemail">
        </div>
        <div class="col-md-4">
          <label for="inputState" class="form-label">Status</label>
          <input type="text" class="form-control" name="s" id="validationDefault07">
          
        </div>
        <div class="col-md-4">
         
           <label for="inputAddress" class="form-label" >Select hotel id</label>
    
          
          <?php
 $query = ("select * from hotel_table");
 $run = mysqli_query($con, $query);
 $rowcount = mysqli_num_rows($run);
 ?>  
   
      <select  class="form-control" name="d">
     
  <option selected>Select hotel name</option>
  <?php
  for($i=1;$i<=$rowcount;$i++)
  {
    $row=mysqli_fetch_array($run);
  
  ?> 
 <option value="<?php echo  $row["hotel_id"] ?>"><?php echo  $row["name"] ?> </option>
  <?php
  }
  ?>
  </select>
        </div>
      
       
        
        <!-- <div class="col-md-4">
          <label for="inputZip" class="form-label">tour_id</label>
          <input type="text" class="form-control" name="tis" id="inputdate">
        </div> -->

        <div class="col-md-4">
         
         <label for="inputAddress" class="form-label" >Select hotel id</label>
  
        
        <?php
$query = ("select * from tour_table");
$run = mysqli_query($con, $query);
$rowcount = mysqli_num_rows($run);
?>  
 
    <select  class="form-control" name="tis">
   
<option selected>Select Tour name</option>
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
    






        <div class="col-12">
        
      

          <button type="submit" class="btn btn-primary" name="click">Save</button>
        </div>
      




   





      


</form>
</section>
</body>
</html>