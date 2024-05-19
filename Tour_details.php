<?php
include('include/connect.php');
$id=$_GET['update'];
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
      table:hover img 
      {
        scale:1.1;
        transition: .3s ease-in;
      }
       tr
       {
        
        height:40vh;
        border:2px solid rebeccapurple;
       }
       td{
        width:20%;
        border:2px solid red;
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
    width: 100%;
    height: 35vh;
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
    </style>
</head>
<body>

   <div class="card-deck">
      <?php
$select_query="select * from tour_details where tour_id	='$id'";
$result_query=mysqli_query($con,$select_query);
while($row=mysqli_fetch_assoc($result_query))
{
  $id=$row['tour_id'];
 
  $day=$row['day'];
  
  $details=$row['day_detail'];
  
  
  echo"
  <table>
  
  <tr>
  <td>
  <h3>$day</h3>  
       
  <h3>$details</h3>
  </td>
  
  <form action='' method='POST'>
    
     
    
     
        <button  type='submit' class='btn btn red' >  <a href='More_infos.php?update=$id'>View More</a></button>
        <input type='hidden' name='Item_Name' value='$id'>
      

        </form>
    
  

     
 </tr>

 </table>
 ";
     
     
}
    ?> 
  </div>
 

</body>
</html>