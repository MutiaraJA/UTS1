<?php
    include 'connect.php';

    $nik = $_GET['nik'];
    $sqlDelete = "DELETE FROM donatur WHERE nik='$nik'";
    mysqli_query($conn, $sqlDelete);

    header("location: index.php");


?>