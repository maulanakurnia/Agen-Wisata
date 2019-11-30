<?php 
    require_once __DIR__.'../../../../../app/koneksi.php';

    $id         = $_POST['id'];
    $nama       = $_POST['nama'];
    $lokasi     = $_POST['lokasi'];
    $deskripsi  = $_POST['deskripsi'];
    $rating     = $_POST['rating'];
    $harga      = $_POST['harga'];
    $foto 	    = $_FILES['gambar']['name'];
	$tmp 		= $_FILES['gambar']['tmp_name'];
	$fotobaru   = date('dmYHis').$foto;
    $path       = "../../../../vendor/img/wisata/".$fotobaru;

    if(empty($foto)){
        $update         = mysqli_query($konek, "UPDATE detail_wisata SET id_wisata = '$id', nama_wisata = '$nama', lokasi_wisata = '$lokasi', deskripsi_wisata = '$deskripsi', rating_wisata = '$rating', harga_wisata = '$harga' WHERE id_wisata = '$id' ");
        if($update){
            header("location: ../?pesan=berhasilupdatecuy");
        }else {
            header("location: ../?pesan=gagalupdate");
        }
    }else{
        if(move_uploaded_file($tmp, $path)){ 
            $query   = mysqli_query($konek,"SELECT * FROM detail_wisata WHERE id_wisata = '$id'");
            $wisata  = mysqli_fetch_array($query);
                if(is_file("../../../../vendor/img/wisata/".$wisata['gambar_wisata'])) { 
                    unlink("../../../../vendor/img/wisata/".$wisata['gambar_wisata']); 
                }
            $update         = mysqli_query($konek, "UPDATE detail_wisata SET id_wisata = '$id', nama_wisata = '$nama', lokasi_wisata = '$lokasi', deskripsi_wisata = '$deskripsi', rating_wisata = '$rating', harga_wisata = '$harga', gambar_wisata = '$fotobaru' WHERE id_wisata = '$id'");
            if($update){ 
                header("location: ../?pesan=berhasil");
            }else{
                header("location: ../?pesan=gagalupdate");
            }
        }else{
            header("location: ../?pesan=gagalupload");
        }
    }


    
?>







