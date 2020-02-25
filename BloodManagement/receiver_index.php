<?php 

include("connection.php");
session_start();
if($_SESSION['id']!="")
	{
		

 ?>
<html>
<body  style=" background:url(0.JPG) no-repeat; background-size: full auto"><br /><br /><br />

<?php 
	$id=$_SESSION['id'];
	$query = mysql_query("SELECT * FROM receiver WHERE national_id='$id'");
		while($row = mysql_fetch_assoc($query))		{
		$name= $row['name'];

		}
?>
<title>Receiver Index Page</title>
<p>&nbsp;</p><font size='5.5'face='Black Chancery'color= 'white'>
<center><h1><strong>Hello <?php echo $name; ?> Welcome to Receiver Index <strong></h1></center>
<center>	<a href="update_receiver_info.php" style=" text-decoration:none"><input type="button" style=" font-size:13px; font-weight:bold;" value="Update" /></a></center><br /><br />
<p>&nbsp;</p>
<p><br />
  <br />
</p><font size='5.5'face='Black Chancery'color= 'white'>
<hr /><hr /><center><p>Developed by  Luminous <br /><br /></center>

</body>
</html>
<?php }else{ echo "<h1><center>Access Denied !!!!!!</center></h1>";}?>