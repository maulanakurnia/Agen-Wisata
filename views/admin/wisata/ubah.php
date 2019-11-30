<?php 
    $title  = "Ubah Wisata";
    require_once __DIR__.'../../_partials/head.php';
    $id_ubah     = $_GET['id'];
    $ubah        = query("SELECT * FROM detail_wisata WHERE id_wisata = '$id_ubah'");
?>

<div class="content-wrapper" style="min-height: 1200.88px;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="../">Beranda</a></li>
                        <li class="breadcrumb-item"><a href="user">Wisata</a></li>
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
                            <h3 class="card-title"><?= $title; ?></h3>
                        </div>
                        <form method="POST" action="aksi/update" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>ID Wisata</label>
                                    <input type="text" class="form-control" placeholder="Masukkan ID WISATA" value="<?= $ubah[0]['id_wisata'] ?>"name="id" required>
                                </div>
                                <div class="form-group">
                                    <label>Nama Wisata</label>
                                    <input type="text" class="form-control" placeholder="Masukkan nama wisata" value="<?= $ubah[0]['nama_wisata'] ?>"name="nama">
                                </div>
                                <div class="form-group">
                                    <label>Lokasi Wisata</label>
                                    <textarea class="form-control" placeholder="Masukkan nama anda" name="lokasi"><?= $ubah[0]['lokasi_wisata'] ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Deskripsi Wisata</label>
                                    <textarea class="form-control" placeholder="Masukkan nama anda" name="deskripsi"><?= $ubah[0]['deskripsi_wisata'] ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Rating Wisata</label>
                                    <input type="text" class="form-control" placeholder="Masukkan rating wisata" value="<?= $ubah[0]['rating_wisata'] ?>"name="rating">
                                </div>
                                <label>Harga Wisata</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            IDR
                                        </span>
                                    </div>
                                    <input type="number" class="form-control" placeholder="Masukkan harga wisata" value="<?= $ubah[0]['harga_wisata'] ?>"name="harga">
                                </div>
    
                                <label for="exampleInputFile" class="mt-4">Gambar Wisata</label>
                                <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <div class="card">
                                            <div class="card-body">
                                                <img id="myImg" src="<?= $gw , $ubah[0]['gambar_wisata']?>" alt="gambar wisata" width=300 class="justify-content-center d-flex">
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