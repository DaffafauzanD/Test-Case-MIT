<?php

if (isset($_GET['id'], $_GET['gambar'])) {
    include 'dbConnection.php';
    $folder = 'Asset/uploads/';

    if (unlink($folder . $_GET['gambar'])) {
        $query = "DELETE FROM tb_produk WHERE Kd_Barang = '$_GET[id]'";
        $delete = mysqli_query($db_connection, $query);
        if ($delete) {
            echo "<script> alert('Data sukses dihapus !'); </script>";
        } else {
            echo "<script> alert('Data gagal disimpan !'); </script>";
        }
    } else {
        echo "<script> alert('Gambar yang dituju tidak ada !'); </script>";
    }



} else {
    echo "<script> alert('Tidak terpenuhi !'); </script>";
}
?>
<script>
    window.location.replace("Home.php");
</script>