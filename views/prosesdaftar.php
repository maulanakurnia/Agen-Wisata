<?php 
    $konek = mysqli_connect('localhost','root','root','db_AgenWisata');
    
    $nama      = $_POST['nama']; 
    $email     = $_POST['email'];
    $no        = $_POST['no_telp'];
    $password  = $_POST['password'];
    $passwordK = $_POST['passwordK'];
    $pw        = md5($password);

    if($password != $passwordK){
        header('location: ../daftar?pesan=SandiTidakSama');
    } else {
        $insert   = mysqli_query($konek,"INSERT INTO user VALUES(DEFAULT,'$nama','$email','$pw','$no','2','default.png',NOW(),NOW())") or die(mysqli_error($konek));
    }


    if($insert){
        header('Location: index.php?pesan=berhasil');
    } else
    {
        header('location : daftar.php');
    }