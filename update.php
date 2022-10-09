<?php
    include 'connect.php';

    $nik = $_GET['nik'];
    var_dump($nik);
    $sqlGet = "SELECT * FROM `donatur` WHERE nik='$nik'";
    $queryGet = mysqli_query($conn, $sqlGet);
    $data = mysqli_fetch_array($queryGet);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title> Digihelp </title>
</head>
<body>
 <div class="w-50 mx-auto border p-3 mt-5">
    <a href="index.php">Back</a>
    <form action="update.php" method="post">
        <label for = "nama">Nama</label>
        <input type="text" id="nama" name="nama" value = "<?php echo "$data[nama]";  ?>" class="form-control" required> <br>

        <label for = "nik">NIK</label>
        <input type="text" id="nik" name="nik" value = "<?php echo "$data[nik]";  ?>" class="form-control" required> <br>

        <label for = "email">Email</label>
        <input type="text" id="email" name="email" value = "<?php echo "$data[email]";  ?>" class="form-control" required> <br>

        <label for = "telepon">Telepon</label>
        <input type="text" id="telepon" name="telepon" value = "<?php echo "$data[telepon]";  ?>" class="form-control" required> <br>

        <label for = "alamat">Alamat</label>
        <input type="text" id="alamat" name="alamat" value = "<?php echo "$data[alamat]";  ?>" class="form-control" required> <br>
  
        <input class="btn btn-success mt-3" type="submit" name="tambah" value="Submit">

    </form>
 </div>

 <?php

    if(isset($_POST['tambah'])) {
    $nama = $_POST['nama_admin'];
    $email = $_POST['email'];
    $telepon = $_POST['no_telp'];
    $alamat = $_POST['alamat'];

    $sqlUpdate = "UPDATE donatur SET nama='$nama', nik='$nik', email='$email', telepon='$telepon', alamat='$alamat' WHERE nik='$nik'";

    $queryUpdate = mysqli_query($conn, $sqlUpdate);

    header("location: index.php");
    }
 ?>

</body>
</html> 