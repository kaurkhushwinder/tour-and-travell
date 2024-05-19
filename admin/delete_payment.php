
<?php
include('../include/connect.php');
if(isset($_GET['deleteid']))
{
    $id=$_GET['deleteid'];
    $sql="delete from payment_table where Payment_id =$id";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        echo"<script> alert('Delete Successfully');
        window.open('admin.php','_self');
      </script>";
     
    }
    else{
        die(mysqli_error($con));
    }
}
?>
