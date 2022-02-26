<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "toucantech";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
// receive all input values from the form
$name = mysqli_real_escape_string($db, $_POST['name']);
$email = mysqli_real_escape_string($db, $_POST['email']);
// $school = mysqli_real_escape_string($db, $_POST['school']);

$sql = "INSERT INTO users (email, name)
VALUES ($name, $email)";
}

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>