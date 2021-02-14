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
	<title>About</title>
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
      <li> <a href="index.php">Home </a> </li>
      <li> <a href="about.php"><span style="color: #FF4136;"> About </span> </a> </li>
      <li> <a href="favorites.php"> Favorites </a> </li>
	  <li> <a href="contact.php"> Contact </a> </li>
	  <li> <a href="index1.php"> Bay.com </a> </li>
</ul>
</nav>
</div>
</header>

	<section id="aboutinfo">
		<h1 id="about123">A little about me</h1>
		<section id="info123">
			<article>
				<img src="images/elhami.jpg" id="me">
			</article>
			<aside>
				<p id="about123">I'm Elhami Musliu, 20 years old, born and raised in the city of Prishtina, on May 9th 2000. I still live in a house in Prishtina, a city I love a lot. It is a small city in the center of Kosovo and its people are very nice and friendly. I've lots of friends here, with a few of them I'm friends since we were very little and we share the same memories of te awesome childhood we had.
				</p>
			</aside>
		</section>
	</section>
	<div id="imgandsections">
		<h1 id="imgsct1">Educational Autobiography</h1>
		<h3 id="primarysc">Primary School</h3>
		<section id="primaryschool">
			<p>I've finished
				<b>Primary School</b> at
				<b>"Emin Duraku"</b> school.
			<br>
			My first day at school was when I was seven years old, during 2007. I finished it nine years later with excellent grades, respectively in 2016.
			</p>
			<a href="#" target="blank">
				<img src="images/EminDuraku.jpg">
			</a>
		</section>

		<h3 id="highsc">High School</h3>
		<section id="highschool">
			
			<p>In 2016, I started
				<b>High School</b> at
				<b>"Gjin Gazulli"</b> 
				school. I finised it after three years with very good grades. I'd say that these three years were a wonderful part of my life because of the friends and the great fun I had
			</p>
			<a href="#">
				<img src="images/GjinGazulli.jpg">
			</a>
		</section>

		<h3 id="collegesc">College</h3>
		<section id="university">
			<p>After high school I chose to study
				<b>Computer Science</b> at
				<b>"University for Business and Technology"</b>.  
				At first I wanted to study 
				<b>English Language</b> 
				but gladly, I changed my mind. This is my second year in Computer Science.
			</p>
			<a href="http://ubt-uni.net" target="blank">
				<img src="images/ubt.jfif">
			</a>
		</section>
	</div>

	<section id="aboutinfo">
		<h1 id="about123">A little about me</h1>
		<section id="info123">
			<article>
				<img src="images/vali.png" id="me">
			</article>
			<aside>
				<p id="about123">I'm Valmir Jollxhiu, 20 years old, born  in the city of Prizren, on May 9th 2000. But I live in Suhareka, a city I love a lot. I've lots of friends here, with a few of them I'm friends since we were very little and we share the same memories of te awesome childhood we had.
				</p>
			</aside>
		</section>
	</section>
	<div id="imgandsections">
		<h1 id="imgsct1">Educational Autobiography</h1>
		<h3 id="primarysc">Primary School</h3>
		<section id="primaryschool">
			<p>I've finished <b>Primary School</b> at <b>"Dituria"</b>  school in <b>Samadrexhë-Suharekë</b>.
My first day at school was when I was six years old, during 2006. I finished it nine years later with an excellent grades, respectively in 2015.
			<br>
			
			</p>
			<a href="#">
				<img src="images/Dituria.jpg">
			</a>
		</section>

		<h3 id="highsc">High School</h3>
		<section id="highschool">
			
			<p>In 2015, I started <b>High School at "Jeta e Re"</b> school in <b>Suharekë</b>. I finised it after three years with very good grades. I'd say that these three years were a wonderful part of my life because of the friends and the great fun I had.
			</p>
			<a href="#" target="blank">
				<img src="images/gjimnazi.png">
			</a>
		</section>

		<h3 id="collegesc">College</h3>
		<section id="university">
			<p>After high school I chose to study <b> Computer Science </b>at <b>"UBT" </b>College. At first I wanted to study the <b>Englis Language</b> but gladly, I changed my mind. It's been 1 year since I started studying Computer Science.
			</p>
			<a href="http://ubt-uni.net" target="blank">
				<img src="images/ubt.jfif">
			</a>
		</section>
	</div>


	<section id="fffff">
		<p id="paragraf123">
			During 6th-9th grade I used to be part of competitions in subjects like
			<b>Mathematics</b> and 
			<b>Geography</b>. Also, I was part of 
			<b>"Euro Park"</b> 
			competition organised by schools all around Kosovo.
		</p>
	</section>
		<h3 id="quotestitle">A few quotes about education</h3>
		<section id="aboutimg" style="

	background: url('images/grey.png') 0 -250px;
	">
			
			<h1>"Education is not the learning of facts, <br>
				but the training of the mind to think" <br>
				<span class="autors">-Albert Einstein</span>
			</h1>
			<h1>"Education is the most powerful weapon which you can use<br> to control the world."<br>
				<span class="autors">-Nelson Mandela</span>	
			</h1>
			<h1>"An investment in knowledge pays the best interests."
				<br><br><span class="autors"> -Benjamin Franklin</span>
			</h1>

		</section>
		<br>
<footer>
	<footer id="footer9">
		<div id="mainfooter">
			<section id="footerpart1">
				<img id="webpagephotoF" src="images/coding02.png" alt="webpage">
				<h3 id="h3F">What is this web page about?</h3>
				<br>
				<p id="wbaboutF" style="font-size: 95%;">Kjo webfaqe eshte webfaqja jone e pare e krijuar. Kjo webfaqe eshte projekt i dhene nga Profesori yne Ramiz Hoxha ne <a class="UBTLink" href="https://www.ubt-uni.net/sq/ballina/" target="_blank"> "University for Business and Technology"</a>.</p>					
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
		<p>Elhami Musliu & Valmir Jollxhiu &copy; 2020. </p>
	</div>
</footer>
</body>
</html>