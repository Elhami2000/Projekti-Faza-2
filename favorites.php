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
	<title></title>
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="HandheldFriendly" content="true">
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
					<li><a href="index.php"> Home</span></a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="favorites.php"><span style="color: #FF4136;"> Favorites</a></li>
					<li><a href="contact.php">Contact</a></li>
					<li> <a href="index1.php"> Bay.com </a> </li>
				</ul>
			</nav>
		</div>
	</header>
	<h1 id="favorites">My favorites</h1><br>
	<p id="myfav">I don't have much free time about when I do, I make sure I spend it doing the things I love must! Usually when I have free time, I spend a lot of time whatching Youtube Tutorials about coding becouse it is very entertaining and I love leraning new things. Also watching football matches is very exciting to me. So are movies and game as well.</p>

	<section class="section2" id="codingsection">
		<article>
			<p>
				Althought I'm kind of new to computer programming, I'm fascianted by it. I love it and I'm trying to get better and better at it every day. It really entertains me and gets my brain thinking.<br>"Everyone should learn how to code, it teaches you how to think." -Steve Jobs
			</p>
		</article>
		<aside>
			<img src="images/webpage1.png" alt="coding">
		</aside>
	</section>

	<section class="section1" id="liverpoolsection">
		<article>
			<img src="images/liverpool.png">
			<aside>
				<p>
					I almost never whatch a match when Liverpool FC is not one of the team playing.
					Also I most never miss a Liverpool FC match. I love Liverpool FC becouse of the way they play football with an talking mentality. I also love them becouse of the armosphere their stadium creates.
				</p>
			</aside>
		</article>
		</section>


		<section class="section2" id="smediasection">
			<article>
				<p>
					We spend a considerable amount of time on social media becouse it offers us many benefits. One of the many benefits is that, social media allows us to not only interact with people from all over the world, but to do so from anywhere at any time.
				</p>
			</article>
			<aside>
				<img src="images\smediaa.png">
			</aside>
		</section>

		<!--<section class="section2" id="moviesection">
			<article>
				<p>
					Usually at night when I have nothing to do, I watch movies on TV. I like action and commedy moivies. The latest movie I watches is "The Foreigner" wich is a must watch movie.
				</p>
			</article>
			<aside>
				<img src=">
			</aside>
		</section>-->
 
		<section class="section1" id="moviesection">
			<article>
				<img src="images\foreinger.png" alt="foreinger">
			</article>
			<aside>
				<p>
					Usually at night when I have nothing to do, I watch movies on TV. I like action and commedy movies. The latest movie I watched is "The Foreigner" which is a must-watch movie. It is an action thriller film directed by Martin Campbel and written by David Marconi, based on the 1992 novel "The Chinaman" by Stephen Leather.
				</p>
			</aside>
		</section>

		<section class="section2" id="narutosection">
			<article>
				<p>
					Another thing I like to watch is "Naruto Shipuden" which is a well known animated movie around the world. I have watched all 500 episodes. I love its story and it is a kind of a motivating movie.
				</p>
			</article>
			<aside>
				<img src="images\naruto.png" alt="naruto" id="naruto">
			</aside>
		</section>

		<section class="section1" id="gamingsection">
			<article>
				<img src="images/battlefield14.png" alt="BF">
			</article>
			<aside>
				<p>
					Battlefield 4 is a top rated game in which I enjoy having fun with friends. It's a game which helps in improving your English speaking because you have to speak almost all the time since communication is key in the game.
				</p>
			</aside>
		</section>

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