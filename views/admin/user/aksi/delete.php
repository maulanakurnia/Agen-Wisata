<?php 
    require_once __DIR__.'../../../../../app/koneksi.php';
    $id     = $_GET['id'];

    $query = mysqli_query($konek,"SELECT * FROM user WHERE id = '$id'");
    $user = mysqli_fetch_array($query);
        if(is_file("../../../../vendor/img/user/".$user['gambar'])) 
	    unlink("../../../../vendor/img/user/".$user['gambar']);

    $delete = mysqli_query($konek,"DELETE FROM user WHERE id = '$id'");

    if($delete){
        header("location: ../?pesan=userberhasildihapus");
    }else{
        header("location: ../?pesan=usergagaldihapus");
    }
