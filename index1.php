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
	
<?php // shfaqim produktet nga databaza
$produktet=getAllProducts();
while($produkti=mysqli_fetch_assoc($produktet)):
?>
	<div class="pic">
		<a href="#"><img src="images/<?php echo $produkti['Foto']; ?>" alt="pc" width="515"
	height="300" />
		<h4 style="text-align:center"><a href="#"><?php echo $produkti['EmriProduktit']; ?> </a></h4> 
		<p> <?php echo $produkti['Pershkrimi']; ?> </p>
	</div>
<?php endwhile; ?>
		
</div>
</div>
</body>
</html>
