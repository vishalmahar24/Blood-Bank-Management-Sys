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
	
	$cid=$_POST['c_id'];
	$title=$_POST['title'];
	$venue=$_POST['venue'];
	$date=$_POST['date'];
	$time=$_POST['time'];
	$cordi=$_POST['cordinator'];
	$num=$_POST['num'];
	

	$query2="INSERT INTO camp(c_id,title,venue,date,time,cordinator,num) 
	VALUES ('$cid','$title','$venue','$date','$time','$cordi','$num')";
		if(mysqli_query($conn,$query2)){
			echo "<script>window.open('adminindex.php','_self')</script>";
		}
		else{
			echo "Camp exists of this ID";
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
		<form method="POST" action="newcamp.php">

	<h1 style="color: red;">ENTER THE DETAILS OF NEW CAMP :</h1><br /><br />
	<table>
	<tr>
		<td style="padding: 10px;">CAMP_ID</td>
		<td><input type="text" name="c_id" placeholder="c_id" size="20"  /></td>
	</tr>
	<tr>
		<td style="padding: 10px;">TITLE</td>
		<td> <input type="text" name="title" placeholder="title" size="50" /></td>
	</tr>
	<tr>
		<td style="padding: 10px;">VENUE</td>
		<td> <input type="text" name="venue" placeholder="venue" size="50"  /></td>
	</tr>
	
	<tr>
		<td style="padding: 10px;">DATE</td>
		<td> <input type="text" name="date" placeholder="yy-dd-mm" size="20"  /></td>
	</tr>
	<tr>
		<td style="padding: 10px;">TIME</td>
		<td> <input type="text" name="time" placeholder=" " size="50"  /></td>
	</tr>
	<tr>
		<td style="padding: 10px;">CORDINATOR</td>
		<td> <input type="text" name="cordinator" placeholder="cordinator" size="50"  /></td>
	</tr>
	<tr>
		<td style="padding: 10px;">CONTACT NO.</td>
		<td> <input type="text" name="num" placeholder="xyz" size="50"  /></td>
	</tr>
		<td colspan="5" style="padding-top: 50px;"><button type="submit" name="submit" value="submit">Submit</button></td>
	</tr>
	</table>
	
	</form>
	
	</div>
	

</body>
</html>
