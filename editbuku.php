<?php
    include_once("./connect.php");

    $id = $_GET["id"];

    $query_get_data = mysqli_query($db, "SELECT * FROM buku WHERE id=$id");
    $buku = mysqli_fetch_assoc($query_get_data);

    if (isset ($_POST["submit"])) {
        $judul = $_POST["Judul"];
        $penulis = $_POST["Penulis"];
        $isbn = $_POST["ISBN"];
        $unit = $_POST["Unit"];

        $query = mysqli_query($db, "UPDATE buku SET Judul='$judul',
        Penulis='$penulis', ISBN='$isbn', Unit=$unit WHERE id=$id");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM EDIT BUKU</title>
</head>
<body>
    <h1>FORM EDIT DATA BUKU</h1>
    <form action="" method="POST">
        <label for="Judul">Judul Buku : </label>
        <input value="<?php echo $buku['Judul'] ?>" type="text" id="Judul" name="Judul">
        <br><br>
        <label for="Penulis">Penulis : </label>
        <input value="<?php echo $buku['Penulis'] ?>" type="text" id="Penulis" name="Penulis">
        <br><br>
        <label for="ISBN">ISBN : </label>
        <input value="<?php echo $buku['ISBN'] ?>" type="text" id="ISBN" name="ISBN">
        <br><br>
        <label for="Unit">Unit : </label>
        <input value="<?php echo $buku['Unit'] ?>" type="number" id="Unit" name="Unit">
        <br><br>
        <button type="submit" name="submit">SUBMIT</button>
    </form>
    <br>
    <a href="./buku.php">Kembali ke Halaman Daftar Buku</a>
</body>
</html>