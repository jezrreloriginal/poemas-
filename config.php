<?php
$dbHost = 'Localhost';
$dbname = 'forms';
$dbUsername = ' root';
$dbpassword = '';

$conexao = new mysqli($dbHost,$dbname,$dbUsername,$dbpassword);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);
?>
?>

