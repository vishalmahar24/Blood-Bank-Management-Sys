<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fb/Blood_drop_plain.svg/974px-Blood_drop_plain.svg.png">
</head>
<body bgcolor="#8B0000">
<div style="background-color: white; margin-left: 80px; margin-right: 80px; height: 800px;">
	<?php include('header1.php'); ?>
	<hr>
	<div id="form">
		<form method="POST" action="admin.php">

	<h1 style="color: red; margin-left: 50px;">ADMIN LOGIN PAGE</h1><br /><br />
	<table>
	<tr>
			<td style="padding: 10px;">Email-id</td>
			<td> <input type="text" name="email" placeholder="Email-id" size="20"  /></td>
		</tr>
		<tr>
			<td style="padding: 10px;">Password</td>
			<td> <input type="Password" name="password" placeholder="Password" size="20"  /></td>
	</tr>
	<tr>
		<td colspan="5" style="padding-top: 50px;"><button type="submit" name="login" value="submit">Submit</button></td>
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
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['login'])) {

$email = $_POST['email'];
   $password=$_POST['password'];


 $result = mysqli_query($conn,"select *from admin where email = '$email' and password = '$password'")or die("failed to query databases".mysqli_error());
      
      
       if ( mysqli_num_rows($result)>0) {
              echo "<script>window.open('adminindex.php','_self')</script>";
       }
          else
          {
                echo "wrong username or password";

          }

}
   
?>
