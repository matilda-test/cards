<?php
function connect_db() {
 $servername = "localhost";
 // EDIT HERE YOUR USERNAME AND PASSWORD
 $username = "alex";
 $password = "alex";
 $dbname = "alex";
 // Create connection
 $conn = new mysqli($servername, $username, $password, $dbname);
 // Check connection
 if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
 } else {
 }
 return $conn;
}
?>

