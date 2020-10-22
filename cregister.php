<?php

	$servername = "localhost";
$username = "id660552_anand";
$password = "anand1998";
$dbname = "id660552_adpproj";
	$conn = new mysqli($servername, $username, $password,$dbname);
	// Check connection
	if ($conn->connect_error) {
  	  die("Connection failed: " . $conn->connect_error);
	}
if(isset($_POST["submit"])){
	
	$name=$_POST['name'];
	$cid=$_POST['c_id'];
	$email=$_POST['email'];
	$gender=$_POST['gender'];
	$age=$_POST['age'];
	$bldgrp=$_POST['bldgrp'];
	

	$query2="INSERT INTO cregister(name,c_id,email,gender,age,bldgrp) 
	VALUES ('$name','$cid','$email','$gender','$age','$bldgrp')";
		if(mysqli_query($conn,$query2)){
			echo "<script>window.open('camps.php','_self')</script>";
		}
		else{
			echo "Not registered";
		}
	
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Camp registeration</title>
	
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fb/Blood_drop_plain.svg/974px-Blood_drop_plain.svg.png">
</head>
<body bgcolor="#8B0000">
<div style="background-color: white; margin-left: 80px; margin-right: 80px; height: 800px;">
	<?php include('header2.php'); ?>
	<hr>
	<div id="form">
		<form method="POST" action="cregister.php">

	<h1 style="color: red;">REGISTER FOR THE CAMP</h1><br /><br />
	<table>
	<tr>
		<td style="padding: 10px;">Name</td>
		<td><input type="text" name="name" placeholder="Name" size="20"  /></td>
	</tr>
	<tr>
		<td style="padding: 10px;">CAMP_ID</td>
		<td> <input type="text" name="c_id" value='<?php echo $_GET[id]; ?>' size="20" readonly="readonly" /></td>
	</tr>
	<tr>
		<td style="padding: 10px;">Email</td>
		<td> <input type="text" name="email" placeholder="Email-id" size="20"  /></td>
	</tr>
	<tr>
		<td style="padding: 10px;">Gender</td>
		<td> <input type="radio" name="gender" value="male" />Male<input type="radio" name="gender" value="female" />Female</td>
	</tr>
	<tr>
		<td style="padding: 10px;">Age</td>
		<td> <input type="text" name="age" placeholder="Age" size="20"  /></td>
	</tr>
	<tr>
		<td style="padding: 10px;">Blood Group</td>
		<td> 
				<select name="bldgrp">
					<option value="O+">O+</option>
					<option value="O-">O-</option>
					<option value="A+">A+</option>	
					<option value="A-">A-</option>
					<option value="B+">B+</option>
					<option value="B-">B-</option>
					<option value="AB+">AB+</option>
					<option value="AB-">AB-</option>
					</select>
		</td>
	</tr>
		<td colspan="5" style="padding-top: 50px;"><button type="submit" name="submit" value="submit">Submit</button></td>
	</tr>
	</table>
	
	</form>
	
	</div>
	<div id="formp">
		<img src="http://admis.hp.nic.in/bbms/images/5.jpg" height="300px" width="300px">
		<img src="http://waytojesus.org/wp-content/uploads/2017/02/152971-thumb.jpg" height="300px" width="300px">
	</div>
</div>
</body>
</html>
