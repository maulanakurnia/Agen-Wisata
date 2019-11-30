<?php
    require_once __DIR__.'/../../app/koneksi.php';
    $url		= "http://localhost/agen_wisata/";

    $keyword    = $_GET["keyword"];
    $query      = "SELECT * FROM detail_wisata WHERE nama_wisata LIKE '%{$keyword}%'";
    $wisata     = query($query);


    foreach($wisata as $ws) : ?>
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
                        <h3><a href="wisata_detail"><?= $ws['nama_wisata']?></a></h3>
                        <p maxlength="10"><?= substr($ws['deskripsi_wisata'], 0, 450). '...'?></p>
                        <span class="price">Mulai <strong>IDR <?= number_format($ws['harga_wisata'], 0, '', '.');?></strong> /Orang</span>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach ?>
