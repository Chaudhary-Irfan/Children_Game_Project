<?php
// Database configuration
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'childrengame';

// Connect to the database
$conn = mysqli_connect($hostname, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Login form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Query the database for the user
    $sql = "SELECT * FROM user_info WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);

    if ($result) { // Check if query executed successfully
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            $hashedPassword = $row["password"];

            // Verify the password
            if (password_verify($password, $hashedPassword)) {
                // Authentication successful
                echo "Login successful!";
            } else {
                // Invalid password
                echo "Invalid username or password";
            }
        } else {
            // Invalid username
            echo "Invalid username or password";
        }
    } else {
        // Query execution error
        echo "Error: " . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="main.css">
    <title>Login</title>
</head>

<body>

    <header>
        <nav>
            <ul>
                <li><a href="main.php">Home</a></li>
                <li>
                    <div class="dropdown">
                        <button class="dropdown-item">Categories</button>
                        <div class="dropdown-content">
                            <select name="" id="">
                                <option value=""><a href="#">Easy</a></option>
                                <option value=""><a href="#">Normal</a></option>
                                <option value=""><a href="#">Difficult</a></option>
                            </select>
                        </div>
                    </div>
                </li>
                <li><a href="#">About Us</a></li>
                <li><a href="login.php" target="--">Log In</a></li>
                <li><a href="register.php" target="--">Register</a></li>
            </ul>
        </nav>
    </header>

    <section>


        <div class="form-box">
            <div class="form-value">
                <form action="#" method="POST">
                    <h2>Sign In</h2>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="test" id="username" name="username" required>
                        <label for="">Username</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" id="password" name="password" required>
                        <label for="">Password</label>
                    </div>
                    <div class="forget">
                        <label for=""><input type="checkbox">Remember Me <a href="#">Forget Password</a></label>

                    </div>
                    <button>Log in</button>
                    <div class="register">
                        <p>Don't have a account <a href="#">Register</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <!-- Footer -->
    <footer>
        &copy; 2023 Your Company. All rights reserved.
    </footer>

    
</body>

</html>