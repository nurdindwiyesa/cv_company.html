<?php
session_start();

// Simulasi database pengguna (gunakan database nyata dalam aplikasi nyata)
$users = [];

// Logika pendaftaran
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Validasi password
    if ($password !== $confirm_password) {
        echo "<script>alert('Kata sandi tidak cocok.'); window.location.href='register.php';</script>";
        exit();
    }

    // Simpan pengguna (di sini kita hanya menambahkannya ke array)
    // Dalam aplikasi nyata, simpan ke database
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $users[$username] = $hashed_password; // Simulasi penyimpanan

    // Simpan informasi pengguna dalam sesi dan alihkan ke halaman selamat datang
    $_SESSION['user'] = $username;
    header("Location: welcome.php");
    exit();
}
?>
