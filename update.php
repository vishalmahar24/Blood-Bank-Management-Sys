<!DOCTYPE html>
<html>
<head>
	<title>Update Camp</title>
	
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fb/Blood_drop_plain.svg/974px-Blood_drop_plain.svg.png">
</head>
<body>
<div id="adheader">
    <h1 style="padding: 20px;">Update Camp Details</h1>
  </div>
	<?php include('menu.php'); ?>
	<div id="mainbody" align="center">


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

if(isset($_GET['del']))
{
	$del_cid=$_GET['del'];
	if(mysqli_query($conn,"Delete from camp where c_id= '$del_cid'"))
	{
		echo"<h2 align='center'>Camp of id $del_cid Deleted Successfully</h2>";
	}
}


$run=mysqli_query($conn,"select * FROM camp");

while($row=mysqli_fetch_array($run))
{  $cid=$row[0];
  $title=$row[1];
  $venue=$row[2];
  $date=$row[3];
  $time=$row[4];
  $codi=$row[5];
  $contact=$row[6];
  
  
  echo "<table border='1' width ='500px' height='400px' align='left' style='margin: 10px;'>
  <tr align='center'>
         <td height='50'>
         
         <h1>$title</h1><br>
         Venue - $venue<br><br>
         Date - $date   <br><br>       
         Time - $time<br><br>
         Coordinator - $codi<br><br>
         Contact - $contact<br><br>
         <a style ='display: block;
    color: red;
    text-align: center;
    padding: 0px;
    text-decoration: none;'
         href='edit.php?update=$cid'>Update camp details<br>
         
      
         </td>
          
          
           
           
</tr></table>";
                  
 
}


?>




</div>

	</div>
</div>
</body>
</html>
