<?php
	require "header.php";
?>

<div class="container">
	<main>
		<div class="signup">
			<section>
				<h1>Signup</h1>
				<?php 
					if (isset($_GET['error'])) {
						if ($_GET['error'] == "emptyfields") {
							echo '<p>Fill in all fields!</p>';
						}
						else if ($_GET['error'] == "invaliduidmail") { 
							echo '<p>Invalid username and e-mail!</p>';
						}
						else if ($_GET['error'] == "invaliduid") { 
							echo '<p>Invalid username!</p>';
						}
						else if ($_GET['error'] == "invalidmail") { 
							echo '<p>Invalid e-mail!</p>';
						}
						else if ($_GET['error'] == "passwordcheck") { 
							echo '<p>Your passwords do not match!</p>';
						}
						else if ($_GET['error'] == "usertaken") { 
							echo '<p>Username is already taken!</p>';
						}
						else if ($_GET['error'] == "success") {
							echo '<p>Signup successful!</p>';
						}
					}
					
				?>
				<form action="includes/signup.inc.php" method="post">
				 <input type="text" name="uid" placeholder="Username">
				 <input type="text" name="mail" placeholder="E-mail">
				 <input type="password" name="pwd" placeholder="Password">
				 <input type="password" name="pwd-repeat" placeholder="Repeat Password">
				 <button type="submit" name="signup-submit">Signup</button>
				</form>
			</section>
		</div>
	</main>
</div>

<?php
	require "footer.php";
?>