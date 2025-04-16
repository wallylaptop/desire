<?php
$host = "localhost";
$user = "root";
$password = ""; // je eigen wachtwoord als je die hebt
$database = "webshop"; // zorg dat deze bestaat in phpMyAdmin

$conn = new mysqli($host, $user, $password, $database);
if ($conn->connect_error) {
  die("Connectie mislukt: " . $conn->connect_error);
}
?>
