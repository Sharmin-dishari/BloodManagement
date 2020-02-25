<?php
include("connection.php");


$donor_id=$_POST['donor_id'];


$receiver_id=$_POST['receiver_id'];

$donation_date=$_POST['donation_date'];


mysql_query("INSERT INTO donation_info(donor_id,receiver_id,donation_date)VALUES('$donor_id','$receiver_id','$donation_date')");


echo "save successfully";




?>