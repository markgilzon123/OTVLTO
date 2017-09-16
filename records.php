<!DOCTYPE html>
<html>
  <head>

    <title>Online Ticketing Violations</title>
    <link rel="stylesheet" href="./css/homestyle.css">
    <link rel="shortcut icon" type="image/x-icon" href="./imgs/logo.png" />



  </head>

  <body>
    
<center>
<table width="80%" height="50%" border = "1" cellpadding="1" cellspacing="1">

<th>Full Name </th>
<th>Mobile Number</th>
<th>Plate Number</th>
<th>Violations</th>
<th>Due Date </th>
<th>Reference Number</th>
<tr>

<!-- display records-->
<?php
$con = mysqli_connect ("localhost", "root", "") or die ('I cannot connect to the database because: ' . mysql_error());
mysqli_select_db ($con,'OTVdb');
include'functions.php';


$sql = ("SELECT * FROM violators");
$result = $con->query($sql);

while ($admin=$result->fetch_assoc()) {
	
		echo "<tr>";
		echo "<td><center><br>". $admin['name']."<p><br></p></center></td>";
		echo "<td><center><br>". $admin['mobile_number']."<p><br></p></center></td>";
		echo "<td><center><br>". $admin['plate_number']."<p><br></p></center></td>";
		echo "<td><center><br>". $admin['violation']."<p><br></p></center></td>";
		echo "<td><center><br>". $admin['due_date']."<p><br></p></center></td>";
    echo "<td><center><br>". $admin['reference_number']."<p><br></p></center></td>";
		echo "<td><center><br>"

}


?>

</tr>

</table>

   

  </body>
</html>
