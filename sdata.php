<?php
$servername = "localhost";
$username = "root"; // use your DB username
$password = "";     // use your DB password
$dbname = "timezion";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check for connection error
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['fullName'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$pass = password_hash($_POST['password'], PASSWORD_DEFAULT); // Secure hash
$gender = $_POST['gender'];

// Check if email already exists
$sql_check = "SELECT * FROM user WHERE email='$email'";
$result = $conn->query($sql_check);

if ($result->num_rows > 0) {
    echo "<script>alert('Email already exists! Please login.'); window.location.href='index.php';</script>";
} else {
    $sql = "INSERT INTO user (full_name, phone, email, password, gender) 
            VALUES ('$name', '$phone', '$email', '$pass', '$gender')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Signup successful! Please login now.'); window.location.href='index.php';</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>

