<?php 
    require_once __DIR__.'../../../../../app/koneksi.php';

    $id             = $_POST['id'];
    $nama           = $_POST['nama'];
    $email          = $_POST['email'];
    $ponsel         = $_POST['ponsel'];
    $sandi          = $_POST['sandi'];
    $sandiB         = $_POST['sandiB'];
    $sandiBK        = $_POST['sandiBK'];
    $md5            = md5($sandi); 
    $PBmd5          = md5($sandiB);
    $query          = query("SELECT * FROM user WHERE id = '$id'");
    $validasi       = $query[0]['password'];
    $foto 	        = $_FILES['gambar']['name'];
	$tmp 		    = $_FILES['gambar']['tmp_name'];
	$fotobaru       = date('dmYHis').$foto;
    $path           = "../../../../vendor/img/user/".$fotobaru;

    if(empty($sandi) || empty($sandiB)){ // kondisi jika user tidak merubah password
        if(empty($foto)){ // jika user tidak merubah foto
            $update = mysqli_query($konek,"UPDATE user SET nama = '$nama', email = '$email', no_telp = '$ponsel', date_updated = NOW() WHERE id = '$id'");
                if($update) { header("location: ../?pesan=berhasil"); }
                    else { header("location:../?pesan=gagal"); }
        } else { //jika user merubah foto
            if(move_uploaded_file($tmp, $path)){ //jika foto berhasil di pindah
                $query = mysqli_query($konek,"SELECT * FROM user WHERE id = '$id'");
                $user  = mysqli_fetch_array($query);
                    if(is_file("../../../../vendor/img/user/".$user['gambar'])) { // jika didalam folder ada foto lama maka 
                        unlink("../../../../vendor/img/user/".$user['gambar']); // hapus foto tersebut
                    }
                $update = mysqli_query($konek,"UPDATE user SET nama = '$nama', email='$email', no_telp = '$ponsel', gambar = '$fotobaru', date_updated = NOW() WHERE id = '$id'");
                    if($update){ header("location: ../?pesan=berhasil"); }
                        else{ header("location: ../?pesan=gagalupdate"); }
            }else{ //jika foto tidak berhasil di pindah
                header("location: ../?pesan=gagalupload");
            }
        }
    } else { //Jika user merubah password
        if ($md5 != $validasi){ header("location: ../ubah?validation=SandiSalah"); } 
        else if($sandiB != $sandiBK){ header("location: ../ubah?validation=SandiTidakSama"); }
            else { 
                if(empty($foto)){
                    $insert = mysqli_query($konek,"UPDATE user SET nama = '$nama', email='$email', password = '$PBmd5', no_telp = '$ponsel', date_updated = NOW() WHERE id = '$id'");
                    if($insert){header("location: ../?pesan=berhasil"); }
                        else{ header("location: ../?pesan=gagalinsert"); }
                } else {
                    if(move_uploaded_file($tmp, $path)){ 
                        $query = mysqli_query($konek,"SELECT * FROM user WHERE id = '$id'");
                        $user = mysqli_fetch_array($query);
                            if(is_file("../../../../vendor/img/user/".$user['gambar'])) 
                            unlink("../../../../vendor/img/user/".$user['gambar']);
                        $insert = mysqli_query($konek,"UPDATE user SET nama = '$nama', email='$email', password = '$PBmd5', no_telp = '$ponsel', gambar = '$fotobaru' , date_updated = NOW() WHERE id = '$id'");
                        if($insert){ 
                            header("location: ../?pesan=berhasil");
                        }else{
                            header("location: ../?pesan=gagalinsert");
                        }
                    }else{
                        header("location: ../?pesan=gagalupload");
                    }
                }
            }
    }







