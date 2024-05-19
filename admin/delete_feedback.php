
<?php
include('../include/connect.php');
if(isset($_GET['deleteid']))
{
    $id=$_GET['deleteid'];
    $sql="delete from feedback_table where id=$id";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        echo"<script> alert('Delete Successfully')
        window.open('admin.php','_self');
      </script>";
    //   window.location.href='admin.php?insert_display5';
    }
    else{
        die(mysqli_error($con));
    }
}
?>
