<?php
$host = "sql107.epizy.com";
$dbname = "epiz_33274937_huyn";
$username = "epiz_33274937";
$password = "Fk04iccbQvh3";
	
$conn = mysqli_connect($host, $username, $password, $dbname);

if(mysqli_connect_errno()){
	die("Connection error: ". mysqli_connect_error());
}

?>