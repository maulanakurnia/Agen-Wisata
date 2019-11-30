<?php 
    $title  = "Ubah User";
    require_once __DIR__.'../../_partials/head.php';
    $id_ubah     = $_GET['id_user'];
    $ubah        = query("SELECT * FROM user WHERE id = '$id_ubah'");
?>

<div class="content-wrapper" style="min-height: 1200.88px;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="../">Beranda</a></li>
                        <li class="breadcrumb-item"><a href="../user">User</a></li>
                        <li class="breadcrumb-item active"><?= $title; ?></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title"><?= $title; ?></h3>
                        </div>
                        <form method="POST" action="aksi/update" enctype="multipart/form-data"> 
                            <div class="card-body">
                                <div class="row justify-content-center">
                                    <div class="text-center mb-3">
                                        <img id="myImg" src="<?= $as , $ubah[0]['gambar']?>" alt="Profil" width=300 class="img-fluid img-circle" style="border: 3px solid #adb5bd;">
                                    </div>
                                </div>
        
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="gambar" id="gambar">
                                            <label class="custom-file-label" >Pilih Gambar</label>
                                        </div>
                                    </div>
                                </div>
       
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" value="<?= $ubah[0]['nama'] ?>" class="form-control" placeholder="Masukkan nama anda" name="nama">
                                    <input type="hidden" value="<?= $ubah[0]['id'] ?>" name="id">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" value="<?= $ubah[0]['email'] ?>" class="form-control" placeholder="Masukkan email anda" name="email">
                                </div>
                                <div class="form-group">
                                    <label>Nomor Ponsel</label>
                                    <input type="number" value="<?= $ubah[0]['no_telp'] ?>" class="form-control" placeholder="Masukkan Nomor ponsel anda" name="ponsel">
                                </div>
                                <small class="text-danger"><i>Abaikan Form password jika anda tidak ingin merubah password!</i></small>
                                <div class="form-group">
                                    <label>Kata Sandi</label>
                                    <input type="password" class="form-control" placeholder="Masukkan Kata sandi" name="sandi">
                                </div>
                                <div class="form-group">
                                    <label>Kata Sandi Baru</label>
                                    <input type="password" class="form-control" placeholder="Masukkan Konfirmasi Kata sandi" name="sandiB">
                                </div>
                                <div class="form-group">
                                    <label>Konfirmasi Kata Sandi</label>
                                    <input type="password" class="form-control" placeholder="Masukkan Konfirmasi Kata sandi" name="sandiBK">
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-block">Ubah</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
  </div>

<?php 
   require_once __DIR__."../../_partials/foot.php";
?>