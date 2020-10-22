<?php
$cid=$_GET[update];
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

$update_cid=$_GET['update'];
$run2= mysqli_query($conn,"select *from camp where c_id= '$update_cid'");
while($row2=mysqli_fetch_array($run2))
{
 	$cid=$row2[0];
 	$title=$row2[1];
	$venue=$row2[2];
  	$date=$row2[3];
  	$time=$row2[4];
  	$cordi=$row2[5];
  	$num=$row2[6];
  	
}

?>


<html>
<head>
	<title>Edit</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fb/Blood_drop_plain.svg/974px-Blood_drop_plain.svg.png">
</head>
<body>

	<div id="adheader">
		<h1 style="padding: 20px;">ADMIN</h1>
	</div>
	<?php include('menu.php'); ?>
	
		<center>
		<h1>Edit Camp details:</h1><br><br>
		<table width="1000px">
			<tr>
					<form action="edit.php?edit_form=<?php echo $cid ?>" method="POST">
						<table>
						
						<tr>
							<td><input type="text" name="cid" size="50" value="<?php echo $cid?>" required="required">
						</tr>
						<tr>
							<td><input type="text" name="title" size="50" value="<?php echo $title?>" required="required">
						</tr>
						
						<tr>
							<td><input type="text" name="venue" size="50" value="<?php echo $venue?>" >
						</tr>
						<tr>
							<td><input type="text" name="date" size="15" value="<?php echo $date?>" >
						</tr>
						
						<tr>
							<td><input type="text" name="time" size="25" value="<?php echo $time?>" >
						</tr>
						<tr>
							<td><input type="text" name="cordinator" value="<?php echo $cordi?>" size="25" >
						</tr>
						<tr>
							<td><input type="text" name="num" value="<?php echo $num?>" size="25" >
						</tr>
				
							
							<tr>
								<td><button type="submit" name="update" value="update">Update</button></td>
							</tr>
						</table>
					</form>
				</td>
			</tr>
		</table>
		</center>
		
		<?php
		$servername = "localhost";
$username = "root";
$password = "Ak@12345";
$dbname = "adpproj";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['update']))
{
	
 	
 	$cid=$_POST['cid'];
 	$title=$_POST['title'];
	$venue=$_POST['venue'];
  	$date=$_POST['date'];
  	$time=$_POST['time'];
  	$cordi=$_POST['cordinator'];
  	$num=$_POST['num'];
  	
  	if(mysqli_query($conn,"Update camp set title='$title',venue='$venue',date='$date',time='$time',cordinator='$cordi',num='$num' where c_id='$cid'"))
  	{
  		header('location:update.php');
  	}
  	
}	

?>
		
</body>
</html>
