<?php
	session_start();
	include ('connecting.php');
	//phpinfo();
?>
<!DOCTYPE html>
<html>
<head>
<title>Online Ticketing Violation</title>
<link rel="stylesheet" href="style1.css">
</head>
<body>

	<br>
	<br>
	<div id="main-wrapper">
	<center><h2>Online Ticketing Violation</h2></center>
		<form action="insertrec.php" method="post">
			
			<div class="inner_container">
			
				<label ><b>Full Name :</b></label>
				<input type="" placeholder="" name="name" class="field" required><br>
				
				<label><b>Plate Number : </b></label>
				<input type="" placeholder="" name="plate_number" class="field" required><br>

				<label><b>Mobile Number :</b></label>
				<input type="" name="mobile_number" class="field" required><br>

				<label><b>Violations :</b></label><br><select name="violation">
													<option value="value1">VALUE1</option>
													<option value="value2">VALUE2</option>
													<option value="value3">VALUE3</option>

				</select>
				<br>
				<label><b>Due Date</b></label>
				<input type="Date" name="due_date" class="field" required><br>

				<label><b>Reference Number</b></label>

				<input class="field" type="reference" name="reference_number" value="<?php
$a=uniqid();
echo "$a";
?>"><br>

				<button name="submit" class="sign_up_btn" type="submit">SEND</button>
				
			</div>
		</form>
		
		<?php
			if(isset($_POST['submit']))
			{
			
				@$name=$_POST['name'];
				@$mobile_number=$_POST['mobile_number'];
				@$plate_number=$_POST['plate_number'];
				@$violation=$_POST['violation'];
				@$due_date=$_POST['due_date'];
				@$reference_number=$_POST['reference_number'];
				
				
				if($plate_number)
				{
					$query = "select * from violators";
					//echo $query;
				$query_run = mysqli_query($connection,$query);
				//echo mysql_num_rows($query_run);
				if($query_run)
					{
						if(mysqli_num_rows($query_run)<0)
						{
							echo '<script type="text/javascript">alert("please correct data added.")</script>';
						}
						else
						{
							$query = "insert into violators 
							(name,mobile_number,plate_number,violation,due_date,reference_number) values('$name','$mobile_number','$plate_number','$violation','$due_date','$reference_number')";

							$query_run = mysqli_query($connection,$query);
							if($query_run)
							{
								echo '<script type="text/javascript">alert("Info. Recorded! SMS will be send ASAP,  Thank you. ")</script>' or die ('I cannot connect to the database because: ' . mysql_error());
								
							
								$_SESSION['name'] = $name;
								$_SESSION['mobile_number'] = $mobile_number;
								$_SESSION['plate_number'] = $plate_number;
								$_SESSION['violation'] = $violation;
								$_SESSION['due_date'] = $due_date;
								$_SESSION['reference_number'] = $reference_number;
								
								
								
							}
							else
							{
								echo '<p class="bg-danger msg-block">Registration Unsuccessful due to server error. Please try later</p>';
							}
						}
					}
					else
					{
						echo '<script type="text/javascript">alert("DB error")</script>';
					}
				}
				else
				{
					echo '<script type="text/javascript">alert("Information entered was wrong! please, check again.")</script>';
				}
				
			}
			else
			{
			}
		?>
	</div>
</body>
</html>