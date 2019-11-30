<?php 
	session_start();
	require "../app/koneksi.php";
    $konek = mysqli_connect('localhost','root','root','db_AgenWisata');
    
    $email    = $_POST['email'];
    $pw       = $_POST['password'];
    $pw       = md5($pw);

    $user     = mysqli_query($konek,"SELECT * FROM user WHERE email='$email' AND password='$pw'") or die(mysqli_error($konek));

	$cek	= mysqli_num_rows($user);
    $cek2 	= mysqli_fetch_array($user);

	if($cek2>0){
		$_SESSION['email']	= $email;
		$_SESSION['id']   	= $cek2['id'];
		$_SESSION['role'] 	= $cek2['id_role'];
		$_SESSION['nama'] 	= $cek2['nama'];
		$_SESSION['gambar'] = $cek2['gambar'];
		$_SESSION['status']	= "login";
		header("location: http://localhost/agen_wisata/views/");
	}
	else{
		header("location: http://localhost/agen_wisata/views/?pesan=gagal");
	}
