<?php
	session_start();
	$base_url	= "http://localhost/Agen-Wisata/views/";
	$url		= "http://localhost/Agen-Wisata/";
	require_once __DIR__.'/../../app/koneksi.php';
	$id_ses		= isset($_SESSION['id']);
	$user		= query("SELECT * FROM user WHERE id = '$id_ses'");
	$jmlh		= count(query("SELECT * FROM pemesanan WHERE id_user = '$id_ses'"));
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $title;?></title>
    <link href="<?= $url;?>vendor/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= $url;?>vendor/css/style.css" rel="stylesheet">
	<link href="<?= $url;?>vendor/css/animate.min.css" rel="stylesheet">
    <link href="<?= $url;?>vendor/css/custom.css" rel="stylesheet">
	<!-- <link href="<?= $url;?>vendor/iziToast/css/iziToast.min.css"></link>
	<script src="<?= $url ?>vendor/js/iziToast.min.js"></script> -->
	<script href="<?= $url;?>vendor/js/modernizr_slider.js"></script>
	<!-- <script src="<?= $url ?>vendor/js/jquery-2.2.4.min.js"></script>
    <script>
		$(window).on('load', function(){
			iziToast.show({
				title: 'Hey',
				message: 'What would you like to add?'
			});

		});
    </script> -->
</head>
<body>
	<div id="page">	
		<header class="header"> <?php if(isset($_SESSION['role']) == '2'){ ?>
			<ul id="top_menu">
				<li><a href="<?= $base_url ?>wisata/keranjang" class="cart-menu-btn mx-auto" title="Pesanan"><?php if($jmlh != NULL){?><strong><?= $jmlh ?></strong><?php } ?></a></li>
			</ul>
			<?php } ?>
			<nav id="menu" class="main-menu"><ul><li><span><a href="<?= $base_url?>">Beranda</a></span></li><li><span><a href="<?= $base_url ?>wisata">Wisata</a></span></li>
					<?php if (isset($_SESSION['email'])) { if($_SESSION['role'] == '1'){ ?>
							<li class="mr-4"><span><a href=""><?= $user[0]['nama']?></a></span><ul><li><a href="<?= $base_url ?>admin/">Dasbor</a></li><li><a href="<?= $base_url?>logout">Logout</a></li></ul></li>
					<?php } else{ ?>
							<li class="mr-4"><span><a href=""><?= $user[0]['nama']?></a></span>
								<ul> <li><a href="<?= $base_url?>profil">Profil</a></li><li><a href="<?= $base_url?>ubah_profil">Ubah Profil</a></li> <li><a href="<?= $base_url?>logout">Logout</a></li></ul> </li>
					<?php }}else { ?>
							<li><a href="#sign-in-dialog" id="sign-in" class="btn btn-primary btn-sm mx-auto login" title="Sign In">Masuk</a></li>
					<?php } ?>
				</ul>
			</nav>
		</header>
		<main style="postition:relative; z-index:2;">