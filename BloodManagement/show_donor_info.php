
<html>
<head>
        <title>View Records</title>
		<body style=" background:url(0.JPG) no-repeat; background-size: full auto"><br /><hr /><hr />
		<font size='5.5'face='Black Chancery'color= 'white'>
</head>
<body>
<p> <p><a href="index.php?prog=<?php echo $prog;?>">Go BACK</a>  </p></p>
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
		
        echo "<p><b>Showing All Information</b> | ></p>";
		
        
        echo "<table border='1' cellpadding='10'>";
		echo "<table bgcolor='white' border='1' cellpadding='10'>";
		
        echo "<tr> <th>name</th> <th>national_id</th><th>date_of_birth</th><th>gender</th> <th>address</th><th>cell_no</th><th>email</th></tr>";

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
				echo '<td>' . $row['email'] . '</td>';
				
                
                
                
				//echo '<td><a href="edit_donor_info.php?national_id=' . $row['national_id'] . '">Edit</a></td>';
                echo "</tr>"; 
        } 

        // close table>
        echo "</table>";
?>


</body>
</html> 