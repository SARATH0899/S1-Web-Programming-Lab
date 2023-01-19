<?php
include 'dbconnect.php';
$var=$_GET["uid"];
$nresult=mysqli_query($con,"SELECT * from `app`");
$row=mysqli_fetch_array($nresult);
$result=mysqli_query($con,"DELETE FROM `app` WHERE `reg_id`='$var'");
header("location:view.php");
?>