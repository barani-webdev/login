<?php
 $connection=mysqli_connect("localhost","root","","admin");

 $up= "UPDATE `tutor` SET uname='$_POST[uname]',phone='$_POST[phone]',email='$_POST[email]',date='$_POST[date]',department='$_POST[department]',permission='$_POST[permission]',password='$_POST[password]'  where id='$_POST[id]'";

$check_res=mysqli_query($connection,$up);
if($check_res)
{ header ('location:tutordetails.php');}
else { echo "failed" ;}
?>
