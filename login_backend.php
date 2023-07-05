<?php
session_start();

// Connect to MySQL database
$host = "localhost";
$username = "root";
$password = "";
$db = "sample_db";
$conn = mysqli_connect($host, $username, $password, $db);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Get username and password from login form
$username = $_POST['username'];
$password = $_POST['password'];

// Check if username and password are valid
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
  // Valid credentials, set session variables
  $row = mysqli_fetch_assoc($result);
 
  $_SESSION['username'] = $username;
  $_SESSION['password'] = $password;
  $_SESSION['user_type'] = $row['user_type'];

  // Redirect to appropriate page based on user type
  switch ($_SESSION['user_type']) {
    case 'admin':
      header('Location: ./admin-priv/admin.php');
      break;
    case 'employee':
      header('Location: ./employee-priv/employee.php');
      break;
    case 'user':
      header('Location: ./user-priv/user.php');
      break;
    case 'manager':
      header('Location: ./manager-priv/manager.php');
      break;
    default:
      die('Invalid user type');
  }
} else {
  // Invalid credentials, show error message
  echo "Invalid username or password";
}

mysqli_close($conn);
?>
