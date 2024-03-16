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
				if (isset($_SESSION['userId'])) {
						echo '<form class="login" action="includes/logout.inc.php" method="post">
					<button type="submit" name="logout-submit">Logout</button>
				</form>';
					}
				else {
					echo '<form class="login2" action="includes/login.inc.php" method="post">
					<input id="inputun" type="text" name="mailuid" placeholder="Username/E-mail...">
					<input id="inputpwd" type="password" name="pwd" placeholder="Password...">
					<button type="submit" name="login-submit">Login</button>
				</form>
				<a id="signups" href="signup.php">Signup</a>';
				}
			?>		
			
			
		</div>
	</header>
