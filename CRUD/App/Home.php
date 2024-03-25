<?php
session_start();
if (!isset($_SESSION['login'])) {
    echo "<script>window.location.replace('Login.php');</script>";
}
?>
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
            <h1 class="mt-5">GUDANG</h1>
            <button class="btn btn-primary"><a href="FormData.php" class="text-decoration-none text-white">Tambah
                    data</a></button>
            <button class="btn btn-primary"><a href="Logout.php"
                    class="text-decoration-none text-white">Logout</a></button>
        </div>
        <div class="table-responsive">
            <table class="table mt-3">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Harga HPP</th>
                        <th scope="col">Harga Retail</th>
                        <th scope="col">Harga Distributor</th>
                        <th scope="col">Gambar</th>
                        <th colspan="2" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'dbConnection.php';
                    $query = 'SELECT * FROM tb_produk';
                    $pets = mysqli_query($db_connection, $query);

                    $i = 1;
                    foreach ($pets as $data): ?>
                        <tr>
                            <td>
                                <?php echo $i++; ?>
                            </td>
                            <td>
                                <?php echo $data["Nama_Barang"] ?>
                            </td>
                            <td>
                                <?php echo $data["Harga_HPP"] ?>
                            </td>
                            <td>
                                <?php echo $data["Harga_Retail"] ?>
                            </td>
                            <td>
                                <?php echo $data["Harga_Distributor"] ?>
                            </td>
                            <td>
                                <img src="Asset/uploads/<?php echo $data["Gambar"] ?>" alt="" srcset="" class="img">
                            </td>
                            <td class="text-center">
                                <a href="FormEditData.php?id=<?= $data["Kd_Barang"]; ?>">Edit</a>
                            </td>
                            <td class="text-center"><a onclick="return confirm('are you sure?')"
                                    href="DeleteData.php?id=<?= $data["Kd_Barang"]; ?>&gambar=<?= $data['Gambar'] ?>">Delete</a>
                            </td>
                        </tr>

                    <?php endforeach;
                    ?>
                </tbody>
            </table>
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