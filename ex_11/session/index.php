<!DOCTYPE html>
  <html lang="pt-BR">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX 11 - Session</title>
  </head>

  <body>
    <h2>Login</h2>
    <form action="./session.php" method="post">
      <label for="user">User:</label>
      <input type="text" name="user" id="user" required><br>

      <label for="pass">Password:</label>
      <input type="password" name="pass" id="pass" required><br>

      <input type="submit" value="Entrar">
    </form>
  </body>
</html>