<?php
    include_once("./connect.php");

    $id = $_GET["id"];

    $query_get_data = mysqli_query($db, "SELECT * FROM staff WHERE id=$id");
    $staff = mysqli_fetch_assoc($query_get_data);

    if (isset ($_POST["submit"])) {
        $nama = $_POST["Nama"];
        $telp = $_POST["Telp"];
        $email = $_POST["Email"];

        $query = mysqli_query($db, "UPDATE staff SET Nama='$nama',
        Telp='$telp', Email='$email' WHERE id=$id");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM EDIT STAFF</title>
</head>
<body>
    <h1>FORM EDIT DATA STAFF</h1>
    <form action="" method="POST">
        <label for="Nama">Nama Staff : </label>
        <input value="<?php echo $staff['Nama'] ?>" type="text" id="Nama" name="Nama">
        <br><br>
        <label for="Telp">No. Telepon : </label>
        <input value="<?php echo $staff['Telp'] ?>" type="text" id="Telp" name="Telp">
        <br><br>
        <label for="Email">Email : </label>
        <input value="<?php echo $staff['Email'] ?>" type="email" id="Email" name="Email">
        <br><br>
        <button type="submit" name="submit">SUBMIT</button>
    </form>
    <br>
    <a href="./staff.php">Kembali ke Halaman Daftar Staff</a>
</body>
</html>