<body  style=" background:url(0.JPG) no-repeat; background-size: full auto">
<?php 

include("connection.php");
session_start();
	$_SESSION['id']=$_POST['id'];
	$_SESSION['password']=$_POST['password'];


	$id=$_SESSION['id'];
	$password=$_SESSION['password'];

	
	$query = mysql_query("SELECT * FROM receiver_login WHERE r_id='$id'");
	$numrows = mysql_num_rows($query);
	
		if($numrows != 0){
	
		while($row = mysql_fetch_assoc($query))		{
		
					$dbid = $row['r_id'];
					$dbpassword = $row['password'];}
		
							if($id==$dbid){
								
								if($password==$dbpassword){
		
								header("location:receiver_index.php");
		
											}else{
										
												echo "<br />"."<br />"."<center>"."<h3>"."Invalid Password!"."</h3>";											
												echo "<br />"."<br />"."<br />"."<br />"."<a href='donor_login.php'>Try again</a>"."</center>";											
												}
				
									}else{
										echo "<br />"."<br />"."<center>"."<h3>"."You inserted unregistered Donor id!"."</h3>";			
										echo "<br />"."<br />"."<br />"."<br />"."<a href='donor_login.php'>Try again</a>"."</center>";										}
			
			
						}else{ 
							echo "<br />"."<br />"."<center>"."<h3>"."Please Insert registered id and password !!!"."</h3>";
							echo "<br />"."<br />"."<br />"."<br />"."<a href='donor_login.php'>Try again</a>"."</center>";
							}

?>