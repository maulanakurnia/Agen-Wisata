<?php
	$title = 'Beranda';
    include("_partials/head.php");
    $wisata  = query("SELECT * FROM detail_wisata LIMIT 0,7");
    $path    = "../vendor/img/wisata/"; 
?>
    <section class="slider">
        <div id="slider" class="flexslider">
            <ul class="slides">
                <li>
                    <img src="../vendor/img/bali.jpg" alt="">
                    <div class="meta">
                        <h3>Bali</h3>
                    </div>
                </li>
                <li>
                    <img src="../vendor/img/semarang.jpg" alt="">
                    <div class="meta">
                        <h3>Semarang, Jawa Tengah</h3>
                    </div>
                </li>
                <li>
                    <img src="../vendor/img/yogyakarta.jpg" alt="">
                    <div class="meta">
                        <h3>Yogyakarta, Daerah Istimewa Yogyakarta</h3>
                    </div>
                </li>
                <li>
                    <img src="../vendor/img/bandung.jpg" alt="">
                    <div class="meta">
                        <h3>Bandung, Jawa Barat</h3>
                    </div>
                </li>
            </ul>
        </div>   
        <div id="carousel_slider_wp">
            <div id="carousel_slider" class="flexslider">
                <ul class="slides">
                    <li>
                        <img src="../vendor/img/bali.jpg" alt=""  style="height:150px !important; width=200px !important;">
                        <div class="caption">
                            <h3>Bali <span></span></h3>
                        </div>
                    </li>
                    <li>
                        <img src="../vendor/img/semarang.jpg" alt="" style="height:150px !important; width=200px !important;">
                        <div class="caption">
                            <h3>Semarang <span>Jawa Tengah</span></h3>
                        </div>
                    </li>
                    <li>
                        <img src="../vendor/img/yogyakarta.jpg" alt="" style="height:150px !important; width=200px !important;">
                        <div class="caption">
                            <h3>Yogyakarta <span>D.I Yogyakarta</span></h3>
                        </div>
                    </li>
                    <li>
                        <img src="../vendor/img/bandung.jpg" alt="" style="height:150px !important; width=200px !important;">
                        <div class="caption">
                            <h3>Bandung <span>Jawa Barat</span></h3>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
		
    <div class="container-fluid margin_80_0">
        <div class="main_title_2">
            <span><em></em></span>
            <h2>Rekomendasi Wisata</h2>
            <p>Agen Wisata</p>
        </div>
        <div id="reccomended" class="owl-carousel owl-theme">
            <?php foreach($wisata as $ws) : ?>
                <div class="item">
                    <div class="box_grid">
                        <figure>
                            <a href="wisata/detail?id_wisata=<?= $ws['id_wisata']?>"><img src="<?= $path, $ws['gambar_wisata']?>" class="img-fluid" alt="" width="800" height="533"><div class="read_more"><span>Selengkapnya</span></div></a>
                        </figure>
                        <div class="wrapper">
                            <h3><a href="wisata/detail"><?= $ws['nama_wisata']?></a></h3>
                            <p><?= substr($ws['deskripsi_wisata'], 0, 450). ' ...'?></p>
                            <span class="price">Mulai Rp. <strong><?= number_format($ws['harga_wisata'], 0, '', '.'); ?></strong> /Orang</span>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
        
        <div class="bg_color_1">
        <div class="container margin_80_55">
            <div class="main_title_2">
                <span><em></em></span>
                <h2>Tentang Kami</h2>
                <p>Agen Wisata</p>
            </div>
            <div class="row justify-content-between">
                <div class="col-lg-6 wow" data-wow-offset="150">
                    <figure class="block-reveal">
                        <div class="block-horizzontal"></div>
                        <img src="../vendor/img/tentang.png" class="img-fluid" alt="">
                    </figure>
                </div>
                <div class="col-lg-5">
                    <p>Agen Wisata, menyediakan banyak sekali paket-paket menarik yang cocok untuk anda berwisata ke lokasi-lokasi yang sangat indah. Tidak perlu khawatir dengan budget anda yang <strong>pas-pasan!</strong> karena kami juga menyediakan paket murah yang pas dengan kantong anda!</p>
                    <p>Agen Wisata juga memiliki banyak sekali akses channel <strong>Hotel & Restoran</strong>, jadi tunggu apa lagi? Mari bergabung dan berwisata dengan Agen Wisata! </p>
                    <p><em>CEO Agen Wisata</em></p>
                </div>
            </div>
            <!--/row-->
        </div>
        <!--/container-->
    </div>
    </div>


	
	
<?php
	include("_partials/foot.php");
?>