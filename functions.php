<?php
include 'koneksi.php';
// ...

// Fungsi untuk menambah data mahasiswa
function tambahMahasiswa($nama, $jenis_kelamin, $nim, $jurusan)
{
    global $conn;
    $sql = "INSERT INTO mahasiswa (nama,jenis_kelamin, nim, jurusan) VALUES ('$nama','$jenis_kelamin' , '$nim', '$jurusan')";
    $result = $conn->query($sql);
    return $result;
}

// Fungsi untuk mendapatkan data semua mahasiswa
function getDataMahasiswa()
{
    global $conn;
    $sql = "SELECT * FROM mahasiswa";
    $result = $conn->query($sql);
    return $result->fetch_all(MYSQLI_ASSOC);
}

// Fungsi untuk mendapatkan data mahasiswa berdasarkan ID
function getMahasiswaByID($id)
{
    global $conn;
    $sql = "SELECT * FROM mahasiswa WHERE id='$id'";
    $result = $conn->query($sql);
    return $result->fetch_assoc();
}

// Fungsi untuk mengupdate data mahasiswa
function updateMahasiswa($id, $nama, $jenis_kelamin, $nim, $jurusan)
{
    global $conn;
    $sql = "UPDATE mahasiswa SET nama='$nama', jenis_kelamin= '$jenis_kelamin' , nim='$nim', jurusan='$jurusan' WHERE id='$id'";
    $result = $conn->query($sql);
    return $result;
}

// Fungsi untuk menghapus data mahasiswa
function hapusMahasiswa($id)
{
    global $conn;
    $sql = "DELETE FROM mahasiswa WHERE id='$id'";
    $result = $conn->query($sql);
    return $result;
}

// ...
