<?
    include "koneksi.php";
    $query = "DELETE FROM todo_list WHERE id = $id";
    $result = mysqli_query($koneksi, $query);
    if ($result) {
        header("Location: index.php");
        exit();
    } else {
        echo "error deleting record: ". mysqli_error($koneksi);
    }
?>
