<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "studentDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//Pang update sa current data
$sql = "UPDATE Profile SET firstname='Nibba', lastname='awew', email='121212' WHERE id='1'";

if (mysqli_query($conn, $sql)) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>