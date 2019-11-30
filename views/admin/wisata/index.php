<?php 
    $title  = "Data Wisata";
    require_once __DIR__.'../../_partials/head.php';
    $wisata = query("SELECT * FROM detail_wisata");
?>

<div class="content-wrapper" style="min-height: 1071.31px;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="../">Beranda</a></li>
                        <li class="breadcrumb-item active"><?= $title; ?></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-2">
                                    <a href="tambah" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Tambah Wisata</a>
                                </div>
                                <div class="col-10">
                                    <input type="text" id="keyword" placeholder="cari wisata..." autocomplete="off" class="form-control form-control-sm">
                                </div>
                            </div>
                        </div>
                        <div class="card-body table-responsive p-0" id="formcari">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Lokasi</th>
                                        <th>Deskripsi</th>
                                        <th>Rating</th>
                                        <th>Harga</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $i = 1; foreach($wisata as $ws) : ?> 
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td width="10%"><?= $ws['nama_wisata']; ?></td>
                                        <td width="8%"><?= substr($ws['lokasi_wisata'], 0, 20). ' ...'?></td>
                                        <td align="justify"><?= substr($ws['deskripsi_wisata'], 0, 450). ' ...'?></td>
                                        <td><?= $ws['rating_wisata']; ?></td>
                                        <td><?= number_format($ws['harga_wisata'], 0, '', '.'); ?></td>
                                        <td width="10%">
                                            <a class="badge badge-warning" href="ubah?id=<?= $ws['id_wisata']?>">Edit</a>
                                            <a class="badge badge-danger delete"  href="aksi/delete?id=<?= $ws['id_wisata']?>">hapus</a>
                                        </td>
                                    </tr>
                                <?php $i++; endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  </div>

<?php 
   require_once __DIR__."../../_partials/foot.php";
?>