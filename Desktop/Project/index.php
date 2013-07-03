<?php

if($POST_['login'])
{
  ob_start();
  session_start();
  mysqli_connect("mysql1.000webhost.com","a3025212_sql","Karthik125@nitt","a3025212_sql");
  $username=$POST_['username'];
  $password=$POST_['password'];
  $loginc=mysql_query("SELECT * FROM users WHERE username='$username' AND password=md5('$password')");
  $count=mysql_num_rows($loginc);
  $row=mysql_fetch_array($loginc);
  if($count==0)
    <script type="javascript">document.getElementById("donotmatch").style.display="block";</script>
  else 
  {
    $_SESSION['username'];
    $_SESSION['currname']=$row['username'];
    header("Location:main.php");
  }
}
ob_end_flush();
else 
{
  ?>
<head>
  <title>Login</title>
  <link rel="stylesheet" href="./styles.css">
</head> 
<body>
  
  <div id="container">
    <form method="POST" action="login.php">
    <label for="name">Username:</label>
    <input type="text" name="username" id="username">
    <label for="username">Password:</label>
    <input type="password" name="password" id="password">
    <div id="donotmatch" style="display:none;">Username and Password do not match</div>
    <div id="lower">
    <input type="submit" value="Login">
    <p><a href="register.php">New User? Sign Up</a>
    </div>
    </form>
  </div>
</body>
</html>
   <?php
}
?>