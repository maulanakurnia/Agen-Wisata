<?php 
    session_start();
    if($_SESSION['role'] != '1'){
        header('location: ../');
    }
    $pesan  = $_GET['pesan'];  
    $gw     = "http://localhost/agen_wisata/vendor/img/wisata/";
    $as     = "http://localhost/agen_wisata/vendor/img/user/";  
    $url    = "http://localhost/agen_wisata/views/admin/";
    $web    = "http://localhost/agen_wisata/views/";
    require_once __DIR__.'/../../../app/koneksi.php';
    $id     = $_SESSION['id'];
    $gambar = query("SELECT * FROM user WHERE id = '$id'");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $title ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?= $url ?>assets/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="<?= $url ?>assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="<?= $url ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="<?= $url ?>assets/sweetalert2/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="<?= $url ?>assets/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="<?= $url ?>assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="<?= $url ?>assets/plugins/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="<?= $url ?>assets/plugins/summernote/summernote-bs4.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <script src="<?= $url ?>assets/plugins/jquery/jquery.min.js"></script>
    <?php if($pesan == 'berhasil_dihapus'){ ?>
    <script>
      $(window).on('load', function(){
        swal.fire("Berhasil","Data Berhasil Dihapus!", "success");
      });
    </script>
    <?php } else if($pesan == 'gagal_dihapus'){ ?>
    <script>
      $(window).on('load', function(){
        Swal.fire('Oops...', 'Data Gagal dihapus!',"error")
      });
    </script>
    <?php } else if($pesan == 'berhasil_ditambahkan'){ ?>
    <script>
      $(window).on('load', function(){
        Swal.fire('Berhasil', 'Data Berhasil ditambahkan!',"success")
      });
    </script>
    <?php } ?>
    <script type="text/javascript">
    $(document).ready(function() {
        $('.delete').click(function(e){
            e.preventDefault();
            var href = $(this).attr('href');
            Swal.fire({
            icon  : "question",
            title : 'Yakin Ingin Menghapus data ini?',
            text  : "data yang telah dihapus tidak dapat pulih kembali",
            confirmButtonColor: '#d9534f',
            showCancelButton: true,
                }).then((result) => {
                        if (result.value) {
                        window.location.href = href;
                        Swal.fire(
                          'Dihapus!',
                          'User <?= $user['nama']?> telah dihapus',
                          'success'
                        );
                    }
            })
        });

    });
    </script> 
</head>
<body class="sidebar-mini layout-fixed layout-navbar-fixed">
<div class="wrapper">

    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
            </li>
        </ul>

        <ul class="navbar-nav ml-auto">
            <li class="nav-item d-none d-sm-inline-block">
                <a href="<?= $web ?>" class="nav-link text-dark" target="_blank"><i class="fas fa-globe-europe"></i> Lihat Website</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link text-danger keluar" title="Keluar"><i class="fas fa-power-off"></i></a>
            </li>
        </ul>
    </nav>


    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <a class="brand-link text-white d-block">
            <img src="<?= $as , $gambar[0]['gambar'] ?>" alt="Profil" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text"><?= $_SESSION['nama']?></span>
        </a>
        <div class="sidebar">
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column nav-legacy" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item">
                        <?php if($title == "Dasbor"){ ?>
                            <a href="<?= $url ?>" class="nav-link active">
                        <?php  } else { ?>
                            <a href="<?= $url ?>" class="nav-link">
                        <?php } ?>
                        <i class="fas fa-home"></i>
                            <p>Dasbor</p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <?php if($title == "Tambah User" || $title == "Data User" || $title == "Ubah User"){ ?>
                            <a href="#" class="nav-link active">
                        <?php  } else { ?>
                            <a href="#" class="nav-link">
                        <?php } ?>
                            <i class="nav-icon fas fa-users"></i>
                            <p>User <i class="fas fa-angle-left right"></i></p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                            <?php if($title == "Data User"){ ?>
                                <a href="<?= $url ?>user" class="nav-link active">
                            <?php  } else { ?>
                                <a href="<?= $url ?>user" class="nav-link">
                            <?php } ?>
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Data User</p>
                                </a>
                            </li>
                            <li class="nav-item">
                            <?php if($title == "Tambah User"){ ?>
                                <a href="<?= $url ?>user/tambah" class="nav-link active">
                            <?php  } else { ?>
                                <a href="<?= $url ?>user/tambah" class="nav-link">
                            <?php } ?>
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Tambah User</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <?php if($title == "Tambah Wisata" || $title == "Data Wisata" || $title == "Ubah Wisata"){ ?>
                            <a href="#" class="nav-link active">
                        <?php  } else { ?>
                            <a href="#" class="nav-link">
                        <?php } ?>
                            <i class="fas fa-route"></i> 
                            <p>Wisata <i class="right fas fa-angle-left"></i></p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                            <?php if($title == "Data Wisata"){ ?>
                                <a href="<?= $url ?>wisata" class="nav-link active">
                            <?php  } else { ?>
                                <a href="<?= $url ?>wisata" class="nav-link">
                            <?php } ?>
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Data Wisata</p>
                                </a>
                            </li>
                            <li class="nav-item">
                            <?php if($title == "Tambah Wisata"){ ?>
                                <a href="<?= $url ?>wisata/tambah" class="nav-link active">
                            <?php  } else { ?>
                                <a href="<?= $url ?>wisata/tambah" class="nav-link">
                            <?php } ?>
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Tambah Wisata</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <?php if($title == "Data Pemesan"){ ?>
                            <a href="<?= $url ?>wisata/pemesan" class="nav-link active">
                        <?php  } else { ?>
                            <a href="<?= $url ?>wisata/pemesan" class="nav-link">
                        <?php } ?>
                        <i class="fas fa-bookmark"></i>
                            <p>Pemesan</p>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>