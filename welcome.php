<?php
session_start();

if(!$_SESSION["login_user"])
{
	header("location:index.php?notlogedin=You are not Administrator!");
}
?>
<!Doctype html>
<html>
<head><title>Saving System</title>
<link rel="stylesheet" type="text/css" href="navstyle.css"/>
</head>

<body>


	
	<?php
	echo "<h3>Welcome : ".$_SESSION["login_user"]."</h3>";
?> 
<a href='logout.php'>Logout</a>







</body>
</html>
