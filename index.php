<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TO DO LIST</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    <section class="row">
        <div class="col-md-6 offset-md-3 align-self-center">
            <h1 class="text-center mt-4"> TO DO LIST</h1>
            <a href="tambah.php" class="btn btn-primary mb-2">Tambah Tugas</a>
            <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Tugas</th>
                            <th scope="col">Prioritas</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">status</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                </tbody>

                <?php
                $no = 1;
                $query = "SELECT * FROM todo_list";
                $result = mysqli_query($koneksi, $query);

                foreach ($result as $data) {
                    echo "
                    <tr>
                        <th scope='row'> ". $no++ ."</th>
                        <td>". $data["namatugas"] . "</td>
                        <td>". $data["prioritas"] . "</td>
                        <td>". $data["tanggal"] . "</td>
                        <td>". $data["status"] . "</td>
                        <td>
                        <a href='update.php?id=".$data["id"]."' type='button' class='btn btn-success'>Update</a>
                        <a href='delete.php?id=".$data["id"]."' class='btn btn-danger' onclick='return confirm(\"Yakin Hapus?\")'>Hapus</a>
                        </td>
                    </tr>";
                }
            ?>
            </tbody>
        </table>
    </div>
</section>
</body>
</html>