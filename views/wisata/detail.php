<?php
	$title = 'Detail Wisata';
	include("../_partials/head.php");
	$id_wisata = $_GET['id_wisata']; 
	$wisata    = query("SELECT * FROM detail_wisata WHERE id_wisata = '$id_wisata'");
?>

    <section class="hero_in tours_detail" style="background: url(<?= $url ?>vendor/img/wisata/<?= $wisata[0]['gambar_wisata']?>) center center no-repeat; background-size:cover;">
        <div class="wrapper">
            <div class="container">
                <h1 class="fadeInUp"><span></span><?= $wisata[0]['nama_wisata']?></h1>
            </div>
        </div>
    </section>

    <div class="bg_color_1">
        <div class="container margin_60_35">
            <div class="row">
                <div class="col-lg-8">
                    <section id="description">
                        <h2>Deskripsi</h2>
                        <p align=justify><?= $wisata[0]['deskripsi_wisata']?></p>
                    </section>
                </div>
                
                <aside class="col-lg-4" id="sidebar">
                    <form action="pesan" method="POST">
                        <div class="card bg-light text-dark">
                            <div class="card-body">
                                <div class="box_detail booking">
                                    <div class="price">
                                        <input type="hidden" value="<?= $wisata[0]['id_wisata']?>" name="id_wisata">
                                        <span>IDR <?= number_format($wisata[0]['harga_wisata'], 0, '', '.');?> <small>/orang</small></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <select class="custom-select" name="jumlah" required>
                                        <option selected disabled value="">Berapa Orang?</option>
                                        <?php for($i = 1; $i<10; $i++) { ?>
                                        <option value="<?= $i; ?>"><?= $i; ?> Orang</option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block">Pesan</button>
                            </div>
                        </div>
                    </form>
                </aside>
            </div>
        </div>
    </div>

	
<?php
	include("../_partials/foot.php");
?>