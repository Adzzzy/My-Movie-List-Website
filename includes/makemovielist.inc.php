<?php
session_start();
include 'dbh.inc.php';

if (isset($_SESSION['userId'])) {
	
	$list_name = $_POST['listname'];
	$list_author = $_SESSION['userUid'];
	date_default_timezone_set('Australia/Adelaide');
	$list_date = date('Y/m/d');
	$list_movies = $_POST['movies_list'];
	
	if (isset($_POST['submit'])) {
		$sql = "INSERT INTO movielist (nameList, authorList, dateList, moviesList) VALUES ('$list_name', '$list_author', '$list_date', '$list_movies');";
		
		if (mysqli_query($conn, $sql)) {
			header("Location: ../makemovielist.php?error=success");	
			exit();
		}
		
	}
		else {
		header("Location: ../makemovielist.php");
		exit();
		}
}