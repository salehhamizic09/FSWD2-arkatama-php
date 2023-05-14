<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$database = "latihan_18_php";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve email and password from the form
$email = $_POST['email'];
$password = $_POST['password'];

// Perform authentication by checking email and password in the database
$sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
$result = mysqli_query($conn, $sql);

// Check if the query returned a row
if (mysqli_num_rows($result) > 0) {
    // Login successful, store the user information in session
    $_SESSION['email'] = $email;

    // Redirect to the data_pengguna.php page
    header("Location: data_pengguna.php");
    exit();
} else {
    // Login failed, redirect back to the login page with an error message
    header("Location: login.php?error=1");
    exit();
}

// Close the database connection
mysqli_close($conn);
?>
