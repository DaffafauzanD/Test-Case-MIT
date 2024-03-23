<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Gudang</title>
</head>

<body>
    <section class="container">
        <div class="d-flex justify-content-between align-items-baseline">
            <h1 class="mt-5">TAMBAH DATA</h1>
            <button class="btn btn-primary"><a href="Home.php"
                    class="text-decoration-none text-white">Kembali</a></button>
        </div>
        <div>
            <form class="mt-5" method="post" action="CreateData.php" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="Namabarang" class="form-label">Nama barang</label>
                    <input type="text" class="form-control" name="NamaBarang">
                </div>
                <div class="mb-3">
                    <label for="HargaHpp" class="form-label">Harga HPP</label>
                    <input type="number" class="form-control" name="HargaHpp">
                </div>
                <div class="mb-3">
                    <label for="HargaRetail" class="form-label">Harga Retail</label>
                    <input type="number" class="form-control" name="HargaRetail">
                </div>
                <div class="mb-3">
                    <label for="HargaDistributor" class="form-label">Harga Distributor</label>
                    <input type="number" class="form-control" name="HargaDistributor">
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Gambar</label>
                    <input class="form-control" type="file" id="formFile" name="gambar">
                </div>
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