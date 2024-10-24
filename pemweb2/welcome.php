<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: index.php"); // Alihkan jika belum login
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container text-center mt-5">
        <h1>Selamat Datang, <?php echo $_SESSION['user']; ?>!</h1>
        <a href="logout.php" class="btn btn-danger">Keluar</a>
        <p class="lead">Kami senang Anda bergabung.</p>
        <a href="index.php" class="btn btn-primary">Kembali ke Beranda</a>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
