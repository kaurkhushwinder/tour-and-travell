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
      margin-top: 5%;
  background: url(hotel.jpg);
  background-size: cover;
    background-position: center;
  background-repeat: no-repeat;
}
.container-fluid{
  width: 50%;
  height: 60vh;
  margin-top: 2%;
    background: linear-gradient(135deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0));
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    border-radius: 20px;
    border:1px solid rgba(255, 255, 255, 0.18);
    box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);
z-index: -1;
}
.display-6{
  margin-top: 5%;
}
.row{
  /* margin-top: -30vh; */
  z-index: 999;
  width: 100vh;
  margin-left: -12.5vw;
}
</style>

</head>
<?php
include('../include/connect.php');
$id=$_GET['updateid'];
$select="SELECT * FROM `hotel_table` where hotel_id=$id";
$data=mysqli_query($con,$select);
$row=mysqli_fetch_array($data);

if(isset($_POST['click']))
{
  $taxi_for_day = $_POST['tfd'];
  $taxi_for = $_POST['tf'];
  $from_location = $_POST['fl'];
 
  if(isset($_FILES['image']))
  { 
    
  //   echo "<pre>";
  //   print_r($_FILES);
  //  echo "<pre>";
     $file_name=$_FILES['image']['name'];
     $file_size=$_FILES['image']['size'];
     $file_tmp=$_FILES['image']['tmp_name'];
     $file_type=$_FILES['image']['type'];
    
move_uploaded_file($file_tmp,"../image/". $file_name);
// move_uploaded_file($file_tmp,$mypath);

  }

    $sql="update hotel_table set name='$taxi_for_day',description=' $taxi_for ',rent='$from_location ',image='$file_name' where hotel_id  =$id";
    $result=mysqli_query($con,$sql);
    if($result) 
    {
      echo"<script> alert('data inserted successfully')
      window.open('display_hotel.php','_self');
     </script>";

    
      }
      else{
        die(mysqli_error($con));
      }

}
?>



<div class="container-fluid  text-light py-3 ">
<!-- bg-dark -->
       <header class="text-center">
           <h1 class="display-6">Tour_Table</h1>
       </header>
   
   <section class="container my-2  w-50 text-light p-2 ">
   <!-- bg-dark -->
<form action="" method="post" class="row g-3 p-3" enctype="multipart/form-data">
        <div class="col-md-4">
            <label for="validationDefault01" class="form-label">Name</label>
            <input type="text" class="form-control" name="tfd" id="validationDefault01" value="<?php echo $row['name']?>" required>
          </div>
          <div class="col-md-4">
            <label for="validationDefault02" class="form-label">Description</label>
            <input type="text" class="form-control" name="tf" id="validationDefault02" value="<?php echo $row['description']?>" required>
          </div>
          <div class="col-md-4">
            <label for="validationDefaultUsername" class="form-label">rent</label>
            <div class="input-group">
               <input type="text" class="form-control" name="fl" id="validationDefault03"  aria-describedby="inputGroupPrepend2" value="<?php echo $row['rent']?>" required>
            </div>
          </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">Image</label>
          <input type="file" class="form-control" name="image" id="validationDefault05">
        </div>
        


     
       
        
        
       
        
        <div class="col-12">
        
      

          <button type="submit" class="btn btn-primary" name="click">Save</button>
        </div>
      




   

</div>




      


</form>
</body>
</html>