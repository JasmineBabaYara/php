<?php
//importing config.php
require('../config/config.php');

//if statement to post data into the database
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    //using sql query to get data from the database
    $sql = "SELECT * FROM signup WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        header('location:./hello.php');
    } else {
        echo "<script>alert('Username or Password is wrong')</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/login.css" rel="stylesheet">
    <title>Login</title>
</head>

<body>
    <div class="container">
        <form action="" method="POST">
            <h1 class="title">Login</h1>
            <div class="user-div">
                <input type="text" class="user-input" placeholder="email" name="email" required>
            </div>
            <div class="pass-div">
                <input type="password" class="pass-input" placeholder="password" name="password" required>
            </div>
            <button type="submit" class="login-btn" name="submit">
                Log In
            </button>
            <p class="end-text">
                Don't have an account?
                <a href="./signup.php">Sign up here</a>
            </p>
        </form>
    </div>
</body>

</html>