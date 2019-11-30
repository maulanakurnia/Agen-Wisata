<?php 
    $title = 'Data Booking';
    require_once __DIR__.'../../_partials/head.php';
    $psn        = query("SELECT * FROM pemesanan");
    $id_pemesan = $psn[0]['id_pemesanan']; 
    $pemesanan  = query("SELECT * FROM pemesanan a, user b, detail_wisata c WHERE a.id_user = b.id AND a.id_wisata = c.id_wisata");
    $jmlh       = count(query("SELECT * FROM data_pemesan WHERE id_pemesanan = '$id_pemesan' "));
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
                                <div class="col">
                                    <input type="text" id="keyword" placeholder="cari wisata..." autocomplete="off" class="form-control form-control-sm">
                                </div>
                            </div>
                        </div>
                        <div class="card-body table-responsive p-0" id="formcari">
                            <table class="table table-hover">
                                <thead>
                                    <th>NO</th>
                                    <th>ID PEMESANAN</th>
                                    <th>NAMA USER</th>
                                    <th>NAMA WISATA</th>
                                    <th>BERANGKAT</th>
                                    <th>PULANG</th>
                                    <th>JUMLAH ORANG</th>
                                    <th>TOTAL BIAYA</th>
                                    <th>STATUS WISATA</th>
                                    <th>AKSI</th>
                                </thead>
                                <tbody>
                                <?php $i = 1; foreach($pemesanan as $psn) : ?> 
                                    <tr>
                                        <th><?= $i; ?></th>
                                        <td width="10%"><?= $psn['id_pemesanan']; ?></td>
                                        <td width="8%"><?= $psn['nama'] ?></td>
                                        <td><?= $psn['nama_wisata'] ?></td>
                                        <td><?= date('d M Y ',strtotime($psn['tanggal_berangkat']));?></td>
                                        <td><?= date('d M Y ',strtotime($psn['tanggal_pulang']));?></td>
                                        <td><?= $jmlh ?></td>
                                        <td><?= number_format($psn['total'], 0, '', '.') ?></td>
                                        <td><?= $psn['status_wisata'] ?></td>
                                        <td width="10%">
                                            <a class="badge badge-success" href="detail_pemesan?id=<?= $psn['id_pemesanan']?>">Detail</a>
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
    require_once __DIR__.'../../_partials/foot.php';
?>
