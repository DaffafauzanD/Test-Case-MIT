<?php
session_start();
if (isset($_POST['login'])) {
    include 'dbConnection.php';

    $query = "SELECT * FROM login WHERE Username='$_POST[username]'";
    $login = mysqli_query($db_connection, $query);

    if (mysqli_num_rows($login) > 0) {
        $user = mysqli_fetch_assoc($login);
        if ($_POST['password'] === $user['Password']) {
            $_SESSION['login'] = true;
            $_SESSION['id'] = $user['id'];
            $_SESSION['username'] = $user['Username'];
            $_SESSION['password'] = $user['Password'];
            echo "<script>window.location.replace('Home.php');</script>";
        }
    } else {
        echo "<script>alert('Akun tidak ditemukan !');window.location.replace('Home.php');</script>";
    }
}
?>