
<?php
include('../include/connect.php');
if(isset($_GET['deleteid']))
{
    $id=$_GET['deleteid'];
    $sql="delete from  cab_booking where bookingid=$id";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        echo"<script> alert('Delete Successfully')
      </script>";
    //   window.location.href='admin.php?insert_display5';
    }
    else{
        die(mysqli_error($con));
    }
}
?>
