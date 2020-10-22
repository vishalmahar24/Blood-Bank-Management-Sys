<!DOCTYPE html>
<html>
<head>
	<title>Donor's List</title>
	
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fb/Blood_drop_plain.svg/974px-Blood_drop_plain.svg.png">
</head>
<body>
<div id="adheader">
    <h1 style="padding: 20px;">Donors</h1>
  </div>
  <?php include('menu.php'); ?>
	<div id="mainbody" align="center">
		

<table border="2" width="900">
<tr>
         <th height="70" ">NAME</th>
          <th>EMAIL</th>
          <th>Mobile_No</th>
          <th>AGE</th>
          <th>GENDER</th>
           
           <th>BLDGRP</th>
           <th>PIN-CODE</th>
           <th>ADDRESS</th>
            <th>Last donation</th>
          
           
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

$run=mysqli_query($conn,"select donorlogin.name,donorlogin.email,donorlogin.num,donorlogin.age,donorlogin.gender,blood.type,donorlogin.pincode,donorlogin.address,
donorlogin.ldate FROM donorlogin INNER JOIN blood ON donorlogin.bldid=blood.code ORDER BY donorlogin.ldate ASC");

while($row=mysqli_fetch_array($run))
{  $shwp=$row[0];
  $shwempno=$row[1];
  $shwename=$row[2];
  $shwjob=$row[3];
  $shwmgr=$row[4];
  $shwhiredate=$row[5];
  $shwsal=$row[6];
  $shwcomm=$row[7];
  $shwdeptno=$row[8];
  
  echo "<tr align='center'>
         <td height='50'>$shwp</td>
         <td> $shwempno</td>
         <td> $shwename</td>
           <td> $shwjob</td>          
          <td>$shwmgr</td>
          <td>$shwhiredate</td>
          <td>$shwsal</td>
          <td>$shwcomm</td>
          <td>$shwdeptno</td>
          
          
          
          
           
           
</tr>";
                  
 
}


?>


</table>

</div>

	
</body>
</html>
