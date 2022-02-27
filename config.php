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

$name = mysqli_real_escape_string($conn, $_POST['name']);
$school = mysqli_real_escape_string($conn,$_POST['mySchool']);
$email = mysqli_real_escape_string($conn,$_POST['email']);

$sql = "INSERT INTO users (email, Name) VALUES ('$email', '$name')";
// check if user alreadly exist
$select = mysqli_query($conn, "SELECT * FROM users WHERE email = '".$_POST['email']."'");
if(mysqli_num_rows($select)) {
    exit("echo(<script>This email already exists;</script>);");
     

}

$sql2 = "INSERT INTO school (name, email, school) VALUES ('$name', '$email', '$school')";




if (mysqli_query($conn, $sql)) {
   echo "<script>  alert('New user created successfully'); </script>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
if (mysqli_query($conn, $sql2)) {
   echo "<script>  alert('New school created successfully'); </script>";
} else {
  echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
}

 echo("<script>window.location = 'index.php';</script>");
mysqli_close($conn);


?>