<?php

#if the database is running on the same host as the php scripts, use localhost
$servername = "db"; #if running database in separate docker container, then reference that container's name to connect to instead of localhost, as that will resolve to the dynamic ip given to the container by compose
$dBUsername = "root";
$dBPassword = "";
$dBName = "mymovielist";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
	die("Connection failed: ".mysqli_connect_error());
} 