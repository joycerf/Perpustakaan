<?php
    include_once("./connect.php");

    if (isset ($_POST["submit"])) {
        $nama = $_POST["Nama"];
        $telp = $_POST["Telp"];
        $email = $_POST["Email"];

        $query = mysqli_query($db, "INSERT INTO staff VALUES(
            NULL, '$nama', '$telp', '$email'
        )");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM TAMBAH STAFF</title>
</head>
<body>
    <h1>FORM TAMBAH DATA STAFF</h1>
    <form action="" method="POST">
        <label for="Nama">Nama Staff : </label>
        <input type="text" id="Nama" name="Nama">
        <br><br>
        <label for="Telp">No. Telepon : </label>
        <input type="text" id="Telp" name="Telp">
        <br><br>
        <label for="Email">Email : </label>
        <input type="email" id="Email" name="Email">
        <br><br>
        <button type="submit" name="submit">SUBMIT</button>
    </form>
    <br>
    <a href="./staff.php">Kembali ke Halaman Daftar Staff</a>
</body>
</html>