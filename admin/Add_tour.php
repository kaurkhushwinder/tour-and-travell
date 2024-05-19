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
  background: url(waterfall.jpg);
  /* background-size: cover; */
    background-position: center;
  background-repeat: no-repeat;
}
.container-fluid{
  width: 50%;
  height: 70vh;
  margin-top: 1%;
    background: linear-gradient(135deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0));
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    border-radius: 20px;
    border:1px solid rgba(255, 255, 255, 0.18);
    box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);

}
.display-6{
  margin-top: 1%;
}

   
</style>

</head>

<?php
 include('../include/connect.php');
 if(isset($_POST['click']))
 {
  $tour_name = $_POST['tfd'];
  $package = $_POST['tf'];
  $destination = $_POST['fl'];
  $duration= $_POST['not'];
  $no_of_days = $_POST['noc'];
  $category= $_POST['ei'];
  $amount= $_POST['a'];
  if(isset($_FILES['image']))
  { 
    
  //   echo "<pre>";
  //   print_r($_FILES);
  //  echo "<pre>";
     $file_name=$_FILES['image']['name'];
     $file_size=$_FILES['image']['size'];
     $file_tmp=$_FILES['image']['tmp_name'];
     $file_type=$_FILES['image']['type'];
    $mypath='image/'.$file_name;
move_uploaded_file($file_tmp,"../image/". $file_name);
// move_uploaded_file($file_tmp,$mypath);

  }
  $insert_query = "insert into tour_table(tour_name,package,destination,duration,image,no_of_days,category,amount) values ('$tour_name','$package','$destination','$duration','$file_name','$no_of_days','$category','$amount')";
  if($insert_query)

  {
    echo"<script> alert('found')</script>";
  }
  $result = mysqli_query($con,$insert_query);
  if($result) 
 {  
    echo "<script>alert ('Tour added successfully')
    </script>";
  }


}

?>
<body>
 <div class="container-fluid  text-light py-3 ">
<!-- bg-dark -->

       
           <h1 class="display-6 text-center w-100">Tour_Table</h1>
       
  
   <section class="container my-2  w-70 text-light p-2 ">
   <!-- bg-dark -->
<form action="" method="post" class="row g-3 p-3" enctype="multipart/form-data">
        <div class="col-md-4">
            <label for="validationDefault01" class="form-label">Tour_name</label>
            <input type="text" class="form-control" name="tfd" id="validationDefault01" value="" required>
          </div>
          <div class="col-md-4">
            <label for="validationDefault02" class="form-label">Package</label>
            <input type="text" class="form-control" name="tf" id="validationDefault02" value="" required>
          </div>
          <div class="col-md-4">
            <label for="validationDefaultUsername" class="form-label">Destination</label>
            <div class="input-group">
               <input type="text" class="form-control" name="fl" id="validationDefault03"  aria-describedby="inputGroupPrepend2" required>
            </div>
          </div>
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">Duration</label>
          <input type="text" class="form-control" name="not" id="validationDefault04">
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">Image</label>
          <input type="file" class="form-control" name="image" id="validationDefault05">
        </div>
        <div class="col-md-6">
          <label for="inputState"  class="form-label">no_of_days</label>
          <select name="noc" id="inputState" class="form-select">
            <option selected>Choose...</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            <option>7</option>
          </select>
        </div>


     
       
        <div class="col-md-6">
          <label for="inputCity" class="form-label">Amount</label>
          <input type="text" class="form-control" name="a" id="inputemail">
        </div>
        
       


        <div class="col-md-12">
          <label for="inputAddress" >Select category</label>
    
          
          <?php
 $query = ("select * from category_table");
 $run = mysqli_query($con, $query);
 $rowcount = mysqli_num_rows($run);
 ?>  
   
      <select  class="form-control" name="ei">
     
  <option selected>Select Category type</option>
  <?php
  for($i=1;$i<=$rowcount;$i++)
  {
    $row=mysqli_fetch_array($run);
  
  ?> 
 <option value="<?php echo  $row["catergory_name"] ?>"><?php echo  $row["catergory_name"] ?> </option>
  <?php
  }
  ?>
  </select>
        </div>
        
        <div class="col-12">
        
      

          <button type="submit" class="btn btn-primary" name="click">Save</button>
        </div>
      


</div>

   





      


</form>
</body>
</html>