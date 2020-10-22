<!DOCTYPE html>
<html>
<head>
	<title>Search blood</title>
	
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fb/Blood_drop_plain.svg/974px-Blood_drop_plain.svg.png">
</head>
<body bgcolor="#8B0000">
<div style="background-color: white; margin-left: 80px; margin-right: 80px; height: 50000px;">
	
	<?php include('header2.php'); ?>
	<hr>
	
	<div>
		<div id="header">
		<h1>Search for the blood :</h1>
	</div>
	<div id="mainbody" align="center">


<body>
<form action="search.php" method="get">
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
			<br><button type="submit" name="submit">Submit</button>
							
<br><br><br>
<h3>Donors for this blood group are : </h3><br><br>
<table border="2" width="900">
<tr>
         <th height="70" ">Name</th>
          <th>Email</th>
          <th>Mobile_No</th>
          <th>Age</th>
          <th>Gender</th>
        
           <th>pin-code</th>
           <th>address</th>
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
if(isset($_GET['bldgrp']));
{	
$grp=$_GET['bldgrp'];
$date = date('Y-m-d');
$query= mysqli_query($conn,"select * from donorlogin where bldid='$grp' && ldate < DATE_SUB('$date',INTERVAL 2 MONTH) ORDER BY ldate ASC");

while($result = mysqli_fetch_array($query))
{
?>
<tr>
         <td><?php echo $result['name']; ?></td>
         <td><?php echo $result['email']; ?></td>
          <td><?php echo $result['num']; ?></td>
          <td><?php echo $result['age']; ?></td>
          <td><?php echo $result['gender']; ?></td>
           <td><?php echo $result['pincode']; ?></td>
           <td><?php echo $result['address']; ?></td>
            <td><?php echo $result['ldate']; ?></td>
</tr>

<?php
}
}
?>


</table>
</form>
</body>
</html>
