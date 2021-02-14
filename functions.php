<?php 
session_start();

// Konektimi ne mySQL databaze.
$db = mysqli_connect('localhost', 'root', '', 'backend');

// Deklarata e variablave
$username = "";
$email    = "";
$errors   = array(); 

// E thirr funksionin register pas klikimit te butonit register.
if (isset($_POST['register_btn'])) {
	register();
}

// Regjistrimi i userit
function register(){
	// Deklarimi i variablave ne forme globale.
	global $db, $errors, $username, $email;

	// Thirrja e inputave.
	$username    =  e($_POST['username']);
	$email       =  e($_POST['email']);
	$password_1  =  e($_POST['password_1']);
	$password_2  =  e($_POST['password_2']);

	// Validimi i formave per register
	if (empty($username)) { 
		array_push($errors, "Shkruaj username te ri."); 
	}
	if (empty($email)) { 
		array_push($errors, "Shkruaj email te ri."); 
	}
	if (empty($password_1)) { 
		array_push($errors, "Shkruaj password te ri."); 
	}
	if ($password_1 != $password_2) {
		array_push($errors, "Passwordet nuk jane te njejte!");
	}

	// Regjistrimi i userit nese funksioni errors eshte 0. (nuk ka errora ne shenim te dhenave)
	if (count($errors) == 0) {
		$password = md5($password_1);	// Enkriptimi i passwordit

		if (isset($_POST['user_type'])) {
			$user_type = e($_POST['user_type']);
			$query = "INSERT INTO users (username, email, user_type, password) 
					  VALUES('$username', '$email', '$user_type', '$password')";
			mysqli_query($db, $query);
			$_SESSION['success']  = "Regjistruat nje user te ri.";
			header('location: home.php');
		}else{
			$query = "INSERT INTO users (username, email, user_type, password) 
					  VALUES('$username', '$email', 'user', '$password')";
			mysqli_query($db, $query);

			// Marrja e ID se userit te krijuar.
			$logged_in_user_id = mysqli_insert_id($db);

			$_SESSION['user'] = getUserById($logged_in_user_id); // Vendosja e userit ne session.
			$_SESSION['success']  = "Login successful. Mire se erdhe!";
			header('location: ../index.php');				
		}
	}
}

// Kthen userin nga ID e tij ne databaze.
function getUserById($id){
	global $db;
	$query = "SELECT * FROM users WHERE id=" . $id;
	$result = mysqli_query($db, $query);

	$user = mysqli_fetch_assoc($result);
	return $user;
}

// escape string
function e($val){
	global $db;
	return mysqli_real_escape_string($db, trim($val));
}

function display_error() {
	global $errors;

	if (count($errors) > 0){
		echo '<div class="error">';
			foreach ($errors as $error){
				echo $error .'<br>';
			}
		echo '</div>';
	}
}

//Nuk lejon te qasesh direkt ne website nese e shkruan emrin e webfaqes ne link nese nuk je logged in
function isLoggedIn()
{
	if (isset($_SESSION['user']))
		return true;
	else
		return false;
}
