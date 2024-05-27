<?php
    include_once("./connect.php");

    $query = mysqli_query($db,"SELECT * FROM staff");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAFTAR STAFF</title>
</head>
<body>
    <h1>DAFTAR STAFF</h1>

    <table border="1">
        <tr>
            <td>Nama Staff</td>
            <td>No. Telepon</td>
            <td>Email</td>
            <td>Action</td>
        </tr>

        <?php foreach($query as $staff){ ?>
            <tr>
                <td><?php echo $staff["Nama"] ?></td>
                <td><?php echo $staff["Telp"] ?></td>
                <td><?php echo $staff["Email"] ?></td>
                <td>
                    <a href=<?php echo "editstaff.php?id=" . $staff["ID"] ?>>EDIT |</a>
                    <a href=<?php echo "deletestaff.php?id=" . $staff["ID"] ?>> HAPUS</a>
                </td>
            </tr>
        <?php } ?>

    </table>

    <br>
    <a href="./insertstaff.php">Tambahkan Data Staff</a>
    <br>
    <a href="./index.php">Halaman Utama</a>

</body>
</html>