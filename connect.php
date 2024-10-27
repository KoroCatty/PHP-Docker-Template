<?php
// connect to DB 
// 1. host name 2. username 3. password 4. database name
$conn = mysqli_connect('db', 'root', 'root_password', 'my_database');

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
} else {
  echo "Connected successfully";
}

// Display DB table data
$sql = "SELECT * FROM php_docker_table";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while ($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["id"] . "<br>";
  }
} else {
  echo "0 results";
}
