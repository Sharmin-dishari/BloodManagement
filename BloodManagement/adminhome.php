		<?php session_start();
		if ($_SESSION['admin']!=""){
		?>
<html>
<title>Lifesaving Blood Bank limited</title>
<body style=" background:url(0.JPG) no-repeat; background-size: full auto"><br /><br /><br /><hr /><hr /><br />
<font size='5.5'face='Black Chancery'color= 'white'>
<center><h1><strong><i>Welcome to Lifesaving Blood Bank Limited </i> </strong></h1></center>
	<center><h3><br /><br /><br />
	<a href="view_donor_info.php" style=" text-decoration:none"><input type="button" style=" font-size:13px; font-weight:bold;" value="Delete Donor info" /></a><br /><br />
	<a href="donation_info.php" style=" text-decoration:none"><input type="button" style=" font-size:13px; font-weight:bold;" value="Insert Donation Info" /></a><br /><br />
    <a href="search_donor.php" style=" text-decoration:none"><input type="button" style=" font-size:13px; font-weight:bold;" value="Show donation Info" /></a><br /><br />
 <a href="logout.php" style=" text-decoration:none"><input type="button" style=" font-size:13px; font-weight:bold;" value="Log out" /></a><br /><br />




<hr /><hr /><center><p>Developed by Luminous<br /><br />Project Created for CSC 433 - DBMS</center> 

</body>
</html>
		<?php }else{ echo "Please Login First !!!!!!";}
		?>