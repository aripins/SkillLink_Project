<?php
$servername = "localhost";
$username = "root";  
$password = "";    
$dbname = "skilllink_db";

// Make a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek connectoon
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
