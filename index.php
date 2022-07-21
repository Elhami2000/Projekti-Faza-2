<?php
//Funksioni isLoggedIn. Nuk lejon me hy ne website pa u qene logged in.
include('backend/functions.php');
if (!isLoggedIn()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: backend/login.php');
}?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
	<link rel="stylesheet" type="text/css" href="backend/style.css">
</head>
<body style="background-color: #021C28">

	<header>
		<div class="divHeader">
			<div id="DivH1">
				<a href="index.php"> <img src="images/logo2.png" alt="Logo"> </a>
			</div>
			<nav>
				<ul>
					<li><a href="index.php"><span style="color: #FF4136;">Home</span></a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="favorites.php">Favorites</a></li>
					<li><a href="contact.php">Contact</a></li>
					<li><a href="index1.php"> Buy.com </a></li>
				</ul>
			</nav>
		</div>
	</header>

	<div class="header">
		<h2>Home Page</h2>
	</div>
	<div class="content">
		<!-- Mesazhi per lajmerim te login-it -->
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
		<!-- Info per user -->
		<div class="profile_info">
			<img src="backend/images/welcomeMesazh.jpg" style="width: 100px; height: 70px;">
			<!--<h3 style="text-align: center;">Login me sukses!</h3>-->

			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i>

						<br>
						<a href="index.php?logout='1'" style="color: red;">Log out</a>
						&nbsp;<a href="backend/admin/home.php" style="color: red">Dashboard (admin only)</a>
					</small>

				<?php endif ?>
			</div>
		</div>
	</div>

	<content>
		<section id="sectionImg" style="
	width: 100%;
	min-height: 520px;
	background: url('images/keyboard14.jpg') no-repeat -700px -500px;
	position: center;
	transition: 2s;">
			<div class="divHeader">
				<h1 id="welcomee">Welcome!</h1>
			</div>
		</section>

		<div id="Description">
			<br>
			<h2>Nje pershkrim i shkurte i faqeve tjera</h2>
			<section>
				<a href="about.php">
					<h4>About</h4>
				</a>
				<br>
				<p class="paragraf4242">Ketu mund te gjeni me shume info per ne.</p>
			</section>

			<section>
				<a href="favorites.php">
					<h4>Favorites</h4>
				</a>
				<br>
				<p class="paragraf4242">Ketu mund te gjeni gjerat qe na pelqejne me se shumti.</p>
			</section>

			

			<section>
				<a href="contact.php">
					<h4>Contact</h4>
				</a>
				<br>
				<p class="paragraf4242">Ketu mund te na kontaktoni permes social media.</p>
			</section>
			<br><br>
		</div>

	</content>

	<footer>
	<footer id="footer9">
		<div id="mainfooter">
			<section id="footerpart1">
				<img id="webpagephotoF" src="images/coding02.png" alt="webpage">
				<h3 id="h3F">What is this web page about?</h3>
				<br>
				<p id="wbaboutF" style="font-size: 80%;">Kjo webfaqe eshte webfaqja jone e pare e krijuar. Kjo webfaqe eshte projekt i dhene nga Profesori yne Ramiz Hoxha ne <a class="UBTLink" href="https://www.ubt-uni.net/sq/ballina/" target="_blank"> "University for Business and Technology"</a>.</p>					
			</p>
			</section>
			<section id="footerpart2">
				<img id="socialmediaaF" src="images/socialmediaa.png" alt="foto" style="height: 25%;">
				<h3>Share your thoughts with me.</h3>
				<form style="background:#021C28; width: 100%; padding: 0%; border: 0px;">
					<input type="email" id="emailF" name="email" placeholder="Your Email">
					<textarea id="textareaF" placeholder="Questions/Suggestions/Comments? They're all welcome!"></textarea><br>
					<button id="buttonF">Send</button>
				</form>
			</section>
			<section id="footerpart3">
				
				<img id="socialmediaF" src="images/socialmediaaa.png">

				<h3>
					<span class="span4242">Reach</span>
					<span class="span4240">me</span>
					<span class="span4243">through</span>
					<span class="span4244">social</span>
					<span class="span4246">media</span>
					<span class="span4247">!</span>
				</h3>

				<h4 class="footer42421">
					<span class="span4242">For</span>
					<span class="span4240">more,</span>
					<span class="span4243">check</span>
					<span class="span4244">out</span>
					<a href="contact.php" class="contactfooter">Contact</a>
					<span class="span4247">Page.</span>
				</h4>

			</section>
		</div>
		
	</footer>


	<div id="footer">
		<p>Elhami Musliu & Valmir Jollxhiu &copy; 2020. </p>
	</div>
</footer>


</body>
</html>