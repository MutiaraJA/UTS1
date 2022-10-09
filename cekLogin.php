<?php
if(isset($_POST['btnLogin'])){
    $username=$_POST['username'];
    $password=$_POST['password'];

    if($username=="admin"){
        var_dump($username);
        var_dump($password);
        if($password=="admin"){
            //login valid
            header('location: index.php');
        }else{
            //pw salah
            header('location:login.php?pesan=Password Salah');
        }
    }else{
        //username salah
        header('location:login.php?pesan=Username Salah');
    }
}

?>