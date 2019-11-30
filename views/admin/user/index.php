<?php 
    $title  = "Data User";
    require_once __DIR__.'../../_partials/head.php';

    $user = query("SELECT * FROM user a,role b WHERE a.id_role = b.id_role");
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
                                    <a href="tambah" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Tambah User</a>
                                </div>
                                <div class="col-10">
                                    <input type="text" id="keyword" placeholder="cari User..." autocomplete="off" class="form-control form-control-sm">
                                </div>
                            </div>
                        </div>
                        <div class="card-body table-responsive p-0" id="formcari">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Di Buat</th>
                                        <th>Di Ubah</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $i = 1; foreach($user as $us) : ?> 
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td><?= $us['nama']; ?></td>
                                        <td><?= $us['email']; ?></td>
                                        <td><?= $us['nama_role']; ?></td>
                                        <td><?= date('d M Y ',strtotime($us['date_created']));?></td>
                                        <td><?= date('d M Y H:i:s',strtotime($us['date_updated'])); ?></td>
                                        <td>
                                            <a href="detail?id_user=<?= $us['id'] ?>" class="badge badge-success">Detail</a>
                                            <a href="ubah?id_user=<?= $us['id']?>" class="badge badge-warning text-white">Ubah</a>
                                            <a href="aksi/delete?id=<?= $us['id']?>" class="badge badge-danger delete">Hapus</a>
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