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
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="HandheldFriendly" content="true">
	<title></title>
	<link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
</head>
<body>

	<header>
		<div class="divHeader">
			<div id="DivH1">
				<a href="index.php"> <img src="images/logo2.png" alt="Logo"> </a>
			</div>
			<nav>
				<ul>
					<li><a href="index.php">Home</span></a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="favorites.php">Favorites</a></li>
					<li><a href="contact.php"><span style="color: #FF4136;"> Contact</a></li>
					<li> <a href="index1.php"> Bay.com </a> </li>
				</ul>
			</nav>
		</div>
	</header>


 	<center>
 		<section class="contact">
 			<article>

 			<h2 class="extra">Get in Touch</h2>	
 			<p>Feel free to message anytime.</p>
 			<div class="grid">
 				<div>
 			<a href="https://www.facebook.com" target="_blank"> 	<img src="images/facebook.png" class="social"></a>
 				<p class="extra">Vali Jollxhiu</p>
 			</div>
 			<div>
 				<a href="https://accounts.snapchat.com/accounts/login?continue=https%3A%2F%2Faccounts.snapchat.com%2Faccounts%2Fwelcome" target="_blank"><img src="images/snapchat.png" class="social"></a>
 				<p class="extra">vjollxhiu</p>
 			</div>
 			<div>
 				<a href="https://instagram.com/" target="_blank"><img src="images/instagram.png" class="social"></a>
 				<p class="extra">valiijollxhiu</p>
 			</div>
 			<div>
 				<a href="#"><img src="images/google.png" class="social"></a>
 				<p class="extra">vali jollxhiu</p>
 			</div>
 		</div>
 	</article>
 	<article>
 		<h2>Or,<span class="extra"> email me right away</span></h2>
 		<p>Always happy to recieve emails</p>
 		<form>
 			<div class="grid-form">
 				<input type="text" class="input1" placeholder="Your Name">
 				<div>&nbsp;</div>
 				<input type="text" class="input1" placeholder="Last Name">
 			</div>
 			<input type="text" class="input1" placeholder="Your Email">
 			<input type="text" class="input1" placeholder="Your Phone">
 			<input type="text" class="input1" placeholder="Your Message">
 			<button class="button-form" align="center" >Send</button>
 		</form>
 	</article>
 		</section>
 	</center>

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
				<form>
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
		<p>Elhami Musliu & Valmir Jollxhiu <!-- bros for life --> &copy; 2020. </p>
	</div>
</footer>

</body>
</html>