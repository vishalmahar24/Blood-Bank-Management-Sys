<!DOCTYPE html>
<html>
<head>
	<title>Camp registers</title>
	
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fb/Blood_drop_plain.svg/974px-Blood_drop_plain.svg.png">
</head>
<body>
	<div id="adheader">
		<h1 style="padding: 20px;">ADMIN</h1>
	</div>
	<?php include('menu.php'); ?>
	<div id="mainbody" align="center">
		
	<h2>Registrations For This Camp:</h2>
<table border="1" width="900" style="margin-top: 20px;">
<tr>
         <th height="70">NAME</th>
          <th>EMAIL</th>
          <th>GENDER</th>
          <th>AGE</th>
          
           
           <th>BLOODGROUP</th>
           
          
           
</tr>
<?php

$servername = "localhost";
$username = "id660552_anand";
$password = "anand1998";
$dbname = "id660552_adpproj";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
$id=$_GET[id];
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$run=mysqli_query($conn,"select * FROM cregister where c_id=$id");

while($row=mysqli_fetch_array($run))
{  $shwp=$row[0];
  
  $shwename=$row[2];
  $shwjob=$row[3];
  $shwmgr=$row[4];
  $shwhiredate=$row[5];
  
  
  
  echo "<tr align='center'>
         <td height='50'>$shwp</td>
         <td>$shwhiredate</td>
         
         <td> $shwename</td>
           <td> $shwjob</td>          
          <td>$shwmgr</td>
          
          
          
          
          
          
           
           
</tr>";
                  
 
}


?>


</table>

</div>

	</div>
</div>
</body>
</html>
