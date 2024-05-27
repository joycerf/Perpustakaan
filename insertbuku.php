<?php
    include_once("./connect.php");

    if (isset ($_POST["submit"])) {
        $judul = $_POST["Judul"];
        $penulis = $_POST["Penulis"];
        $isbn = $_POST["ISBN"];
        $unit = $_POST["Unit"];

        $query = mysqli_query($db, "INSERT INTO buku VALUES(
            NULL, '$judul', '$penulis', '$isbn', $unit
        )");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM TAMBAH BUKU</title>
</head>
<body>
    <h1>FORM TAMBAH DATA BUKU</h1>
    <form action="" method="POST">
        <label for="Judul">Judul Buku : </label>
        <input type="text" id="Judul" name="Judul">
        <br><br>
        <label for="Penulis">Penulis : </label>
        <input type="text" id="Penulis" name="Penulis">
        <br><br>
        <label for="ISBN">ISBN : </label>
        <input type="text" id="ISBN" name="ISBN">
        <br><br>
        <label for="Unit">Unit : </label>
        <input type="number" id="Unit" name="Unit">
        <br><br>
        <button type="submit" name="submit">SUBMIT</button>
    </form>
    <br>
    <a href="./buku.php">Kembali ke Halaman Daftar Buku</a>
</body>
</html>