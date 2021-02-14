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
	<title>www.Bay.com</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
</head>
<body>

<div id="all-progres">
	<div class="profile">
		<a href="index1.php" title="Home"><i class="fas fa-shopping-cart"></i> Buy.com</a>


		
		<div class="social-i">
		<a href="https://rss.com/" class="rss" title="Rss"><i class="fas fa-rss"></i></a>
		<a href="https://www.reddit.com/" class="reddit" title="Reddit"><i class="fab fa-reddit-alien"></i></a>
		<a  href="https://www.twitter.com/" class="twitter" title="Twitter"><i class="fab fa-twitter"></i> </a>
		<a href="https://www.facebook.com/" class="facebook" title="Facebook"><i class="fab fa-facebook"></i></a>
		
	</div>
	</div>


</div>

<div id="m-head">

<div class="link-">
		
				<h3><a href="index.php" >Home</a></h3>
				<h3><a href="index1.html"><span style="color: #FF4136;">New</a></h3>
				
	

</div>

<div class="link2">
	<a href="#"><img src="images/majt.jpg" width="100%" height="230"></a>

	<div class="bay-">
		
		<div class="pic1">
	<a href="#"><img src="images/0.jpg" alt="pc" width="515"
 height="300" />
	<p><a href="#">Laptop Acer Nitro 5(AN515-54-581E), 15.6" Full HD, Intel Core i5,</br> 16GB RAM DDR4, 1TB SSD, NVIDIA GeForce RTX 2060, i zi</a></p></a>
</div>

<div class="pic2">
	<a href="#"><img src="images/h1.jpg" alt="pc" width="515"
 height="300" />
	<p><a href="#">Radio portative Panasonic RF-3500E9-K</a></p></a>
</div>
<div class="pic2">
	<a href="#"><img src="images/h2.jpg" alt="pc" width="515"
 height="300" />
	<p><a href="#">Orë digjitale për alarm Sencor SDC 120</a></p></a>
</div>
<div class="pic1">
	<a href="#"><img src="images/h3.jpg" alt="pc" width="515"
 height="300" />
	<p><a href="#">Radio Orava T-112</a></p></a>
</div>
<div class="pic2">
	<a href="#"><img src="images/h4.jpg" alt="pc" width="515"
 height="300" />
	<p><a href="#">Laptop Acer Nitro 7 2020 (AN715-52-571E), 15.6 ",</br> Intel Core i5, 16GB RAM, 1TB SSD,</br> INVIDIA GeForce RTX 2060 Max-Q, i zi</a></p></a>
</div>
<div class="pic1">
	<a href="#"><img src="images/h5.jpg" alt="pc" width="515"
 height="300" />
	<p><a href="#">Laptop Acer Nitro 7 2020 (AN715-52-571E), 15.6 ",</br> Intel Core i5, 16GB RAM, 1TB SSD,</br> INVIDIA GeForce RTX 2060 Max-Q, i zi</a></p></a>
</div>
<div class="pic2">
	<a href="#"><img src="images/h6.jpg" alt="pc" width="515"
 height="300" />
	<p><a href="#">Laptop Acer Nitro 7 2020 (AN715-52-571E), 15.6 ",</br> Intel Core i5, 16GB RAM, 1TB SSD,</br> INVIDIA GeForce RTX 2060 Max-Q, i zi</a></p></a>
</div>
<div class="pic1">
	<a href="#"><img src="images/h7.jpg" alt="pc" width="515"
 height="300" />
	<p><a href="#">Laptop Acer Nitro 7 2020 (AN715-52-571E), 15.6 ",</br> Intel Core i5, 16GB RAM, 1TB SSD,</br> INVIDIA GeForce RTX 2060 Max-Q, i zi</a></p></a>
</div>
</div>

</div>
</body>
</html>