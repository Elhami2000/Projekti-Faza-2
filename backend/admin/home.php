<?php 
include('../functions.php');

if (!isAdmin()) {
	$_SESSION['msg'] = "Nuk je admin!";
	header('location: ../../index.php');
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: ../login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
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
		<h2>Admin - Dashboard</h2>
	</div>
	<div class="content">
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<div class="profile_info">
			<img src="../images/WelcomeMesazh.jpg"  >

			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						<a href="home.php?logout='1'" style="color: red;">Logout</a>
                       &nbsp; <a href="create_user.php"> + Shto user</a>
                       &nbsp; <a href="../../index.php">Kthehu ne home.</a>
                       &nbsp; <a href="http://localhost/phpmyadmin/sql.php?server=1&db=backend&table=users&pos=0">Menaxho userat</a>
					</small>

				<?php endif ?>
			</div>
		</div>
	</div>

	<div id="footer" style="margin-top: 2%;">
	<p>Elhami Musliu & Valmir Jollxhiu &copy; 2020.</p>
	</div>
</body>
</html>