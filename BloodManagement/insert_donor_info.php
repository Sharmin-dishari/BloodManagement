<?php
include("connection.php");

$name=$_POST['name'];
$national_id=$_POST['national_id'];
$date_of_birth=$_POST['date_of_birth'];
$gender=$_POST['gender'];
$blood_group=$_POST['blood_group'];
$address=$_POST['address'];
$cell_no=$_POST['cell_no'];
$email=$_POST['email'];


mysql_query("INSERT INTO donor(name,national_id,date_of_birth,gender,blood_group,address,cell_no,email)VALUES('$name','$national_id','$date_of_birth','$gender','$blood_group','$address','$cell_no','$email')");


echo "save successfully";




?>