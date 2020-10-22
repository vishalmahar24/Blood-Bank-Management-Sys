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
	
	$bbid=$_POST['bb_id'];
	$name=$_POST['name'];
	$address=$_POST['address'];
	

	$query2="INSERT INTO bloodbank(bb_id,name,address) 
	VALUES ('$bbid','$name','$address')";
		if(mysqli_query($conn,$query2)){
			echo "<script>window.open('banks.php','_self')</script>";
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
<body>

	<div id="adheader">
		<h1 style="padding: 20px;">Add New Camp</h1>
	</div>
	<?php include('menu.php'); ?>
	<div id="form">
		<form method="POST" action="newbank.php">

	<h1 style="color: red;">ENTER THE DETAILS OF NEW BLOOD BANK :</h1><br /><br />
	<table>
	<tr>
		<td style="padding: 10px;">CAMP_ID</td>
		<td><input type="text" name="bb_id" placeholder="bloodbank_id" size="20"  /></td>
	</tr>
	<tr>
		<td style="padding: 10px;">TITLE</td>
		<td> <input type="text" name="name" placeholder="name" size="50" /></td>
	</tr>
	<tr>
		<td style="padding: 10px;">VENUE</td>
		<td> <input type="text" name="address" placeholder="address" size="50"  /></td>
	</tr>
	<tr>
	
		<td colspan="5" style="padding-top: 50px;"><button type="submit" name="submit" value="submit">Submit</button></td>
	</tr>
	</table>
	
	</form>
	
	</div>
	

</body>
</html>
