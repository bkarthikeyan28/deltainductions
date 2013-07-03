<?php

if($_POST["register"])
{
$con=mysql_connect('mysql1.000webhost.com','a3025212_sql','Karthik125@nitt','a3025212_sql');
mysql_select_db('a3025212_sql');
$username=$_POST["username"];
$password=$_POST["password"];
$email=$_POST["email"];
$checkfordup=mysql_query("SELECT * FROM users WHERE username='$username'") or die(mysql_error());
if(mysql_num_rows($checkfordup)>=1)
	{
		header("Location:register+already.php");
	}
else
{
	$password=md5($password);
	mysql_query("INSERT INTO users (Username,Password,Email) VALUES ('$username','$password','$email')") or die(mysql_error());
	echo "You have been successfully registered !";
}
}
else
{
	?>
<!doctype html>

<head>
	
	<title>Login</title>
	<link rel="stylesheet" href="./styles.css">
	
</head>
<body>
	
	<div id="container">
		<form action="register.php" method="POST" name="register">
		<label for="name">Username:</label>
		<input type="text" name="username" id="username">
		<div id="already" style="display:none">Username Already Taken</div>
		<label for="username">Password:</label>
		<input type="password" name="password" id="password">
		<label for="email">E-Mail:</label>
		<input type="text" name="email" id="email">
		<div id="lower">
		<input type="submit" name="register" value="Register">
		</div>
		</form>
	</div>
</body>
</html>
	<?php
	}
?>



