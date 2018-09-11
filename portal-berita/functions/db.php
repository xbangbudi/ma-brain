<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$db = 'dbportal_berita';

$koneksi = mysqli_connect($hostname, $username, $password, $db) or die(mysqli_error());
?>