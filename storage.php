<?php
	$rec=$_GET['rid'];

	$servername = "localhost";
$username = "id660552_anand";
$password = "anand1998";
$dbname = "id660552_adpproj";
	$conn = new mysqli($servername, $username, $password,$dbname);
	// Check connection
	if ($conn->connect_error) {
  	  die("Connection failed: " . $conn->connect_error);
	}

	$query1=mysqli_query($conn,"SELECT * from reception where r_id='$rec'");
	if($row=mysqli_fetch_array($query1)){
		$bid=$row[4];
	}

?>
<!doctype html>
<html>
<head>
	<title>Blood transaction</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fb/Blood_drop_plain.svg/974px-Blood_drop_plain.svg.png">
</head>
<body>
<div style="background-color: white; margin-left: 80px; margin-right: 80px; height: 800px;">
	<div id="adheader">
		<h1 style="float: left; line-height: 2em;">Blood Bank <?php echo $bid; ?></h1>
		<ul>
			<li><a href="transaction.php?rid=<?php echo $rec; ?>">Transaction</a></li>
  			<li><a href="storage.php">Storage</a></li>
  			<li><a href="index.php">Log Out!</a></li>
        		
		</ul>
	</div>
	<hr>
	<div>
		<table border="2" width="900" align="center" style="margin-top: 30px; margin-left: 100px;">
<tr>
         <th height="70" ">NAME</th>
          <th>TYPE</th>
          <th>QUANTITY</th>
          
          
           
</tr>
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

$run=mysqli_query($conn,"select bloodbank.name,blood.type,store.quantity from store inner join bloodbank on store.bb_id=bloodbank.bb_id inner join blood on store.code=blood.code where bloodbank.bb_id=$bid");

while($row=mysqli_fetch_array($run))
{  $shwp=$row[0];
  $shwempno=$row[1];
  $shwename=$row[2];
  
  echo "<tr align='center'>
         <td height='50'>$shwp</td>
         <td> $shwempno</td>
         <td> $shwename</td>        
           
           
</tr>";
                  
 
}


?>


</table>

	</div>
</div>
</body>
</html>
