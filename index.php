<?php
    session_start();

    if(!isset($_SESSION['email'])){
        header("Location: login.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Perpustakaan</title>
</head>
<body>
    <h1>APLIKASI PERPUSTAKAAN</h1>
    <ul>
        <li><a href="./buku.php">Daftar Buku</a></li>
        <br>
        <li><a href="./staff.php">Daftar Staff</a></li>
    </ul>

    <form action="logout_proccess.php" method="POST">
        <button type="submit">LOGOUT</button>
    </form>
</body>
</html>