<?php
if (isset($_POST['submit'])) {
    include 'dbConnection.php';

    $folder = 'Asset/uploads/';
    $file_tmp = $_FILES['gambar_baru']['tmp_name'];
    $namagambar = $_FILES['gambar_baru']['name'];


    if (unlink($folder . $_POST['gambar'])) {
        if (move_uploaded_file($file_tmp, $folder . $namagambar)) {
            $query = "UPDATE tb_produk SET 
        Nama_Barang = '$_POST[NamaBarang]',
        Harga_HPP = '$_POST[HargaHpp]', 
        Harga_Retail = '$_POST[HargaRetail]',
        Harga_Distributor = '$_POST[HargaDistributor]', 
        Gambar = '$namagambar' 
        WHERE Kd_Barang = '$_POST[id_barang]';
        ";
            $update = mysqli_query($db_connection, $query);
            if ($update) {
                echo "<script> alert('Data sukses disimpan !'); </script>";
            } else {
                echo "<script> alert('Data gagal disimpan !'); </script>";
            }
        } else {
            echo "<script> alert('Error gambar gagal disimpan !'); </script>";
        }

    } else {
        echo "<script> alert('Gambar yang dituju tidak ada!'); </script>";
    }
}

?>
<script>
    window.location.replace("Home.php");
</script>