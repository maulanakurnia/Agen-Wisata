<?php
    require_once __DIR__.'/../../app/koneksi.php';
    $url		= "http://localhost/agen_wisata/";

    $keyword    = $_GET["keyword"];
    $query      = "SELECT * FROM detail_wisata WHERE nama_wisata LIKE '%{$keyword}%' OR lokasi_wisata LIKE '%{$keyword}%' OR deskripsi_wisata LIKE '%{$keyword}%' OR rating_wisata LIKE '%{$keyword}%' OR harga_wisata LIKE '%{$keyword}%'";
    $wisata     = query($query);

    function hasilcari($content, $word) {
        $replace = '<span style="background-color: #FF0;">' . $word . '</span>'; 
        $content = str_replace( $word, $replace, $content ); 
        return $content;
    }
?>

    <table class="table table-hover">
        <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>lokasi</th>
            <th>deskripsi</th>
            <th>Rating</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>

        <?php $i = 1; foreach($wisata as $ws) : ?> 
        <tr>
            <td><?= $i; ?></td>
            <td width="10%">
                <?php
                    if ($_GET["keyword"]<>'') {
                        echo hasilcari(ucwords(strtolower($ws["nama_wisata"])), ucwords($_GET["keyword"]));
                    } else {
                        echo ucwords(strtolower($ws["nama_wisata"]));
                    }
                ?>
            </td>
            <td width="8%">
                <?php
                    if ($_GET["keyword"]<>'') {
                        echo hasilcari(ucwords(strtolower($ws["lokasi_wisata"])), ucwords($_GET["keyword"]));
                    } else {
                        echo ucwords(strtolower($ws["lokasi_wisata"]));
                    }
                ?>
            </td>
            <td align="justify">
                <?php
                    if ($_GET["keyword"]<>'') {
                        echo hasilcari(ucwords(strtolower($ws['deskripsi_wisata'])), ucwords($_GET["keyword"]));
                    } else {
                        echo ucwords(strtolower($ws['deskripsi_wisata']));
                    }
                ?>
            </td>
            <td >
                <?php
                    if ($_GET["keyword"]<>'') {
                        echo hasilcari(ucwords(strtolower($ws['rating_wisata'])), ucwords($_GET["keyword"]));
                    } else {
                        echo ucwords(strtolower($ws['rating_wisata']));
                    }
                ?>
            </td>
            <td >
                <?php
                    if ($_GET["keyword"]<>'') {
                        echo hasilcari(ucwords(strtolower($ws['harga_wisata'])), ucwords($_GET["keyword"]));
                    } else {
                        echo ucwords(strtolower($ws['harga_wisata']));
                    }
                ?>
            </td>
            <td width="10%">
                <a class="badge badge-success" href="detail?id=<?= $ws['id_wisata']?>">Detail</a>
                <a class="badge badge-warning" href="ubah?id=<?= $ws['id_wisata']?>">Edit</a>
                <a class="badge badge-danger" onclick="confirm('Yakin ingin menghapus? ')"href="aksi/delete?id=<?= $ws['id_wisata']?>">hapus</a>
            </td>
        </tr>
        <?php $i++; endforeach ?>
        </tbody>
    </table>
