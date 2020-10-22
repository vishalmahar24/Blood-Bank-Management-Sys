<!DOCTYPE html>
<html>
<head>
	<title>Blood Banks</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body bgcolor="#8B0000">
	<div style="background-color: white; margin-left: 80px; margin-right: 80px; height: 5000px;">
	<?php include('header2.php'); ?>
	<hr>
	
		
	<div id="form" >
	<table border='1' height='200px' align='left' style='margin: 10px;'>
		<tr>
			<th height="50">Address</th>
			<th>Blood Bank</th>
		</tr>
			<?php

$servername = "localhost";
$username = "id660552_anand";
$password = "anand1998";
$dbname = "id660552_adpproj";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}




$run=mysqli_query($conn,"select * FROM bloodbank");

while($row=mysqli_fetch_array($run))
{  $bbid=$row[0];
  $name=$row[1];
  $address=$row[2];
  
  
  echo "
  <tr align='center'>
         
         <td height='40' width='200'>$address
         <td height='40' width='800'>$name</td>
      
         </td>
          
          
           
           
</tr>";
                  
 
}


?>
</table>
</div>
<div id="formp">
	<img src="http://www.techflot.in/images/donor11.jpg" height="300px" width="300px">
		<img src="http://waytojesus.org/wp-content/uploads/2017/02/152971-thumb.jpg" height="300px" width="300px">
</div>
</div>
</body>
</html>