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
if(isset($_POST["submit2"])){
	
	$name=$_POST['name'];
	$email=$_POST['email'];
	$num=$_POST['number'];
	$add=$_POST['address'];
	$pin=$_POST['pin'];
	$gender=$_POST['gender'];
	$age=$_POST['age'];
	$bldgrp=$_POST['bldgrp'];

	$query2="INSERT INTO donorlogin(name,email,num,age,gender,bldid,pincode,address) 
	VALUES ('$name','$email','$num','$age','$gender','$bldgrp','$pin','$add')";
		if(mysqli_query($conn,$query2)){
			echo "<script>window.open('index2.php','_self')</script>";
		}
		else{
			echo "Not uploaded";
		}
	
}
?>
<!doctype html>
<html>
<head>
	<title>Donor Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fb/Blood_drop_plain.svg/974px-Blood_drop_plain.svg.png">
</head>
<body bgcolor="#8B0000">
<div style="background-color: white; margin-left: 80px; margin-right: 80px; height: 800px;">
	<?php include('header2.php'); ?>
	<hr>
	<div id="form">
	<form name="form" action="Donorlogn.php" enctype="multipart/form-data" method="post">

	<h1 style="color: red; margin-left: 0px;">DONOR-REGISTRATION PAGE</h1><br /><br />
	<table>
	<tr>
		<td style="padding: 10px;">Name</td>
		<td> <input type="text" name="name" placeholder="Name" size="20" /></td>
	</tr>
	<tr>
		<td style="padding: 10px;">Email</td>
		<td> <input type="text" name="email" placeholder="Email-id" size="20"  /></td>
	</tr>
	<tr>
		<td style="padding: 10px;">Contact Number</td>
		<td> <input type="text" name="number" placeholder="Mobile Number" size="20"  /></td>
	</tr>
	<tr>
		<td style="padding: 10px;">Pin code</td>
		<td> <input type="text" name="pin" placeholder="Pin Code" size="20"  /></td>
	</tr>
	<tr>
		<td style="padding: 10px;">Address</td>
		<td> <input type="text" name="address" placeholder="Residential Address" size="30" /></td>
	</tr>

	<tr>
		<td style="padding: 10px;">Age</td>
		<td> <input type="text" name="age" placeholder="Age(in years)" size="20" / ></td>
	</tr>
	<tr>
		<td style="padding: 10px;">Gender</td>
		<td> <input type="radio" name="gender" value="male"/>Male<input type="radio" name="gender" value="female"/>Female</td>
	</tr>
	<tr>
		<td style="padding: 10px;">Blood Group</td>	
		<td> 
				<select name="bldgrp">
					<option value="1">O+</option>
					<option value="2">O-</option>
					<option value="3">A+</option>	
					<option value="4">A-</option>
					<option value="5">B+</option>
					<option value="6">B-</option>
					<option value="7">AB+</option>
					<option value="8">AB-</option>
					</select>
		</td>
	</tr>
	
	</table>
	
	<td colspan="5" style="padding-top: 50px;"><button type="submit" name="submit2" value="submit">Submit</button></td>
	</form>
	</div>
	<div id="formp">
	<img src="http://www.techflot.in/images/donor11.jpg" height="300px" width="300px">
		<img src="http://waytojesus.org/wp-content/uploads/2017/02/152971-thumb.jpg" height="300px" width="300px">
</div>
	</div>
</body>
</html>
