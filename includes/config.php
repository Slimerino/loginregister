<?php
ob_start();
session_start();

//set timezone
date_default_timezone_set('Europe/London');

//database credentials
$servername = "localhost (usally)";
$username = "(username)";
$password = "(database password)";
$dbname = "(database username)";

$DIR = "http://domain.com/";
$SITEMAIL = "noreply@domain.com";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//include the user class, pass in the database connection
include('classes/user.php');
include('classes/phpmailer/mail.php');
$user = new User($db);
?>
