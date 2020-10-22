<!DOCTYPE html>
<html>
<head>
	<title>storage</title>
	
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fb/Blood_drop_plain.svg/974px-Blood_drop_plain.svg.png">
</head>
<body bgcolor="#8B0000">
<div style="background-color: white; margin-left: 80px; margin-right: 80px; height: 5000px;">
	<?php include('header2.php'); ?>
	<hr>
	<div>
		<div id="header">
		<h1 style="color: red; margin-left: 50px;">Blood Storage</h1>
	</div>
	<div id="mainbody" align="center">
		

<table border="2" width="900">
<tr>
         <th height="70" ">NAME</th>
          <th>TYPE</th>
          <th>QUANTITY</th>
          
          
           
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

$run=mysqli_query($conn,"select bloodbank.name,blood.type,store.quantity from store inner join bloodbank on store.bb_id=bloodbank.bb_id inner join blood on store.code=blood.code");

while($row=mysqli_fetch_array($run))
{  $shwp=$row[0];
  $shwempno=$row[1];
  $shwename=$row[2];
  
  echo "<tr align='center'>
         <td height='50'>$shwp</td>
         <td> $shwempno</td>
         <td> $shwename</td>        
           
           
</tr>";
                  
 
}


?>


</table>

</div>

	</div>
</div>
</body>
</html>
