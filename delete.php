<?php
 $connection=mysqli_connect("localhost","root","","admin");

$id=$_GET['id'];
/* echo $id; */

 $del= "DELETE from dean where id=$id";

$check_res=mysqli_query($connection,$del);
header("Location:deandetails.php");

?>
