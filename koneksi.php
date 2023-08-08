<?php
// Koneksi ke database (ganti sesuai dengan kredensial Anda)
$servername = "sql306.infinityfree.com";
$username = "if0_34778698";
$password = "brnR6FpdbWy7i";
$dbname = "if0_34778698_digitalent";

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
