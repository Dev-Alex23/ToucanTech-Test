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
// echo "Connected successfully";


$name = $_POST['name'];
$school = $_POST['mySchool'];
$email = $_POST['email'];

$sql = "INSERT INTO users (email, Name) VALUES ('$email', '$name')";
$sql2 = "INSERT INTO school (name, email, school) VALUES ('$name', '$email', '$school')";


// check if user alreadly exist
// $select = mysqli_query($conn, "SELECT * FROM users WHERE email = '".$_POST['email']."'");
// if(mysqli_num_rows($select)) {
//   header('Location: index.php');
//     exit('This email already exists');
// }

// $sql3  = "SELECT * FROM users WHERE email='$email' LIMIT 1";
// if(mysqli_query($conn, $sql3)) {
//   echo "<script>  alert('Email alreadly Exist'); </script>";
// } else {
//   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }

if (mysqli_query($conn, $sql) && mysqli_query($conn, $sql2)) {
   echo "<script>  alert('New record created successfully'); </script>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

 echo("<script>window.location = 'index.php';</script>");
mysqli_close($conn);


?>