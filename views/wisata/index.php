<?php
	$title = 'Data Wisata';
	include("../_partials/head.php");
	$wisata      = query("SELECT * FROM detail_wisata LIMIT 0,5");
	if(isset($_POST["cari"])){
        $mahasiswa = cari($_POST["keyword"]);
	}
?>
		
		<section class="hero_in cart_section start_bg_zoom">
			<div class="wrapper">
				<div class="container">
					<form>
						<div class="row no-gutters custom-search-input-2">
							<div class="col">
							
									<input class="form-control" type="text" autofocus placeholder="Cari Wisata..."autofocus autocomplete="off" id="keyword">
									<i class="icon_search"></i>
						
							</div>
						</div>
						<!-- /row -->
					</form>
				</div>
			</div>
		</section>
		<div class="container margin_60_35">
			<div class="isotope-wrapper">
				<div id="formcari" class="mt-4">
				<?php foreach($wisata as $ws) : ?>
					<div class="box_list isotope-item popular">
						<div class="row no-gutters">
							<div class="col-lg-5">
								<figure>
									<a href="detail?id_wisata=<?= $ws['id_wisata']?>"><img src="<?= $url?>vendor/img/wisata/<?= $ws['gambar_wisata']?>" class="img-fluid" alt="" width="800" height="533"><div class="read_more"><span>Selengkapnya</span></div></a>
								</figure>
							</div>
							<div class="col-lg-7">
								<div class="wrapper">
									<div class="score justify-content-end d-flex"><strong><?= $ws['rating_wisata']?></strong></div>
									<h3><a href="detail?id_wisata=<?= $ws['id_wisata'] ?>"><?= $ws['nama_wisata']?></a></h3>
									<p maxlength="10"><?= substr($ws['deskripsi_wisata'], 0, 450). '...'?></p>
									<span class="price">Mulai <strong>IDR <?= number_format($ws['harga_wisata'], 0, '', '.');?></strong> /Orang</span>
								</div>
							</div>
						</div>
					</div>
				<?php endforeach ?>
				</div>
			</div>
		</div>
			



	
<?php
	include("../_partials/foot.php");
?>