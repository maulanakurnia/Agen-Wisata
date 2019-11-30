<?php 
	session_start();
	if($_SESSION['id'] == NULL){
		header("location: ../?pesan=daftardulu");
	}
	$title      = 'pesan';
    include("../_partials/head.php");
    $jmlh       = $_POST['jumlah'];
    $id_wisata  = $_POST['id_wisata'];
    
    $wisata     = query("SELECT * FROM detail_wisata WHERE id_wisata = '$id_wisata'");

?>
	<main>
		<div class="hero_in cart_section">
			<div class="wrapper">
				<div class="container">
					<div class="bs-wizard clearfix">
						<div class="bs-wizard-step active">
							<div class="text-center bs-wizard-stepnum">Isi Data</div>
							<div class="progress">
								<div class="progress-bar"></div>
							</div>
							<a href="#0" class="bs-wizard-dot"></a>
						</div>

						<div class="bs-wizard-step disabled">
							<div class="text-center bs-wizard-stepnum">Bayar</div>
							<div class="progress">
								<div class="progress-bar"></div>
							</div>
							<a href="#0" class="bs-wizard-dot"></a>
						</div>

						<div class="bs-wizard-step disabled">
							<div class="text-center bs-wizard-stepnum">Selesai!</div>
							<div class="progress">
								<div class="progress-bar"></div>
							</div>
							<a href="#0" class="bs-wizard-dot"></a>
						</div>
					</div>
					<!-- End bs-wizard -->
				</div>
			</div>
		</div>
		<!--/hero_in-->
		<form action="aksi/pesan" method="post">
		<div class="bg_color_1">
			<div class="container margin_60_35">
				<div class="row">
					<div class="col-lg-8">
						<div class="box_cart">
                            <div class="card bg-light">
                                <div class="card-body">
                                <h4>Informasi Pemesan</h4>
                        <?php for($i = 1; $i <= $jmlh; $i++) { ?>
                            <div class="form-group">
								<label for="formGroupExampleInput">Nama Pemesan <?= $i; ?></label>
								<input type="text" class="form-control" name="nama[]">
								<input type="hidden" value="<?= $jmlh ?>" name="jumlahpenumpang">
                            </div>
						<?php } ?>
                        <div class="form-group">
                            <label>Berangkat</label>
                            <input type="date" class="form-control" name="berangkat">
                        </div>
                        <div class="form-group">
                            <label>Pulang</label>
                            <input type="date" class="form-control" name="pulang">
                        </div>
                                </div>
                            </div>
					    </div>
					</div>
					<!-- /col -->
					
					<aside class="col-lg-4" id="sidebar">
						<div class="card bg-light text-dark">
							<div class="card-body">
								<div class="box_detail">
									<div id="total_cart">
										<?php $total = $wisata[0]['harga_wisata']*$jmlh; $total2 = number_format($total, 0, '', '.'); ?>
										Total <span class="float-right">IDR <?= $total2; ?></span>
										<input type="hidden" value="<?= $total ?>" name="total">
									</div>
									<ul class="cart_details">
										<li>Wisata       <span><?= $wisata[0]['nama_wisata']?></span></li>
										<input type="hidden" value="<?= $id_wisata ?>" name="id_wisata">
										<li>Total Pemesan<span><?= $jmlh ?> Orang</span></li>
									</ul>
									<button type="submit" class="btn btn-primary btn-block">Pesan</button>
								</div>
							</div>
						</div>
					</aside>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /bg_color_1 -->
		</form>
	</main>
	<!--/main-->
	
<?php 
    include("../_partials/foot.php");
?>