<?php
session_start();

$user_valid = "mutiara";
$pass_valid = "110506";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $pass = $_POST['pass'];

    // Cek apakah cocok
    if ($nama === $user_valid && $pass === $pass_valid) {
        $_SESSION['nama'] = $nama;
        header("Location: folder/muti.php");
        exit();
    } else {
        header("Location: failed.php");
        exit();
    }
}
?>