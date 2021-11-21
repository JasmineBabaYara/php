<?php
//importing config.php
require('../config/config.php');

//if statement to post data into the database
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmp = $_POST['confirmp'];

    //using sql query to get data from the database
    if ($password == $confirmp) {
        $sql =  "INSERT INTO signup ( username, email, password) VALUES ('$username', '$email', '$password')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            header('location:./login.php');
        } else {
            header('location:./signup.php');
        }
    } else {
        header('location:./signup.php');
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/signup.css" rel="stylesheet">
    <title>sign up</title>
</head>

<body>
    <div class="container">
        <form action="" method="POST">
            <h1 class="title">Sign up</h1>
            <div class="user-div">
                <input type="text" class="user-input" placeholder="username" name="username" required>
            </div>
            <div class="email-div">
                <input type="text" class="email-input" placeholder="email" name="email" required>
            </div>
            <div class="pass-div">
                <input type="password" class="pass-input" placeholder="password" name="password" required>
            </div>
            <div class="confirmpass-div">
                <input type="password" class="confirmpass-input" placeholder="confirm password" name="confirmp" required>
            </div>
            <button type="submit" class="signup-btn" name="submit">
                signup
            </button>
            <p class="end-text">
                Have an account?
                <a href="./login.php">Login here</a>
            </p>
        </form>
    </div>
</body>

</html>