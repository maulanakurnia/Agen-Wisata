<?php 
    require_once __DIR__.'../../../../../app/koneksi.php';
    $id     = $_GET['id'];

    $query = mysqli_query($konek,"SELECT * FROM detail_wisata WHERE id_wisata = '$id'");
    $wisata = mysqli_fetch_array($query);
        if(is_file("../../../../vendor/img/wisata/".$wisata['gambar_wisata'])) 
	    unlink("../../../../vendor/img/wisata/".$wisata['gambar_wisata']);

    $delete = mysqli_query($konek,"DELETE FROM detail_wisata WHERE id_wisata = '$id'");

    if($delete){
        ?>
        <?php
        header("location: ../?pesan=berhasil_dihapus");
    }else{
        header("location: ../?pesan=gagal_dihapus");
    }
