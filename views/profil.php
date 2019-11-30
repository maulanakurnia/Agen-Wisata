<?php
	$title = 'Beranda';
    require_once '_partials/head.php';
    $id      = $_SESSION['id'];
    $user    = query("SELECT * FROM user WHERE id = '$id'");
    $path    = '../vendor/img/user/';
?>

<main>
        <div class="hero_in cart_section" style="height: 200px;">
            <div class="wrapper">
                    <div class="container">
                        <h1 class="fadeInUp"><span></span>Profil</h1>
                    </div>
            </div>
		</div>
        <form action="aksi/prosesdaftar" method="post">
            <div class="container col-6" style="margin-top: 2.5rem!important;"> 
            <div class="text-center mb-3">
                <img width=200 src="<?= $path, $user[0]['gambar']?>" alt="Profil" style="border: 3px solid #adb5bd;border-radius: 50%;">
            </div>
                <div class="card">
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama" value="<?= $user[0]['nama']?>" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" name="email" value="<?= $user[0]['email']?>" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nomor Telfon</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="no_telp" value="<?= $user[0]['no_telp']?>" readonly>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
	</main>
    <!--/main-->


<?php
	require_once '_partials/foot.php';
?>