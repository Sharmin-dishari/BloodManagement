
<html>
		<?php session_start();
		if ($_SESSION['admin']!=""){
		?>
<head>
        <title>View Records</title>
		
		
</head>
<body style=" background:url(0.JPG) no-repeat; background-size: full auto">
<p> <p ><a style="color:white" href="adminhome.php">Go BACK</a>  </p></p>
<?php

/* 
        VIEW.PHP
        Displays all data from 'donor' table
*/

        // connect to the database
       mysql_connect ("localhost", "root","")  or die (mysql_error());
mysql_select_db ("blood_bank");

        // get results from database
        $result = mysql_query("SELECT * FROM donor") 
                or die(mysql_error());  
                
        // display data in table
        echo "<p><b>Showing All Information</b> | ></p><br /><br /><br />";
        
        echo "<table bgcolor='white' border='1' cellpadding='10'>";
		
        echo "<tr> <th>Name</th> <th>National_id</th><th>Date_of_birth</th><th>Gender</th> <th>Address</th><th>Cell_no</th><th>Email</th><th>Action</th></tr>";

        // loop through results of database query, displaying them in the table
        while($row = mysql_fetch_array( $result )) {
                
                // echo out the contents of each row into a table
                echo "<tr>";
                echo '<td>' . $row['name'] . '</td>';
				echo '<td>' . $row['national_id'] . '</td>';
				echo '<td>' . $row['date_of_birth'] . '</td>';
				echo '<td>' . $row['gender'] . '</td>';
				echo '<td>' . $row['address'] . '</td>';
				echo '<td>' . $row['cell_no'] . '</td>';
				echo '<td>' . $row['email'] . '</td>'; ?>
				
				<td><a href="delete_donor_info.php?id=<?php echo $row['national_id']; ?>"><input type="submit" value="Delete"></a></td>
				<?php 
                
                
                
				//echo '<td><a href="edit_donor_info.php?national_id=' . $row['national_id'] . '">Edit</a></td>';
                echo "</tr>"; 
        } 

        // close table>
        echo "</table>";
?>


</body>
</html> 
		<?php }else{ echo "Please Login First !!!!!!";}
		?>