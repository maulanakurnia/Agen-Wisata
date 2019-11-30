 <?php 
    $title="Daftar";
    include('_partials/head.php');

    $pesan  = isset($_GET['pesan']);
?>
<main>
        <div class="hero_in cart_section">
        <div class="wrapper">
				<div class="container">
					<h1 class="fadeInUp"><span></span>Registrasi</h1>
				</div>
        </div>
		</div>
		<!--/hero_in-->
        <!--/hero_in-->
        <form action="prosesdaftar" method="post">
            <div class="container col-6" style="margin-top: 2.5rem!important;"> 
                <?php if($pesan == "SandiTidakSama") { 
                echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    Mohon maaf kata sandi <strong>Tidak Sama</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'; } ?>
                <div class="card">
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" name="email">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nomor Telfon</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="no_telp">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" name="password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Konfirmasi Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" name="passwordK">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block" >Daftar!</button>
                    </div>
                </div>
            </div>
        </form>
	</main>
    <!--/main-->
<?php 
    include('_partials/foot.php');
?>