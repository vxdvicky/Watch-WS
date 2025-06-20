<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "timezion";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = $_POST['loginEmail'];
$pass = $_POST['loginPassword'];

// Get user from DB
$sql = "SELECT * FROM user WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    if (password_verify($pass, $row['password'])) {
        echo "<script>alert('Login successful!'); window.location.href='signup.php';</script>";
    } else {
        echo "<script>alert('Incorrect password!'); window.location.href='index.php';</script>";
    }
} else {
    echo "<script>alert('Email not registered!'); window.location.href='index.php';</script>";
}

$conn->close();
?>
