<?php
// dashboard.php
session_start();
if (!isset($_SESSION["user_id"]) || $_SESSION["role"] != "beheerder") {
  header("Location: login.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <title>Dashboard - disire</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <img src="logo.png" alt="disire logo">
    <a href="logout.php" style="float:right; margin:1rem;">Uitloggen</a>
  </header>
  <div class="container">
    <h1>Welkom bij je dashboard!</h1>
    <p>Hier kun je producten toevoegen (nog toe te voegen functie).</p>
  </div>
</body>
</html>
