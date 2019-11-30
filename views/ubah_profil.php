<?php
	$title = 'Ubah Profil';
    require_once '_partials/head.php';
    $id      = $_SESSION['id'];
    $user    = query("SELECT * FROM user WHERE id = '$id'");
    $path    = '../vendor/img/user/';
?>

<main>
        <div class="hero_in cart_section" style="height: 200px;">
            <div class="wrapper">
                    <div class="container">
                        <h1 class="fadeInUp"><span></span>Ubah Profil</h1>
                    </div>
            </div>
		</div>
        <form action="update" method="post" enctype="multipart/form-data">
            <div class="container col-6" style="margin-top: 2.5rem!important;"> 
            <div class="text-center mb-3">
                <img id="myImg" width=200 src="<?= $path, $user[0]['gambar']?>" alt="Profil" style="border: 3px solid #adb5bd;border-radius: 50%;">
            </div>
                <div class="card">
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Gambar</label>
                            <div class="input-group col-sm-10">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="gambar" id="gambar">
                                    <label class="custom-file-label" >Pilih Gambar</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama" value="<?= $user[0]['nama']?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" name="email" value="<?= $user[0]['email']?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nomor Telfon</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="ponsel" value="<?= $user[0]['no_telp']?>">
                            </div>
                        </div>
                        <small class="text-danger"><i>Jika tidak ingin merubah password, abaikan form password</i></small>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Kata Sandi Lama</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" name="sandi">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Kata Sandi Baru</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" name="sandiB">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Konfirmasi Kata Sandi Baru</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" name="sandiBK">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Ubah</button>
                    </div>
                </div>
            </div>
        </form>
	</main>
    <!--/main-->


<?php
	require_once '_partials/foot.php';
?>