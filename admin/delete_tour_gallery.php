<?php
include('../include/connect.php');
if(isset($_GET['deleteid']))
{
    $id=$_GET['deleteid'];
    $sql="delete from tour_gallery where id=$id";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        echo"<script> alert('Delete Successfully')
        window.open('admin.php','_self');</script>";
    //   window.location.href='admin.php?insert_display1';
       
    }
    else{
        die(mysqli_error($con));
    }
}
?>
