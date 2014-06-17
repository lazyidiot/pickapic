<!DOCTYPE html>
 <html lang="en">
<head>
  <meta charset="utf-8">
  <title>Register</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<form action="register.php" method="POST" class="login">
<p>
      <label for="username">Name"</label>
      <input type="text" name="username" id="username" value="name">
    </p>
<p>
      <label for="email">Email:</label>
      <input type="email" name="email" id="email" value="name@example.com">
    </p>

    <p>
      <label for="password">Password:</label>
      <input type="password" name="password" id="password" value="4815162342">
    </p>
<p>
      <label for="password1">Password:</label>
      <input type="password" name="password1" id="password1" value="4815162342">
    </p>

    <p class="login-submit">
      <button type="submit" name="submit" class="classname" value="Submit">Register</button>
    </p>
  </form>


</body>
</html>
<?php
?>


