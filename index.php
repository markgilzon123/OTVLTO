<!DOCTYPE html>
<html>
<head>
	<title>Savings Sytsem</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="stylesheet" type="text/css" href="style.css"/>
		<style>
			
		</style>
	</head>
	<body>
		<h3 align="center" style="color:red;"><?php echo @$_GET["invalid"]; ?></h3>
		<h3 align="center" style="color:red;"><?php echo @$_GET["logout"]; ?></h3>
		<h3 align="center" style="color:red;"><?php echo @$_GET["notlogedin"]; ?></h3>
		
	<form action="login.php" method="POST">
		<table border="2" align="center" cellpadding="5" cellspacing="6" width="40%">
		<tr>
			<th colspan="6" align="center" style="background:green;color:white"><h1>Admin Login</h1></th>
		</tr>

		<tr>
			<th  align="right" style="border:0; color:#000807; font-famiy:helvetica,arial, sans serif">Username:</th>
			<td style="border:0"><input type="text" name="txtuser" id="field1"></td>
		</tr>

		<tr>
			<th  align="right" style="border:0; color:#000807">Password:</th>
			<td style="border:0"><input type="password" name="txtpass" id="field2" ></td>
		</tr>

		<tr>
			<td colspan="2" align="center" style="border-top:0">
				<input type="submit" value="Log In" id="sub" name="sub">
			</td>
		</tr>
	</table>
	</form>

	</body>
</html>