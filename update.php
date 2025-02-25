<?php 
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update To Do List</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    <?php
    $id = $_GET['id'];
    $query = "SELECT * FROM todo_list WHERE id = $id";
    $result = mysqli_query($koneksi, $query);
    foreach($result as $data);
    ?>

    <section class="row">
        <div class="col-md-6 offset-md-3 align-self-center">
            <h1 class="text-center mt-4">Form Update To do list</h1>
            <form method="POST">
                <input type="hidden" value="<?=$data['id']?>"name="id">

                <div class="mb-3">
                    <label for="namatugas" class="form-label">Nama Tugas</label>
                    <input type="text" class="form-control" id="namatugas" name="namatugas" value="<?=$data['namatugas']?>" placeholder="Namatugas" required>
                </div>

                <div class="mb-3">
                    <label for="prioritas" class="form-label">Prioritas</label>
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
                
                <button type="submit" name="update" class="btn btn-primary">Update</button>
                <a href="index.php" class="btn btn-info text-white">Kembali</a>
            </form>
        </div>
    </section>

    <?php 
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
        $namatugas = $_POST['namatugas'];
        $prioritas = $_POST['prioritas'];
        $tanggal = $_POST['tanggal'];
        $status = $_POST['status'];
        

        // Query untuk update data
        $query = "UPDATE todo_list SET namatugas = '$namatugas', prioritas = '$prioritas', tanggal = '$tanggal', status = '$status' WHERE id = '$id'";
        $result = mysqli_query($koneksi, $query);

        if ($result) {
            header("location: index.php");
            exit();
        } else {
            echo "<script>alert('Data Gagal di Update!')</script>";
        }
    }
    ?>
</body>
</html>
