<?php 
    require_once __DIR__.'../../../../../app/koneksi.php';

    $nama       = $_POST['nama'];
    $email      = $_POST['email'];
    $sandi      = $_POST['sandi'];
    $sandi2     = $_POST['sandi2'];
    $ponsel     = $_POST['ponsel'];
    $foto 	    = $_FILES['gambar']['name'];
	$tmp 		= $_FILES['gambar']['tmp_name'];
    $md5        = md5($sandi); 
	$fotobaru   = date('dmYHis').$foto;
    $path       = "../../../../vendor/img/user/".$fotobaru;

    if ($sandi != $sandi2){
        header("location: ../?validation=SandiTidakSama");
    } else {
        if(move_uploaded_file($tmp, $path)){ 
            $insert = mysqli_query($konek,"INSERT INTO user VALUES(DEFAULT, '$nama','$email','$md5','$posel','2','$fotobaru',NOW(),NOW())");
            if($insert){ 
                header("location: ../?pesan=berhasil_ditambahkan");
            }else{
                header("location: ../?pesan=gagalinsert");
            }
        }else{
            header("location: ../?pesan=gagalupload");
        }
    }




