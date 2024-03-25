<?php
if (isset($_POST['submit'])) {
    include 'dbConnection.php';
    $namabarang = $_POST['NamaBarang'];
    $hargahpp = $_POST['HargaHpp'];
    $hargaretail = $_POST['HargaRetail'];
    $hargadistributor = $_POST['HargaDistributor'];


    $extensi_allowed = array('png', 'jpg');
    $namagambar = $_FILES['gambar']['name'];
    $x = explode('.', $namagambar);
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['gambar']['tmp_name'];

    if (in_array($ekstensi, $extensi_allowed) === true) {
        move_uploaded_file($file_tmp, 'Asset/uploads/' . $namagambar);
        $query = "INSERT INTO tb_produk SET Nama_Barang='$namabarang', Harga_HPP='$hargahpp', Harga_Retail='$hargaretail', Harga_Distributor='$hargadistributor', Gambar='$namagambar'";
        $create = mysqli_query($db_connection, $query);

        if ($create) {
            echo "<script> alert('Data sukses disimpan !'); </script>";
        } else {
            echo "<script> alert('Data gagal disimpan !'); </script>";
        }
    } else {
        echo "<script> alert('Extensi tidak diperbolehkan !'); </script>";
    }



} ?>

<script>
    window.location.replace("Home.php");
</script>