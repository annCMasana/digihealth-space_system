<?php
// Connect to MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sample_db";
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Get user input from registration form
$username = $_POST['username'];
$password = $_POST['password'];
$hashed_password = password_hash($password, PASSWORD_DEFAULT);
$user_type = $_POST['user_type'];


// Validate user input
if (empty($username) || empty($password) || empty($user_type)) {
  die("Please fill in all fields");
}

// Check if username already exists
$sql = "SELECT * FROM users WHERE username='$username'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  die("Username already exists");
}

// Insert user data into database
$sql = "INSERT INTO users (username, password, hashed_password, user_type) VALUES ('$username', '$password', '$hashed_password', '$user_type')";
if (mysqli_query($conn, $sql)) {
  echo "Registration successful";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>