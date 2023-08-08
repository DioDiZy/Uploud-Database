<?php
include 'functions.php';

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $nim = $_POST['nim'];
    $jurusan = $_POST['jurusan'];
    updateMahasiswa($id, $nama, $jenis_kelamin,  $nim, $jurusan);
    header("Location: index.php");
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $mahasiswa = getMahasiswaByID($id);
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Edit Mahasiswa</title>
</head>

<body>
    <div class="container mt-5">
        <h2>Edit Mahasiswa</h2>
        <form method="POST" action="edit.php">
            <div class="form-group">
                <label>ID</label>
                <input type="text" readonly class="form-control" name="id" value="<?php echo $mahasiswa['id']; ?>">
            </div>
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" value="<?php echo $mahasiswa['nama']; ?>" required>
            </div>
            <div class="form-group">
                <label>NIM</label>
                <input type="text" name="nim" class="form-control" value="<?php echo $mahasiswa['nim']; ?>" required>
            </div>
            <div class="form-group">
                <label>Jurusan</label>
                <input type="text" name="jurusan" class="form-control" value="<?php echo $mahasiswa['jurusan']; ?>" required>
            </div>
            <div class="form-group mt-3 mb-3">
                <label for="jk">Jenis Kelamin</label>
                <div class="form-group">

                    <div class="form-check form-check-inline ">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="P" <?php echo ($mahasiswa['jenis_kelamin'] == 'P') ? 'checked' : ''; ?>>
                        <label class="form-check-label" for="jenis_kelamin1">
                            Pria
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="W" <?php echo ($mahasiswa['jenis_kelamin'] == 'W') ? 'checked' : ''; ?>>
                        <label class="form-check-label" for="jenis_kelamin2">
                            Wanita
                        </label>
                    </div>
                </div>
            </div>
            <button type="submit" name="update" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>

</html>