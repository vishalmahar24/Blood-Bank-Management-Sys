<!DOCTYPE html>
<html>
<head>
	<title>SignUp</title>
	
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fb/Blood_drop_plain.svg/974px-Blood_drop_plain.svg.png">
</head>
<body bgcolor="#8B0000">
<div style="background-color: white; margin-left: 80px; margin-right: 80px; height: 800px;">
	<div id="header">
		<img src="http://healthpointbloodbank.com/images/bloodbank.png" height="110px" width="300px" align="left">
		<ul>
			<li><a href="index.php">Home</a></li>
  			<li><a href="register.php">SignUp</a></li>
  			<li><a href="login.php">Log In</a></li>
  			<li><a href="admin.php">Admin</a></li>
  			<li><a href="reception.php">Blood bank receptionist</a></li>
  			<li><a href="about.php">About</a></li>
		</ul>
	</div>
	<hr>
	<div id="form">
		<form method="POST" action="register.php">

	<h1 style="color: red;">SIGN-UP PAGE</h1><br /><br />
	<table>
	<tr>
		<td style="padding: 10px;">Name</td>
		<td><input type="text" name="name" placeholder="Name" size="20"  /></td>
	</tr>
	<tr>
		<td style="padding: 10px;">Email</td>
		<td> <input type="text" name="email" placeholder="Email-id" size="20"  /></td>
	</tr>
	<tr>
		<td style="padding: 10px;">Contact Number</td>
		<td> <input type="text" name="num" placeholder="Mobile Number" size="20"  /></td>
	</tr>
	<tr>
		<td style="padding: 10px;">Age</td>
		<td> <input type="text" name="age" placeholder="Age" size="20"  /></td>
	</tr>
	<tr>
		<td style="padding: 10px;">Gender</td>
		<td> <input type="radio" name="gender" value="male" />Male<input type="radio" name="gender" value="female" />Female</td>
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
	<tr>
		<td style="padding: 10px;">Password</td>
		<td> <input type="Password" name="password" placeholder="Password" size="20"  /></td>
	</tr>
	<tr>
		<td style="padding: 10px;">Confirm Password</td>
		<td> <input type="Password" name="cpassword" placeholder="Confirm Password" size="20"  /></td>
	</tr>
	<tr>
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
if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$num=$_POST['num'];
		$age=$_POST['age'];
		$gender=$_POST['gender'];
		$bldgrp=$_POST['bldgrp'];
		$password=$_POST['password'];
	
	$query2="INSERT INTO register(name,email,num,age,gender,bldgrp,password) 
	VALUES ('$name','$email','$num','$age','$gender','$bldgrp','$password')";
		if(mysqli_query($conn,$query2)){
			echo "successful";
		}
		else{
			echo "Not uploaded";
		}
	}
?>
