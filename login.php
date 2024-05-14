<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>User login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <h1><logo> <a href="index.php"> <br> Bus Pass Management System <br> </a> </logo></h1>
</head>
<body>
	<div class="bg">
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="index.html">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
	</div>
</body>
</html>