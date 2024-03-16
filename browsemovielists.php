<?php
	require "header.php";
	include 'includes/dbh.inc.php';
?>

<main class="browse">
	<h1>View other peoples' lists</h1>
	<?php 		
	if (isset($_SESSION['userId'])) {
				$user = $_SESSION['userUid'];
				$sql = "SELECT * FROM movielist WHERE authorList !='$user';";
				$result = mysqli_query($conn, $sql);
				$queryResults = mysqli_num_rows($result);
				
				if ($queryResults > 0) {
					while ($row = mysqli_fetch_assoc($result)) {
						echo "<div class='d'><table>
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
	else {
				$sql = "SELECT * FROM movielist;";
				$result = mysqli_query($conn, $sql);
				$queryResults = mysqli_num_rows($result);
				
				if ($queryResults > 0) {
					while ($row = mysqli_fetch_assoc($result)) {
						echo "<table>
						<tr>
							<th>".$row['nameList']."</th>
						</tr>
						<tr>
							<th>".$row['authorList'].", ".$row['dateList']."</th>
						</tr>
						<tr>
							<td>".$row['moviesList']."</td>
						</tr>
						</table>";
					}
				}
	}
	?>
	
</main>

<?php
	require "footer.php";
?>