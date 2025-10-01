<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>My Movie List</title>
<link href="css/stylesheet.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div class="container">
	<header>
		<a href="index.php">
		<h4 class="logo">M.M.L.</h4>
			</a>
	  	<nav>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="makemovielist.php">My Movie Lists</a></li>
				<li><a href="browsemovielists.php">Browse Movie Lists</a></li>
				<li><a href="aboutus.php">About Us</a></li>
			</ul>
	  	</nav>
	   	
			<?php 
				$error = $_GET['error'] ?? ''; //Check the url for a parameter by the name of error, if none then set $error to empty
				$errorMessage = '';
				if ($error == "emptyfields") {
					$errorMessage = "Login Failed: Make sure no fields are empty!";
				}
				else if ($error == "nouser") {
					$errorMessage = "Login Failed: User doesn't exist!";
				}
				else if ($error == "wrongpwd") {
					$errorMessage = "Login Failed: Login details are incorrect!";
				}

				$login = $_GET['login'] ?? ''; //Check the url for a parameter by the name of login, if none then set $login to empty
				$loginMessage = '';
				if ($login == "success") {
					$loginMessage = "Login Successful!";
				}

				if (isset($_SESSION['userId'])) {
						echo '<form class="login" action="includes/logout.inc.php" method="post">
					<button type="submit" id="logout" name="logout-submit">Logout</button> <span id="success">' . $loginMessage . '</span>
				</form>';
					}
				else {
					echo '<form class="login2" action="includes/login.inc.php" method="post">
					<input id="inputun" type="text" name="mailuid" placeholder="Username/E-mail...">
					<input id="inputpwd" type="password" name="pwd" placeholder="Password...">
					<button type="submit" name="login-submit">Login</button>
				</form>
				<a id="signups" href="signup.php">Signup</a>' . '<span id="error">' . $errorMessage . '</span>';
				}
			?>		
			
			
		</div>
	</header>
