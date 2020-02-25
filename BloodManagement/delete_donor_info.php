<body style=" background:url(0.JPG) no-repeat; background-size: full auto">

<?php 
mysql_connect ("localhost", "root","")  or die (mysql_error());
mysql_select_db ("blood_bank");

$national_id=$_GET['id'];

$mq=mysql_query("DELETE FROM donor WHERE national_id='$national_id' ");

if ($mq==true){
		echo "<br /><br /><br /><center><h1 style='color:white'>Data successfully Deleted !!!!!</h1><br />";
		echo "<a href='view_donor_info.php'><input type='submit' value='Go Back'></a></center>";
}else{
	
	echo "Sorry . There Have a Problem Occur!!!!!!!!!!!   Try Again.";
}



?>
</body>