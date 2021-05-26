<?php 
	$hostname = "localhost";
	$username = "root";
	$password = "root";
	$database = "canva";

$conn = mysqli_connect($hostname, $username, $password, $database);

if ($conn == false) {
	echo "Ошибка подключения";
}
?>