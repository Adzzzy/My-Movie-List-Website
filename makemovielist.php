
<?php
	require "header.php";
	include 'includes/dbh.inc.php';
?>

<main class="make">
	
	<?php 
		if (isset($_GET['error'])) {
			if ($_GET['error'] == "success") {
				echo '<p id="submitted"> Movie List Submitted!</p>';
			}
				 
		}
	
	?>

		<script>
			var movie =[];
			
			function addMovie(){	
				movie.push(document.getElementById("movie_input").value);
				var movieAsString = movie.join('<br/>');
				document.getElementById("movie_result").innerHTML = movieAsString;
				document.getElementById("movie_array").value = movie;
			}
		</script>
	<?php 
		if (isset($_SESSION['userId'])) {
			echo '<p id="ready">Ready to make a movie list?!</p>';
			echo '<form method="post" action="includes/makemovielist.inc.php">
				<p id="ln">List Name</p>
				<input type="text" name="listname"></input>
				<br id="movienames">
	    		<p id="mn">Movie Names</p>
				<input type="text" name="moviename" id="movie_input"></input>
				<button type="button" name="moviebutton" onclick="addMovie()">Add to List</button>
				<br id="preview">
				<div style="position: relative; bottom: 125px; float: right; width: 30%; margin-right: 10%;">
				<center>Preview</center>
				<p id="movie_result"></p>
				</div>
				<button id="submitbtn" type="submit" name="submit">Submit List</button>
				<input type="hidden" name="movies_list" id="movie_array"></input>
	 			</form> <h2>My Movie Lists</h2>';
		}
		else {
			echo '<p id="loginfirst">You are logged out! </br> Please log in first to make a movie list.</p>';
		}
	?>
	
	
	<?php 		
	if (isset($_SESSION['userId'])) {
				$user = $_SESSION['userUid'];
				$sql = "SELECT * FROM movielist WHERE authorList ='$user';";
				$result = mysqli_query($conn, $sql);
				$queryResults = mysqli_num_rows($result);
				
				if ($queryResults > 0) {
					while ($row = mysqli_fetch_assoc($result)) {
						echo "<div class='dd'> <table>
						<tr>
							<th>".$row['nameList']."</th>
						</tr>
						<tr>
							<th>".$row['authorList'].", ".$row['dateList']."</th>
						</tr>
						<tr>
							<td>".$row['moviesList']."</td>
						</tr>
						</table> </div>";
					}
				}
	}
	?>
	
</main>

<?php
	require "footer.php";
?>