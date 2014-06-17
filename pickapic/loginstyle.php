<!DOCTYPE html>
 <html lang="en">
<head>
  <meta charset="utf-8">
  <title>Log Me In!</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <form method="post" action="login.php" class="login">
    <p>
      <label for="email">Email:</label>
      <input type="email" name="email" id="email" value="name@example.com">
    </p>

    <p>
      <label for="pass">Password:</label>
      <input type="password" name="password" id="password" value="4815162342">
    </p>

    <p class="login-submit">
      <button type="submit" name="login" class="classname">Login</button>
    </p>
  </form>


</body>
</html>
<?php
?>