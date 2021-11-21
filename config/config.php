<?php
//db config
//variable declaration and assiging
$hostname = "localhost";
$username = "root";
$password = "";
$database = "login_signup";

//connecting to the database
$conn = mysqli_connect($hostname, $username, $password, $database);

//if statement for unsuccessful connection
if (!$conn) {
    echo "<script>alert('Connection failed')</script>";
}
