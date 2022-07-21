<?php include('functions.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>Webfaqja jone personale - Register</title>
	<link rel="stylesheet" href="style.css">
</head>
<body style="background: url('images/images.jpg');">
<div class="header">
	<h2>Register</h2>
</div>
<form method="post" action="register.php">
	<?php echo display_error(); ?>
	<div class="input-group">
		<label>Username</label>
		<input type="text" name="username" placeholder="Your username..." value="<?php echo $username; ?>">
	</div>
	<div class="input-group">
		<label>Email</label>
		<input type="email" name="email" placeholder="Your email..." value="<?php echo $email; ?>">
	</div>
	<div class="input-group">
		<label>Password</label>
		<input type="password" placeholder="Your password..." name="password_1">
	</div>
	<div class="input-group">
		<label>Konfirmo passwordin</label>
		<input type="password" placeholder="Perserite passwordin..." name="password_2">
	</div>
	<div class="input-group">
		<button type="submit" class="btn" name="register_btn">Register</button>
	</div>
	<p>
		Je i regjistruar? <a href="login.php">Sign in</a>
	</p>
</form>

<div id="footer" style="margin-top: 2%;">
	<p>Elhami Musliu & Valmir Jollxhiu &copy; 2020.</p>
</div>
</body>
</html>