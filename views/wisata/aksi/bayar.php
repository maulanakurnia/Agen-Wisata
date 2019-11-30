<?php 
    session_start();
    require_once __DIR__.'/../../../app/koneksi.php';
    $id_psn     = $_POST['id_psn'];
    $id_ws      = $_POST['id_ws'];
    $metode     = $_POST['pembayaran'];

    if(empty($metode)){
        header("location: ../../?id_pemesanan=$id_psn&id_wisata=$id_ws");
    }
    $pesan      = mysqli_query($konek,"UPDATE pemesanan SET metode_pembayaran = '$metode', status_wisata = 'LUNAS' WHERE id_pemesanan = '$id_psn'");

    if($pesan){
        header("location: ../../?pesan=berhasilbayar");
    }



