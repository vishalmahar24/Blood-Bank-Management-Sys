<!DOCTYPE html>
<html>
<head>
	<title>Banks</title>
	
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fb/Blood_drop_plain.svg/974px-Blood_drop_plain.svg.png">
</head>
<body>
<div id="adheader">
    <h1 style="padding: 20px;">Blood bank Details</h1>
  </div>
	<?php include('menu.php'); ?>
	<div id="mainbody" align="center">


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
  
  
  echo "<table border='1' width ='500px' height='200px' align='left' style='margin: 10px;'>
  <tr align='center'>
         <td height='50'>
         
         <h1>$name</h1><br>
         Address - $address<br><br>
         
      
         </td>
          
          
           
           
</tr></table>";
                  
 
}


?>




</div>

	</div>
</div>
</body>
</html>
