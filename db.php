<?php
$server = 'localhost';
$user = 'roboliga-admin';
$pass = 'pNC6C8Dpg44mAPX';
$db = 'roboliga';
$charset = 'utf8mb4';

/* $conn = mysqli_connect($server, $user, $pass, $db);
if($conn->connect_error){
  die("Connection failed: " . $conn->connect_error);
  echo "<script>console.log('Debug Object: failed ERROR: $conn')<script>";
}
mysqli_set_charset($conn, "utf8");
echo "<script>console.log('Debug Object: Database connected successfully' );</script>"; */
 
$conn = "mysql:host=$server;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
$pdo = new PDO($conn, $user, $pass, $options);
?>