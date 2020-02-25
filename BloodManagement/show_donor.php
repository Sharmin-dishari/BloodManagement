
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Show donor</title>

<body style=" background:url(0.JPG) no-repeat; background-size: full auto"><br /><br /><br /><hr /><hr /><br />
<font size='5.5'face='Black Chancery'color= 'white'>
 <link rel="stylesheet" type="text/css" href="view.css" media="all">
<script type="text/javascript" src="view.js"></script>
</head>

<body id="main_body" >
<center>
	
	
	<div id="form_container">
<?php
// Make a MySQL Connection
mysql_connect ("localhost", "root","")  or die (mysql_error());
mysql_select_db ("blood_bank");
// Construct our join query
//WORKING

$term = $_POST['term'];

$query = "SELECT donor.name, donor.cell_no,donation_info.receiver_id, donation_info.donation_date FROM donor, donation_info WHERE donor.national_id = donation_info.donor_id && donor.blood_group LIKE '%$term%'";
	 
$result = mysql_query($query) or die(mysql_error());


// Print out the contents of each row into a table 

while($row = mysql_fetch_array($result))
	
{
	
    echo '<br/> Donor Name: '.$row['name'];
    echo '<br/> Donor cell: '.$row['cell_no'];
	 echo '<br/> Receiver id: '.$row['receiver_id'];
	 echo '<br/> donation_date: '.$row['donation_date'];
    echo '<br/><br/>';
    }

echo mysql_error();
?>
<div id="footer">
			
		</div>
	</div>

</body>
</center>
</html>
