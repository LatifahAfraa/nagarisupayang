<?php
$base_url = "http://localhost/nagarisupayang/admin";
date_default_timezone_set('Asia/Jakarta');
$server = "localhost";
$user = "root";
$password = "";
$database = "nagarisupayang";

$kon = new mysqli($server, $user, $password, $database) or die (mysqli_connect_error());

?>
