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
	
	<!-- Kodi per listimin e userave -->
<?php
	$result = mysqli_query($db,"SELECT * FROM users");
?>
<!DOCTYPE html>
	<html>
		<link rel="stylesheet" href="../style.css?v=<?php echo time(); ?>">

	<body>
		<?php
			if (mysqli_num_rows($result) > 0) { // > 0 == nese ka 1 apo me shume usera me shfaq tabelen e userave
		?>
	  <table>
	  	<tr>
	    	<td>ID</td>
	    	<td>Emri</td>
	    	<td>Roli</td>
	    	<td>Email</td>
		</tr>
		<?php
			$i=0;
			while($row = mysqli_fetch_array($result)) { // Marrja e te dhenave me while loop (I mbush table rows me te dhena)
		?>
		<tr>
		    <td><?php echo $row["id"]; ?></td>
		    <td><?php echo $row["username"]; ?></td>
		    <td><?php echo $row["user_type"]; ?></td>
		    <td><?php echo $row["email"]; ?></td>
		</tr>
	<?php
		$i++;
		}
	?>
		</table>
		<?php
	}
	else{
	    echo "Nuk ka te dhena ne databaze.";
	}
?>

	<div id="footer" style="margin-top: 2%;">
	<p>Elhami Musliu & Valmir Jollxhiu &copy; 2020.</p>
	</div>
</body>
</html>
