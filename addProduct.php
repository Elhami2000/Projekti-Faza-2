<?php
// Funksioni isLoggedIn. Nuk lejon me hy ne website pa u qene logged in.
include_once('backend/functions.php');
if (!isLoggedIn()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: backend/login.php');
}

// Funksioni isAdmin. Nuk lejon qasje pa u qene admin.
if (!isAdmin()) {
	$_SESSION['msg'] = "Nuk je admin!";
	header('location: index1.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>www.Bay.com</title>
<link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
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

<form enctype="multipart/form-data" method="post">
    <br><br><br>
    <label for="emri">Emri i produktit:</label><br>
    <input type="text" name="emri" id=""><br><br>
    <label for="pershkrimi">Pershkrimi i produktit:</label><br>
    <input type="text" name="pershkrimi" id=""><br><br>
    <label for="foto">Foto:</label><br>
    <input type="file" name="foto" id=""><br><br>

    <input type="submit" value="Shto Produktin" name="shtoP">

</form>

<?php
if(isset($_POST['shtoP'])){
    $emri=$_POST['emri'];
    $pershkrimi=$_POST['pershkrimi'];
    $foto=$_FILES['foto']['name'];

    addProduct($emri, $pershkrimi, $foto);
}
?>

</body>
</html>