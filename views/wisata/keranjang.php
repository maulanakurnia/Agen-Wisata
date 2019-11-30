<?php
	session_start();
	$title = 'keranjang';
	require_once "../_partials/head.php";
	$id			= $_SESSION['id'];
	$pemesanan	= query("SELECT * FROM pemesanan a INNER JOIN detail_wisata b ON a.id_wisata=b.id_wisata WHERE a.id_user = '$id' ");
	$id_psn		= $pemesanan[0]['id_pemesanan'];
	$jmlh    	= count(query("SELECT * FROM data_pemesan WHERE id_pemesanan = '$id_psn'"));
?>

		<div class="hero_in cart_section" style="height: 200px;">
            <div class="wrapper">
                    <div class="container">
                        <h1 class="fadeInUp"><span></span>Keranjang</h1>
                    </div>
            </div>
		</div>
	
    	<div class=" mt">
			<div class="container margin_60_35" style="transform: none;">
				<div class="row" style="transform: none;">
					<div class="col">
						<div class="card">
							<div class="card-header">
								<div class="row">
									<div class="col">
										<input type="text" id="keyword" placeholder="cari.." autocomplete="off" class="form-control form-control-sm">
									</div>
								</div>
							</div>
							<div class="card-body">
								<table class="table table-hover">
									<thead>
										<tr>
											<th>#</th>
											<th>Wisata</th>
											<th>Berangkat</th>
											<th>Pulang</th>
											<th>Total Biaya</th>
											<th>Status</th>
											<th>Aksi</th>
										</tr>
									</thead>
									<tbody>
										<?php $i=1; foreach($pemesanan as $psn) : ?>
										<tr>
											<td><?= $i ?></td>
											<td><?= $psn['nama_wisata'] ?></td>
											<td><?= date('d M Y ',strtotime($psn['tanggal_berangkat']))?></td>
											<td><?= date('d M Y ',strtotime($psn['tanggal_pulang']))?></td>
											<td><?= number_format($psn['total'],'0','','.') ?></td>
											<td>
												<?php if($psn['status_wisata'] == "BELUM DIBAYAR") { ?>
													<h6><span class="badge badge-danger"><?= $psn['status_wisata']?></span></h6>
												<?php } else if($psn['status_wisata'] == "LUNAS") { ?>
													<h6><span class="badge badge-success"><?= $psn['status_wisata']?></span></h6>
												<?php } ?>
											</td>
											<td>
												<?php if($psn['status_wisata'] == "BELUM DIBAYAR") { ?>
													<a href="bayar?id_pemesanan=<?= $psn['id_pemesanan']?>&id_wisata=<?= $psn['id_wisata'] ?>" class="badge badge-success">Bayar</a>
												<?php } if($psn['status_wisata'] == "LUNAS") { ?>
													<a href="detail_pemesan?id_pemesanan=<?= $psn['id_pemesanan']?>&id_wisata=<?= $psn['id_wisata'] ?>" class="badge badge-info">Detail</a>
												<?php } ?>
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
		</div>
<?php
	require_once "_partials/foot.php";
?>