
<?php
include('../include/connect.php');
if(isset($_GET['deleteid']))
{
    $id=$_GET['deleteid'];
    $sql="delete from tour_table where tour_id=$id";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        echo "<script>alert ('Delete successfully')
        window.open('admin.php','_self');
        </script>";
    }
    else{
        die(mysqli_error($con));
    }
}
?>
