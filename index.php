<?php
include 'functions.php';

// Proses tambah data jika form disubmit
if (isset($_POST['tambah'])) {
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $nim = $_POST['nim'];
    $jurusan = $_POST['jurusan'];
    tambahMahasiswa($nama, $jenis_kelamin, $nim, $jurusan);
    header("Location: index.php");
}

// Proses hapus data
if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    hapusMahasiswa($id);
    header("Location: index.php");
}

// Ambil data mahasiswa dari database
$dataMahasiswa = getDataMahasiswa();
?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Data Mahasiswa</title>
</head>

<body>
    <div class="container mt-5">
        <h2>Data Mahasiswa</h2>
        <a href="tambah.php" class="btn btn-primary mb-3">Tambah Mahasiswa</a>
        <?php if ($dataMahasiswa != null) {

        ?>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>NIM</th>
                        <th>Jurusan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($dataMahasiswa as $mahasiswa) : ?>

                        <tr>

                            <td><?php echo $mahasiswa['id']; ?></td>
                            <td><?php echo $mahasiswa['nama']; ?></td>
                            <td><?php echo ($mahasiswa['jenis_kelamin'] == 'P') ? 'Pria' : 'Wanita'; ?></td>
                            <td><?php echo $mahasiswa['nim']; ?></td>
                            <td><?php echo $mahasiswa['jurusan']; ?></td>
                            <td>
                                <a href="edit.php?id=<?php echo $mahasiswa['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
                                <a href="index.php?hapus=<?php echo $mahasiswa['id']; ?>" class="btn btn-sm btn-danger">Hapus</a>
                            </td>
                        </tr>

                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php } ?>
    </div>
</body>

</html>