<!DOCTYPE html>
<html>

<head>
  <title>Login Page</title>
  <link rel="stylesheet" href="login.css">
</head>

<body>
  <div class="container">
    <h1>Signin</h1>

    <form action="/login" method="post">
      <input type="text" class="form-control" placeholder="Username" name="username" id="username">
      <input type="password" class="form-control" placeholder="Password" name="password" id="password">
      <button type="submit" class="btn" >Login</button>
      <a href="/forgot-password">Forgot Password?</a>
      <a href="login_signup.php"> Register me</a>

    </form>

  </div>

  <?php
  $servername = "localhost";
  $username = "username";
  $password = "password";
  $database = "children_game";
  $email = "email";

  // Create a connection
  $conn = new mysqli($servername, $username, $password, $database, $email);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";

  // Perform database operations here
  
  // Close the connection
  $conn->close();
  ?>

</body>

</html>