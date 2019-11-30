<?php
	$title = 'Detail Wisata';
	include("../_partials/head.php");
	$id_wisata = $_GET['id_wisata']; 
    $id_psn    = $_GET['id_pemesanan']; 
    $wisata    = query("SELECT * FROM detail_wisata WHERE id_wisata = '$id_wisata'");
    $pemesan   = query("SELECT * FROM pemesanan a INNER JOIN data_pemesan b ON a.id_pemesanan = b.id_pemesanan WHERE a.id_pemesanan = '$id_psn'");
?>

    <section class="hero_in tours_detail" style="background: url(<?= $url ?>vendor/img/wisata/<?= $wisata[0]['gambar_wisata']?>) center center no-repeat; background-size:cover;">
        <div class="wrapper">
            <div class="container">
                <h1 class="fadeInUp"><span></span><?= $wisata[0]['nama_wisata']?></h1>
            </div>
        </div>
    </section>

    <div class="bg_color_1" style="transform: none;">
			<nav class="secondary_nav sticky_horizontal" style="">
				<div class="container">
					<ul class="clearfix">
						<li><a href="#detail" class="active">Detail pemesanan</a></li>
						<li><a href="#deskripsi">Deskripsi wisata anda</a></li>
						<li></li>
					</ul>
				</div>
			</nav>
			<div class="container margin_60_35" style="transform: none;">
				<div class="row" style="transform: none;">
					<div class="col">
                        <section id="detail">
                            <h2>Detail Pemesan</h2>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">Kode Pemesanan</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control form-control-sm mb-1" value="<?= $id_psn ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">Pemesan</label>
                                    <div class="col-sm-10">
                                    <?php foreach($pemesan as $psn) : ?>
                                        <input type="text" class="form-control form-control-sm mb-3" value="<?= $psn['nama_pemesan']?>" readonly>
                                    <?php endforeach ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">Wisata</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control form-control-sm mb-1" value="<?= $wisata[0]['nama_wisata']?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">Berangkat</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control form-control-sm mb-1" value="<?= $pemesan[0]['tanggal_berangkat']?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">Pulang</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control form-control-sm mb-1" value="<?= $pemesan[0]['tanggal_pulang']?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">Total Biaya</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control form-control-sm mb-1" value="Rp. <?= number_format($pemesan[0]['total'], 0, '', '.');?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">Metode Pembayaran</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control form-control-sm mb-1" value="<?= $pemesan[0]['metode_pembayaran']?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">Status</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control form-control-sm mb-1" value="<?= $pemesan[0]['status_wisata']?>" readonly>
                                    </div>
                                </div>
                            <hr>
                        </section>
						<section id="deskripsi">
                            <h2>Deskripsi</h2>
                            <p align=justify><?= $wisata[0]['deskripsi_wisata']?></p>
						</section>
					
					</div>
				</div>
			</div>
		</div>

	
<?php
	include("../_partials/foot.php");
?>