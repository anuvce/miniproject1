<?php 

    require_once('includes/db.php');
    require_once('includes/functions.php');
    function total()
{
$sql="SELECT *from notes";
$re=mysqli_query($conn,$sql);
$count=mysqli_num_rows($re);
return $count;
}
echo total();
?>
