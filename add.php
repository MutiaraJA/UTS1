<?php
    include 'connect.php';
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
    <a href="index.php">Kembali</a>
    <form action="add.php" method="post">
        <label for = "nama">Nama</label>
        <input type="text" id="nama" name="nama" class="form-control" required> <br>

        <label for = "nik">NIK</label>
        <input type="text" id="nik" name="nik" class="form-control" required> <br>

        <label for = "email">Email</label>
        <input type="text" id="email" name="email" class="form-control" required> <br>

        <label for = "telepon">Telepon</label>
        <input type="text" id="telepon" name="telepon" class="form-control" required> <br>

        <label for = "alamat">Alamat</label>
        <input type="text" id="alamat" name="alamat" class="form-control" required> <br>
  
        <input class="btn btn-success mt-3" type="submit" name="tambah" value="Submit">

    </form>
 </div>

 <?php

    if(isset($_POST['tambah'])) {
    $nama = $_POST['nama'];
    $nik = $_POST['nik'];
    $email = $_POST['email'];
    $telepon = $_POST['telepon'];
    $alamat = $_POST['alamat'];
    
    

    $sqlInsert = "INSERT INTO donatur (nama, nik, email, telepon, alamat) VALUES ('$nama', '$nik', '$email', '$telepon', '$alamat')";

    mysqli_query($conn, $sqlInsert);

    header("location: index.php");

    }
 ?>

</body>
</html> 