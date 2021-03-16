<?php
$servername = "localhost";
$username = "20mca003";
$password = "2273";
$dbname = "20mca003";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO `mark1`(`NAME`, `MARK`) VALUES ('Abhishek','45')";
if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>


