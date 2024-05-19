
<?php
include('../include/connect.php');
$query=("select * from tour_table");
$run=mysqli_query($con,$query);
while($data=mysqli_fetch_row($run))
{
    echo "<br>";
    echo $data[0], $data[1];
    echo"<br>";
}
?>