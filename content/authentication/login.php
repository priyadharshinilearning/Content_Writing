<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "userinfo";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$uname =  $_POST['uname'];
$pwd =  $_POST['pwd'];

// OPERATIONS
$sql = "SELECT id,Email,Password FROM register WHERE Email='$uname' and Password = '$pwd'";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
  $id = $row['id'];
  $location = "../home.php?id=".$id;
  header('Location: '.$location);
} else {
  echo "Invalid Username or Password";
  header('Location: ../index.php');
}
?>