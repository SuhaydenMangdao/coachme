<?php
// Database connection
$host = 'localhost'; // Database host
$dbname = 'coachme'; // Database name
$user = 'postgres'; // Database username
$password = '0000'; // Database password

// Create connection
$db = pg_connect("host=$host dbname=$dbname user=$user password=$password");

// Check connection
if (!$db) {
    die("Connection failed: " . pg_last_error());
}
?>
