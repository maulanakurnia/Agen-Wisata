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
		$insert     = mysqli_query($konek, "INSERT INTO detail_wisata VALUES('$id','$nama','$lokasi','$deskripsi','0','$rating','$harga')");
		if($insert){ 
			header("location: ../?pesan=berhasil_ditambahkan");
		}else{
			header("location: ../?pesan=gagalinsert");
		}
	}else {
		if(move_uploaded_file($tmp, $path)){ 
			$insert     = mysqli_query($konek, "INSERT INTO detail_wisata VALUES('$id','$nama','$lokasi','$deskripsi','$fotobaru','$rating','$harga')");
			if($insert){ 
				header("location: ../?pesan=berhasil_ditambahkan");
			}else{
				header("location: ../?pesan=gagalinsert");
			}
		}else{
			header("location: ../?pesan=gagalupload");
		}
	}
    
?>







