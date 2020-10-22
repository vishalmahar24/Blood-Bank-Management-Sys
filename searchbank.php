<!DOCTYPE html>
<html>
<head>
	<title>Search bb</title>
	
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fb/Blood_drop_plain.svg/974px-Blood_drop_plain.svg.png">
</head>
<body bgcolor="#8B0000">
<div style="background-color: white; margin-left: 80px; margin-right: 80px; height: 800px;">
	
	<?php include('header2.php'); ?>
	<hr>
	<div>
		<div id="header">
		<h1>Search for the blood in blood banks:</h1>
	</div>
	<div id="mainbody" align="center">


<body>
<form action="searchbank.php" method="post">
<div align ="center">
<br><br><br>

Choose blood group:
			<select name="bldgrp">
				<option>bldgrp</option>
				<option value="1">O+</option>
				<option value="2">O-</option>
				<option value="3">A+</option>
				<option value="4">A-</option>
				<option value="5">B+</option>
				<option value="6">B-</option>
				<option value="7">AB+</option>
				<option value="8">AB-</option>						
			</select>
			<br><button type="submit" name="submit" value="submit">Submit</button>
							
<br><br><br>
<h3>Blood availibility for this blood group is : </h3><br><br>
<table border="2" width="900">
<tr>
         <th height="70" ">Name</th>
          <th>Address</th>
          <th>Quantity</th>
          
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
if(isset($_POST['submit']))
{	
$grp=$_POST['bldgrp'];
$query= mysqli_query($conn,"select distinct bloodbank.name,store.quantity,bloodbank.address from store inner join bloodbank on store.bb_id=bloodbank.bb_id inner join blood on store.code='$grp'");
while($row=mysqli_fetch_array($query))
{   
	$shwp=$row[0];
 $shwempno=$row[1];
 $shwd=$row[2];
  
  
  echo "<tr align='center'>
         <td height='50'>$shwp</td>
         <td> $shwd</td>
         <td> $shwempno</td>
                 
</tr>";
}
}
?>


</table>
</form>
</body>
</html>
