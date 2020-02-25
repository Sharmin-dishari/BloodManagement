
<html>
<title>Receiver Info Updation Form</title>
<body style=" background:url(0.JPG) no-repeat; background-size: full auto"><br /><br /><br /><hr /><hr /><br />
<font size='5.5'face='Black Chancery'color= 'white'>
<link rel="stylesheet" type="text/css" href="view.css" media="all">
<script type="text/javascript" src="view.js"></script>

</head>
<body id="main_body" >

	

	<div id="form_container">
	
		<h1><a><center>Receiver Info Updation Form</center></a></h1>
		<font size='5.5'face='Black Chancery'color= 'white'>
		<form id="form_444844" class="appnitro"  method="post" action="submit_update_receiver_info.php">
					<div class="form_description">
			
		<?php 
		include("connection.php");
		session_start();
		$id = $_SESSION['id'];
		$result= mysql_query("SELECT * FROM receiver WHERE national_id=$id");
				while($row=mysql_fetch_array($result)){
				$name=$row['name'];
				$dob=$row['date_of_birth'];
				$gender=$row['gender'];
				$blood_group=$row['blood_group'];
				$address=$row['address'];
				$cell_no=$row['cell_no'];
				$email=$row['email'];
				
				}
				
			
			?>
			
			
			
			
			
<table align="center" width="450px" border="0" cellspacing="1" cellpadding="3" bgcolor="#819FF7">
<center><tr>
<td colspan="3"><strong><font color="white" face="Georgia, Black Chancery, Times, serif"> </font></strong></td>
</tr>
<input name="national_id" type="text" hidden id="name" value="<?php echo $id;?>">
<tr>
<td width="71">Name</td>
<td width="6">:</td>
<td width="301">
<input name="name" type="text" id="name" value="<?php echo $name;?>"></td>
</tr>

<tr>
<td>Date_of_birth</td>
<td>:</td>
<td><input name="date_of_birth" type="text" id="date" value="<?php echo $dob;?>"></td>
</tr>
<tr>
<td>Gender</td>
<td>:</td>
<td><input name="gender" type="text" id="gender" value="<?php echo $gender;?>"></td>
</tr>
<tr>
<td>Blood_group</td>
<td>:</td>
<td><input name="blood_group" type="text" id="blood_group"  value="<?php echo $blood_group;?>"></td>
</tr>
<tr>
<td width="71">Address</td>
<td width="6">:</td>
<td width="301"><input name="address" type="text" id="address"  value="<?php echo $address;?>" ></td>
</tr>

<tr>
<td width="71">Cell_no</td>
<td width="6">:</td>
<td width="301"><input name="cell_no" type="text" id="cell_no"  value="<?php echo $cell_no;?>"></td>
</tr>
<tr>
<td>Email</td>
<td>:</td>
<td><input name="email" type="text" id="email"  value="<?php echo $email;?>"></td>
</tr>

<tr>
<td colspan="3" align="center"><input type="submit" name="Submit" value="Submit"></td>
</tr>
<td colspan="3"><strong><font color="#FF0000" face="Georgia, Times New Roman, Times, serif"></font></strong></td>

</table></center>

			</ul>
		</form>	
		</form>

<br /><hr /><hr /><center><p>Developed by  Luminous<br /><br /></center>

</body>
</html>