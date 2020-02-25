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


mysql_query("UPDATE receiver SET name='$name',date_of_birth='$date_of_birth',gender='$gender',blood_group='$blood_group',address='$address',cell_no='$cell_no',email='$email' WHERE national_id='$national_id'");

echo "Updated successfully";




?>