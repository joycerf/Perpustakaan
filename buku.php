<?php
    include_once("./connect.php");

    $query = mysqli_query($db,"SELECT * FROM buku");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAFTAR BUKU</title>
</head>
<body>
    <h1>DAFTAR BUKU</h1>

    <table border="1">
        <tr>
            <td>Judul Buku</td>
            <td>Penulis</td>
            <td>ISBN</td>
            <td>Unit</td>
            <td>ACTION</td>
        </tr>

        <?php foreach($query as $buku){ ?>
            <tr>
                <td><?php echo $buku["Judul"] ?></td>
                <td><?php echo $buku["Penulis"] ?></td>
                <td><?php echo $buku["ISBN"] ?></td>
                <td><?php echo $buku["Unit"] ?></td>
                <td>
                    <a href=<?php echo "editbuku.php?id=" . $buku["ID"] ?>>EDIT |</a>
                    <a href=<?php echo "deletebuku.php?id=" . $buku["ID"] ?>> HAPUS</a>
                </td>
            </tr>
        <?php } ?>

    </table>
    <br>
    <a href="./insertbuku.php">Tambahkan Data Buku</a>
    <br>
    <a href="./index.php">Halaman Utama</a>
    
</body>
</html>