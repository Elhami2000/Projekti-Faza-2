<?php include('../functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Webfaqja jone personale - Create user</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
	<style>
		.header {
			background: #003366;
		}
		button[name=register_btn] {
			background: #003366;
		}
	</style>
</head>
<body style="background: url('../images/images.jpg');">
	<div class="header">
		<h2>Admin - create user</h2>
	</div>
	
	<form method="post" action="create_user.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<a href="home.php" style="color: red">Kthehu ne dashboard</a><br><br>
			<label>Username</label>
			<input type="text" name="username" placeholder="New username..." value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" placeholder="New email..." value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Lloji i userit</label>
			<select name="user_type" id="user_type" >
				<option value=""></option>
				<option value="admin">Admin</option>
				<option value="user">User</option>
			</select>
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1" placeholder="New password...">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2" placeholder="Rishkruaj passwordin...">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="register_btn"> + Krijo user</button>
		</div>
	</form>

	<div id="footer" style="margin-top: 2%;">
	<p>Elhami Musliu & Valmir Jollxhiu &copy; 2020.</p>
	</div>
</body>
</html>