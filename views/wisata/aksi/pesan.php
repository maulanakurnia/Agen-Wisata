<?php 
    session_start();
    require_once __DIR__.'/../../../app/koneksi.php';
    $id_induk   = $_SESSION['id'];
    $id_wisata  = $_POST['id_wisata'];
    $nama       = $_POST['nama'];
    $berangkat  = $_POST['berangkat'];
    $pulang     = $_POST['pulang'];
    $total      = $_POST['total'];
    $jmlh       = $_POST['jumlahpenumpang'];

    $query      = mysqli_query($konek,"SELECT max(id_pemesanan) as max_kode FROM pemesanan");
    $data       = mysqli_fetch_array($query);
    $kode_psn   = $data['max_kode'];

    $noUrut     = (int) substr($kode_psn, 5);
    $noUrut++;
    $char       = "PMSN-";
    $kode       = $char . sprintf("%03s", $noUrut); //nambah angka daribelakang


    $pesan      = mysqli_query($konek,"INSERT INTO pemesanan VALUES('$kode','$id_induk','$id_wisata',NOW(),'$berangkat','$pulang','BELUM DI ATUR','$total','BELUM DIBAYAR')");
    if($pesan){
        $pesan2  = "INSERT INTO data_pemesan VALUES";
        for ($i=0; $i < $jmlh ; $i++) { 
            $pesan2 .= "(DEFAULT,'$kode','{$nama[$i]}')";  
            $pesan2 .= ",";
        }
        $pesan2 = rtrim($pesan2,",");
        $insert = mysqli_query($konek,$pesan2);
    } else {
        header("location: ../../?pesan=gagalpesan");
    }

    if($pesan2){
        header("location: ../bayar?id_pemesanan=$kode&jumlah=$jmlh&id_wisata=$id_wisata");
    }



