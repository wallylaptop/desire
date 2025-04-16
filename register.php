<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Registreer - disire</title>
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <img src="logo.png" alt="disire logo">
  </header>

  <div class="register-container">
    <h2>Registreer</h2>
    <form action="register-action.php" method="post">
      <input type="email" name="email" placeholder="Email" required>
      <input type="password" name="password" placeholder="Wachtwoord" required>
      <button type="submit">Registreren</button>
    </form>
  </div>

  <footer>
    &copy; 2025 disire. Alle rechten voorbehouden.
  </footer>
</body>
</html>
