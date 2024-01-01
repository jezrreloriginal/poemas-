<?php
$servername = "localhost";
$database = "id21281893_formulários";
$username = "id21281893_abner";
$password = "Aa@bner0610";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);
?>
