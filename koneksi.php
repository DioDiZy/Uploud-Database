<?php
// Koneksi ke database (ganti sesuai dengan kredensial Anda)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "digitalent";

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}