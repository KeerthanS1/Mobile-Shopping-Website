<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login to CellClues</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body background="Timber.jpg">
    <h2 align="center" style="color:black;font-size:300%; font-family:Rockwell; background-color: white">Welcome to CellClues</h2>

  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" autocomplete="off" name="username" >
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

   <div class="header">
    <h2>Admin Login</h2>
  </div>
   
  <form method="post" action="login.php">
    <?php include('errors.php'); ?>
    <div class="input-group">
      <label>Admin Username</label>
      <input type="text" autocomplete="off" name="username" >
    </div>
    <div class="input-group">
      <label>Password</label>
      <input type="password" name="password">
    </div>
    <div class="input-group">
      <button type="submit" class="btn" name="admin_user">Login</button>
    </div>
  </form>

</body>
</html>