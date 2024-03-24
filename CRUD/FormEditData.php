<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        <?php include 'Asset/css/style.css'; ?>
    </style>
    <title>Gudang</title>
</head>

<body class="background-color">
    <section class="container">
        <div class="d-flex justify-content-between align-items-baseline">
            <h1 class="mt-5">EDIT DATA</h1>
            <button class="btn btn-primary"><a href="Home.php"
                    class="text-decoration-none text-white">Kembali</a></button>
        </div>
        <div>
            <?php
            include 'dbConnection.php';
            $query = "SELECT * FROM tb_produk WHERE Kd_Barang='$_GET[id]'";
            $edit = mysqli_query($db_connection, $query);
            $data = mysqli_fetch_assoc($edit);
            ?>
            <form class="mt-5" method="post" action="UpdateData.php" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="Namabarang" class="form-label">Nama barang</label>
                    <input type="text" class="form-control" name="NamaBarang" value="<?= $data['Nama_Barang'] ?>"
                        required>
                </div>
                <div class="mb-3">
                    <label for="HargaHpp" class="form-label">Harga HPP</label>
                    <input type="number" class="form-control" name="HargaHpp" value="<?= $data['Harga_HPP'] ?>"
                        required>
                </div>
                <div class="mb-3">
                    <label for="HargaRetail" class="form-label">Harga Retail</label>
                    <input type="number" class="form-control" name="HargaRetail" value="<?= $data['Harga_Retail'] ?>"
                        required>
                </div>
                <div class="mb-3">
                    <label for="HargaDistributor" class="form-label">Harga Distributor</label>
                    <input type="number" class="form-control" name="HargaDistributor"
                        value="<?= $data['Harga_Distributor'] ?>" required>
                </div>
                <div class="mb-3">
                    <img src="Asset/uploads/<?= $data['Gambar'] ?>" alt="" srcset=""
                        class="rounded mx-auto d-block object-fit-cover" style="width: 200px; height:200px;">
                    <input class="form-control mt-4" type="file" id="formFile" name="gambar_baru" required>
                </div>
                <input type="hidden" name="id_barang" value="<?= $data['Kd_Barang'] ?>">
                <input type="hidden" name="gambar" value="<?= $data['Gambar'] ?>">
                <button type="submit" class="btn btn-primary" name="submit" value="upload">Submit</button>
            </form>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
        
</body>

</html>