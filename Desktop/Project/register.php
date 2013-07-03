<?php

if($POST_["Register"])
{
mysqli_connect("mysql1.000webhost.com","a3025212_sql","Karthik125@nitt","a3025212_sql");
$username=$_POST["username"];
$password=$_POST["password"];
$email=$_POST["email"];
$checkfordup=mysql_query("SELECT * FROM users WHERE username='$username'");
if(mysql_num_rows($checkfordup)>=1)
	echo "Username Already Taken";
else
{
	$password=md5($password);
	else
	{
		mysqli_query($con,"INSERT INTO users (Username,Password,Email) VALUES ('$username','$password','$email')");
		echo "You have been successfully registered !";
	}
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
		<form>
		<label for="name">Username:</label>
		<input type="text" name="username" id="username">
		<label for="username">Password:</label>
		<input type="password" name="password" id="password">
		<label for="email">E-Mail:</label>
		<input type="text" name="email" id="email">
		<div id="lower">
		<input type="submit" value="Register">
		</div>
		</form>
	</div>
</body>
</html>
	<?php
	}
?>



