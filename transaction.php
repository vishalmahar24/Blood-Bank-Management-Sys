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

if(isset($_POST["submit2"])){
	
	$rid=$_POST['r_id'];
	$did=$_POST['d_id'];
	$bbid=$_POST['bb_id'];
	$bldid=$_POST['bldgrp'];
	$date=$_POST['date'];
	$units=$_POST['units'];

	$query2="INSERT INTO transaction(r_id,d_id,bb_id,units,bldid,date) VALUES ('$rid','$did','$bbid','$units','$bldid','$date')";
		
		if(mysqli_query($conn,$query2)){
			
			$query3="UPDATE donorlogin set ldate='$date' where d_id='$did'";
			
				if(mysqli_query($conn,$query3)){
					
					$query4=mysqli_query($conn,"SELECT * from store where code='$bldid' and bb_id='$bbid'");
					
					$row=mysqli_fetch_array($query4);
					
					if($row>0){echo"row>o";
						 $quantity=$row[2];
						 $total=$quantity+$units;
						
						$query5="UPDATE store set quantity='$total' where code='$bldid' and bb_id='$bbid'";
						
						if(mysqli_query($conn,$query5)){
							echo "<script>window.open('storage.php?rid=$rid','_self')</script>";
						}
					
					}
					else if($row==0){
						$query6="INSERT into store(bb_id,quantity,code) values('$bbid','$units','$bldid')";
						if(mysqli_query($conn,$query6)){
							echo "<script>window.open('storage.php?rid=$rid','_self')</script>";
						}
						else{
							echo "<script>alert('not uploaded')</script>";
						}
					}
				
				}
				else{
					echo "<script>alert('No such User')</script>";
				}
		}
		else{
			echo "No such donors";
		}
	
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
  			<li><a href="storage.php?rid=<?php echo $rec; ?>">Storage</a></li>
  			<li><a href="index.php">Log Out!</a></li>
        		
		</ul>
	</div>
	<hr>
	<div id="form">
	<form name="form" action="transaction.php" enctype="multipart/form-data" method="post">

	<h1 style="color: #000080; margin-left: 0px;">Blood-transaction page</h1><br /><br />
	<table>
	<tr>
		<td style="padding: 10px;">Reception_id</td>
		<td> <input type="text" name="r_id" value="<?php echo $rec; ?>" readonly="readonly" size="20" /></td>
	</tr>
	<tr>
		<td style="padding: 10px;">Donor_id</td>
		<td> <input type="text" name="d_id" placeholder="d_id" size="20"  /></td>
	</tr>
	<tr>
		<td style="padding: 10px;">BloodBank_id</td>
		<td> <input type="text" name="bb_id" value="<?php echo $bid; ?>" size="20" readonly="readonly" /></td>
	</tr>
	<tr>
		<td style="padding: 10px;">Date</td>
		<td> <input type="text" name="date" placeholder= "yyyy-mm-dd" size="20"  /></td>
	</tr>
	<tr>
		<td style="padding: 10px;">No. of Units</td>
		<td><input type="text" name="units" size="20" placeholder="No. of units"></td>
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
	
	<td colspan="5" style="padding-top: 60px;"><button type="submit" name="submit2" value="submit">Submit</button></td>
	</form>
	</div>
	<div id="formp">
	<img src="http://www.techflot.in/images/donor11.jpg" height="300px" width="300px">
		<img src="http://waytojesus.org/wp-content/uploads/2017/02/152971-thumb.jpg" height="300px" width="300px">
</div>
	</div>
</body>
</html>
