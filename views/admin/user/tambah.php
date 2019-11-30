<?php 
    $title  = "Tambah User";
    require_once __DIR__.'../../_partials/head.php';
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
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Tambah User</h3>
                        </div>
                        <form method="POST" action="aksi/insert" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" class="form-control" placeholder="Masukkan nama anda" name="nama">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" placeholder="Masukkan email anda" name="email">
                                </div>
                                <div class="form-group">
                                    <label>Nomor Ponsel</label>
                                    <input type="number" class="form-control" placeholder="Masukkan Nomor ponsel anda" name="ponsel">
                                </div>
                                <div class="form-group">
                                    <label>Kata Sandi</label>
                                    <input type="password" class="form-control" placeholder="Masukkan Kata sandi" name="sandi">
                                </div>
                                <div class="form-group">
                                    <label>Konfirmasi Kata Sandi</label>
                                    <input type="password" class="form-control" placeholder="Masukkan Konfirmasi Kata sandi" name="sandi2">
                                </div>
                                <label for="exampleInputFile" class="mt-4">Foto Profil</label>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <div class="card">
                                                <div class="card-body">
                                                    <img id="myImg" src="#" alt="your image" width=300 class="justify-content-center d-flex">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" name="gambar" id="gambar">
                                                    <label class="custom-file-label" >Pilih Gambar</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-block">Tambahkan</button>
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