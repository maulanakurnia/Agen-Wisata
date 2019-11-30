<?php
    require_once __DIR__.'/../../app/koneksi.php';
    $url		= "http://localhost/agen_wisata/";

    $keyword    = $_GET["keyword"];
    $query      = "SELECT * FROM user a INNER JOIN role b ON a.id_role = b.id_role WHERE a.nama LIKE '%{$keyword}%' OR a.email LIKE '%{$keyword}%' OR b.nama_role LIKE '%{$keyword}%' OR a.date_created LIKE '%{$keyword}%' OR a.date_updated LIKE '%{$keyword}%'";
    $user       = query($query);

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
            <th>Email</th>
            <th>Role</th>
            <th>Di Buat</th>
            <th>Di Ubah</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>

        <?php $i = 1; foreach($user as $us) : ?> 
        <tr>
            <td><?= $i; ?></td>
            <td>
                <?php
                    if ($_GET["keyword"]<>'') {
                        echo hasilcari(ucwords(strtolower($us["nama"])), ucwords($_GET["keyword"]));
                    } else {
                        echo ucwords(strtolower($us["nama"]));
                    }
                ?>
            </td>
            <td align="justify">
                <?php
                    if ($_GET["keyword"]<>'') {
                        echo hasilcari(ucwords(strtolower($us['email'])), ucwords($_GET["keyword"]));
                    } else {
                        echo ucwords(strtolower($us['email']));
                    }
                ?>
            </td>
            <td >
                <?php
                    if ($_GET["keyword"]<>'') {
                        echo hasilcari(ucwords(strtolower($us['nama_role'])), ucwords($_GET["keyword"]));
                    } else {
                        echo ucwords(strtolower($us['nama_role']));
                    }
                ?>
            </td>
            <td >
                <?php
                    if ($_GET["keyword"]<>'') {
                        echo hasilcari(ucwords(strtolower($us['date_created'])), ucwords($_GET["keyword"]));
                    } else {
                        echo ucwords(strtolower($us['date_created']));
                    }
                ?>
            </td>
            <td >
                <?php
                    if ($_GET["keyword"]<>'') {
                        echo hasilcari(ucwords(strtolower($us['date_updated'])), ucwords($_GET["keyword"]));
                    } else {
                        echo ucwords(strtolower($us['date_updated']));
                    }
                ?>
            </td>
            <td>
                <a href="" class="badge badge-success">Detail</a>
                <a href="ubah_profil?id=<?= $us['id']?>" class="badge badge-warning text-white">Ubah</a>
                <a href="" class="badge badge-danger">Hapus</a>
            </td>
        </tr>
        <?php $i++; endforeach ?>
        </tbody>
    </table>