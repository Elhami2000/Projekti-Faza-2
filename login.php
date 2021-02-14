<?php include('functions.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>Webfaqja jone personale - Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background: url('images/images.jpg');">

	<div class="registerlogin login">
		<div class="header">
			<h2>Login</h2>
		</div>
		<form method="post" action="login.php">

			<?php echo display_error(); ?>

			<div class="input-group">
				<label>Username</label>
				<input type="text" name="username" placeholder="Your username...">
			</div>
			<div class="input-group">
				<label>Password</label>
				<input type="password" name="password" placeholder="Your password...">
			</div>
			<div class="input-group">
				<button type="submit" class="btn" name="login_btn">Login</button>
			</div>
			<p>
				Nuk je i regjistruar? <a href="register.php" onclick="reglog(0)">Sign up</a>
			</p>
		</form>
	</div>

	<!--<div class="registerlogin register">
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
				Je i regjistruar? <a href="#" onclick="reglog(1)">Sign in</a>
			</p>
		</form>
	</div>-->

	<div id="footer" style="margin-top: 2%;">
	<p>Elhami Musliu & Valmir Jollxhiu &copy; 2020.</p>
	</div>

	<script src="../js/WebJS.js"></script>
</body>
</html>