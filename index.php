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
    <div class="container mt-3">
    <a href="add.php" class="btn btn-primary btn-md mb-3">Add</a>

    <table class = "table table-striped table-hover table-bordered mt-5">
        <thead class="table-dark">
            <th>Nama</th>
            <th>NIK</th>
            <th>Email</th>
            <th>Telepon</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </thead>

        <?php
            $sqlGet = "SELECT * FROM `donatur`";
            $query = mysqli_query($conn, $sqlGet);

            while($data = mysqli_fetch_array($query)) {
               echo "
                <tbody>
                <tr>
                    <td>$data[nama]</td>
                    <td>$data[nik]</td>
                    <td>$data[email]</td>
                    <td>$data[telepon]</td>
                    <td>$data[alamat]</td>
                    <td>
                        <div class ='row'>
                        <div class ='col d-flex justify-content-center'>
                            <a href='update.php?nama=$data[nik]'' class='btn btn-sm btn-warning'>Update</a>
                        </div>
                        <div class='col d-flex justify-content-center'>
                            <a href='delete.php?nama=$data[nik]' class='btn btn-sm btn-danger'>Delete</a>
                        </div>
                    </td>
                </tr>
                </tbody>
               ";
            }
        ?>

    </table>
    </div>
</body>
</html> 