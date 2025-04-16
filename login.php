<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login - Disire</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="login-wrapper">
    <div class="login-panel">
      <img src="logo.png" alt="Desire logo">
      <h1>Inloggen</h1>
      <form method="POST" action="login.php">
        <input type="email" name="email" placeholder="E-mailadres" required>
        <input type="password" name="password" placeholder="Wachtwoord" required>
        <button type="submit">Login</button>
      </form>
      <p>Nog geen account? <a href="register.php">Registreer</a></p>
    </div>
  </div>
</body>

</html>
