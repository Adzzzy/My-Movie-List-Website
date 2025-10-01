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
		$sql = "INSERT INTO movielist (nameList, authorList, dateList, moviesList) VALUES (?, ?, ?, ?);";

		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)) {
			header("Location: ../makemovielist.php?error=sqlerror");
			exit();
		}
		else {
			
			mysqli_stmt_bind_param($stmt, "ssss", $list_name, $list_author, $list_date, $list_movies);
			mysqli_stmt_execute($stmt);
			header("Location: ../makemovielist.php?error=success");
			exit();
					
		}
		
	}
	else {
		header("Location: ../makemovielist.php");
		exit();
	}
}