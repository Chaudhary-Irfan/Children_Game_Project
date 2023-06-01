

<?php

if (isset($_POST['register'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    $hostname = 'localhost';
    $dbusername = 'root';
    $dbpassword = '';
    $database = 'childrengame';

    $conn = mysqli_connect($hostname, $dbusername, $dbpassword, $database);

    $sql = "INSERT INTO user_info (username, email, password) VALUES ('$username', '$email', '$password')";

    mysqli_query($conn, $sql);
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="main.css">
    <title>Register yourself</title>
</head>

<body>

    <header>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
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
                <li><a href="login.php" target="--">log In</a></li>
                <li><a href="register.php" target="--">Register</a></li>
            </ul>
        </nav>
    </header>

    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="#" method="POST">
                    <h2>Register</h2>
                    <div class="inputbox">
                        <ion-icon name="person-circle"></ion-icon>

                        <input type="text" name="username" id="username" required>
                        <label for="">Username</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" name="email" id="email" required>
                        <label for="">Email</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="password" id="password" required>
                        <label for="">Password</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="confirm_password" id="confirm_password" required>
                        <label for="">Confirm Password</label>
                    </div>

                    <div class="forget">
                        <label for=""><input type="checkbox">Remember Me <a href="#">Forget Password</a></label>

                    </div>
                    <button name="register" onclick="">Register</button>
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


