
<?php
include('include/connect.php');
if(isset($_GET['deleteid']))
{
    $id=$_GET['deleteid'];
    $sql="Update  tour_booking  set status='cancelled' where booking_id=$id";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        echo"<script> alert('Your Tour cancelled Successfully')
        window.location.href='Check_Tour_Status.php';
      </script>";
    
    }
    else{
        die(mysqli_error($con));
    }
}
?>