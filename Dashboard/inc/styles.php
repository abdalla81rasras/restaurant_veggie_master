<?php
header("Content-type: text/css; charset: UTF-8");
include "connection.php";

$select="SELECT img_slider FROM `slider`";
$query=mysqli_query($conn , $select);
while($row=mysqli_fetch_assoc($query)):
    $img_slider=$row['img_slider'];
endwhile;

?>