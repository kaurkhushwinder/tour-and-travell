<?php
include('include/connect.php');
$id=$_GET['update'];
session_start();

?>
<?php include("header.php");

//session_destroy();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
    <style>
    .card-deck 
        {
            display: flex;
            flex-direction:row;
          flex-wrap: wrap;
          justify-content: space-evenly;
            align-items: center;
           
         
           
        }
      table
       {
       margin-top: 8vw;
       width: 30%;
       height: 60vh;
       border-radius: 10px;
       /* margin-bottom: 2rem; */
       transition: .3s ease-in;
       overflow: hidden;
       }
       table:hover{
        box-shadow: 0px 0px 10px lightgray;
        transition: .3s ease-out;
       }
      /* table:hover img 
      {
        scale:1.1;
        transition: .3s ease-in;
      } */
       tr
       {
        
        height:40vh;
       }
       td{
        width:20%;
       }
       form{
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-items: center;
        height: 100%;
        overflow: hidden;
       }
       form img{
    width: 60rem;
    height: 70vh;
    background-color: black;
    transition: .3s ease-out;
       }
       form h3{
        font-size: 25px;
       }
       form h3:nth-child(3)
       {
        color: red;
       }
       form h3:nth-child(2)
       {
        margin-top: 15px;
       }
       button a{
        color:green;
        text-decoration:none;
        list-style:none;
       }
    </style>
</head>
<body>

   <div class="card-deck">
      <?php
$select_query="SELECT * FROM `cab_table` where taxi_id='$id'";
$result_query=mysqli_query($con,$select_query);
while($row=mysqli_fetch_assoc($result_query))
{
  $id=$row['taxi_id'];
  $taxi_type=$row['taxi_type'];
  $taxi_model=$row['taxi_model'];
  $rent_for_a_day=$row['rent_for_a_day'];
  $no_of_seats=$row['no_of_seats'];
  $image=$row['image'];
 $_SESSION['taxitype'] =$taxi_type;
 $_SESSION['rent'] =$rent_for_a_day;


  echo"
      <table>
      
      <tr>
      <td>
      
      <form action='' method='POST'>
        
      <form action='' method='POST'>
        
      <img src=image/$image alt='...' >
    
        <h3>$taxi_type</h3>  
        <h3>Model:$taxi_model</h3>  
        <h3>Rent:$rent_for_a_day</h3>  
        <h3>Total Seats:$no_of_seats</h3>  
      
        
        <button  type='submit' class='btn btn red' >  <a href='cab_booking.php?update=$id'>book Now</a></button>

      
            <input type='hidden' name='Item_Name' value='$taxi_type'>
            <input type='hidden' name='Item_Name' value='$taxi_model'>
            <input type='hidden' name='Item_Name' value='$rent_for_a_day'>
            <input type='hidden' name='Item_Name' value='$no_of_seats'>
            <input type='hidden' name='Item_name' value='$image'>
            </form>
        
         </td>
         
     </tr>
  
     </table>
     ";
     
}
    ?> 
  </div>

</body>
</html>