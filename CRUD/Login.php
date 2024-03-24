<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>
    <title>Gudang</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        <?php include 'Asset/css/style.css'; ?>
    </style>
</head>

<body>
    <div class="heading">
        <h1 class="display-3">Gudang</h1>
    </div>
    <div class="container-sm">
        <div class="kotak_login">
            <h3 class="text-4xl py-3">Login</h3>
            <form method="post" action="Logic_login.php">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Username</label>
                    <input type="text" class="form-control" placeholder="example123" name="username">
                </div>
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <div class="input-group mb-3">
                    <input type="password" class="form-control fc" placeholder="Password" id="pass" name="password">
                    <span class="input-group-text bi bi-eye-slash show-hide" id="basic-addon1"></span>
                </div>
                <div class="kotak_submit">
                    <div>
                        <input type="submit" name="login" class="tombol_login" value="LOGIN">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="bg-gradient-to-r from-green-500" id="bg"></div>

    <script src="Asset/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>