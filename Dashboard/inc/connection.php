<?php

$conn=mysqli_connect('localhost','root','','veggie');

if(!$conn):
    die("Error Connection !!".mysqli_connect_error($conn));
endif;

?>