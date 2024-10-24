<?php
session_start();

// Simulasi data pengguna (ganti ini dengan data dari database)
$users = [
    "user@example.com" => '$2y$10$examplehashedpassword', // Ganti dengan hashed password yang benar
];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validasi kredensial
    if (array_key_exists($username, $users) && password_verify($password, $users[$username])) {
        $_SESSION['user'] = $username; // Simpan informasi pengguna dalam session
        header("Location: welcome.php"); // Alihkan ke halaman selamat datang
        exit();
    } else {
        echo "<script>alert('Username atau kata sandi salah.'); window.location.href='index.php';</script>";
    }
}
?>
