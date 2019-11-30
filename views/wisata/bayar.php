<?php 
    $title      = 'bayar';
    include("../_partials/head.php");
    $id_wisata  = $_GET['id_wisata'];
    $id			= $_GET['id_pemesanan'];
	$pemesanan  = query("SELECT * FROM pemesanan a INNER JOIN detail_wisata b ON a.id_wisata = b.id_wisata INNER JOIN data_pemesan c ON a.id_pemesanan=c.id_pemesanan WHERE a.id_pemesanan='$id'");
	$jmlh		= count(query("SELECT * FROM data_pemesan WHERE id_pemesanan = '$id'"));
?>

<main style="transform: none;">
		<div class="hero_in cart_section start_bg_zoom">
			<div class="wrapper">
				<div class="container">
					<div class="bs-wizard clearfix">
						<div class="bs-wizard-step">
							<div class="text-center bs-wizard-stepnum">Your cart</div>
							<div class="progress">
								<div class="progress-bar"></div>
							</div>
							<a href="cart-1.html" class="bs-wizard-dot"></a>
						</div>

						<div class="bs-wizard-step active">
							<div class="text-center bs-wizard-stepnum">Pembayaran</div>
							<div class="progress">
								<div class="progress-bar"></div>
							</div>
							<a href="#0" class="bs-wizard-dot"></a>
						</div>

						<div class="bs-wizard-step disabled">
							<div class="text-center bs-wizard-stepnum">Selesai</div>
							<div class="progress">
								<div class="progress-bar"></div>
							</div>
							<a href="#0" class="bs-wizard-dot"></a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<form action="aksi/bayar" method="post">
			<div class="bg_color_1">
				<div class="container margin_60_35">
					<div class="row">
						<div class="col-lg-8">
							<div class="box_cart">
								<div class="card bg-light">
									<div class="card-body">
										<div class="step">
											<div class="row">
												<div class="col-sm">
												<h4>Informasi Pemesan</h4>
												<input type="hidden" value="<?= $pemesanan[0]['id_pemesanan'] ?>" name="id_psn">
												<input type="hidden" value="<?= $pemesanan[0]['id_wisata'] ?>" name="id_ws">
												<?php $i=1; foreach($pemesanan as $psn) : ?>
													<div class="form-group">
														<label for="formGroupExampleInput">Nama Pemesan <?= $i ?></label>
														<input type="text" class="form-control" name="nama[]" value="<?= $psn['nama_pemesan'] ?>" readonly>
													</div>
												<?php $i++; endforeach ?>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="box_cart">
								<div class="card bg-light">
									<div class="card-body">
										<div class="step">
											<div class="row">
												<div class="col-sm">
													<div class="form-group">
														<h4>Metode Pembayaran</h4>
														<div class="custom-select-form">
															<select class="wide add_bottom_15" name="pembayaran" required>
																<option value="">Pilih metode pembayaran</option>
																<option value="indomaret">indomaret</option>
																<option value="alfamart">alfamart</option>
																<option value="Link Aja">Link Aja</option>
															</select>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<aside class="col-lg-4" id="sidebar">
							<div class="box_detail">
								<div id="total_cart">Total <span class="float-right">IDR <?= number_format($pemesanan[0]['total'], 0, '', '.') ?></span></div>
								<ul class="cart_details">
									<li>Wisata       <span><?= $pemesanan[0]['nama_wisata']?></span></li>
									<li>Berangkat    <span><?= $pemesanan[0]['tanggal_berangkat']?></span></li>
									<li>Pulang       <span><?= $pemesanan[0]['tanggal_pulang']?></span></li>
									<li>Pemesan      <span><?= $jmlh ?> Orang</span></li>
								</ul>
								<button type="submit" class="btn btn-primary btn-block">Bayar</button>
							</div>
						</aside>
					</div>
				</div>
			</div>
		</form>
	</main>

<?php 
    include("../_partials/foot.php");
?>