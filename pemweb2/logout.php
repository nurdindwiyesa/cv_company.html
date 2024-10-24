<?php
session_start();
session_destroy(); // Hapus sesi
header("Location: index.php"); // Alihkan ke halaman login
exit();
?>
