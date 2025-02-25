<?php 
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman To Do List</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>

    <section class="row">
        <div class="col-md-6 offset-md-3 align-self-center">
            <h1 class="text-center mt-4">Tambah To do list</h1>
            <form method="POST">
                <div class="mb-3">
                    <label for="namatugas" class="form-label">Nama Tugas</label>
                    <input type="text" class="form-control" id="namatugas" name="namatugas" placeholder="namatugas" required>
                </div>

                <div class="mb-3">
                    <label for="prioritas" class="form-label">prioritas</label>
                    <select name="prioritas" class="form-control" required>
                        <option value="">Pilih Prioritas</option>
                        <option value="rendah">rendah</option>
                        <option value="sedang">sedang</option>
                        <option value="tinggi">tinggi</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="tanggal" class="form-label">tanggal</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal" value=" <?= $data ['tanggal'] ?>" required>
                </div>

                <div class="mb-3">
                    <label for="status" class="form-label">status</label>
                    <select name="status" class="form-control" required>
                        <option value="">Pilih status</option>
                        <option value="selesai">selesai</option>
                        <option value="belum selesai">belum selesai</option>
                    </select>
                </div>

                <button type="submit" name="tambah" class="btn btn-primary">Tambah</button>
                <a href="index.php" class="btn btn-info text-white">Kembali</a>
            </form>
        </div>
    </section>

    <?php 
    if (isset($_POST['tambah'])) {
        $namatugas = mysqli_real_escape_string($koneksi, $_POST['namatugas']);
        $prioritas = mysqli_real_escape_string($koneksi, $_POST['prioritas']);
        $tanggal = mysqli_real_escape_string($koneksi, $_POST['tanggal']);
        $status = mysqli_real_escape_string($koneksi, $_POST['status']);

        $query = "INSERT INTO todo_list (namatugas, prioritas, tanggal, status) values ('$namatugas', '$prioritas', '$tanggal', '$status')";
        $result = mysqli_query($koneksi, $query);

        if ($result) {
            echo "<script>alert('Data berhasil di tambahkan!'); window.location= 'index.php';</script>";
            exit();
        } else {
            echo "error: ". mysqli_error($koneksi);
        }
    }
    ?>
</body>
</html>
