<?php 
    $title  = "Detail User";
    require_once __DIR__.'../../_partials/head.php';
    $id   = $_GET['id_user'];
    $user = query("SELECT * FROM user WHERE id = '$id'");
    $path       = "../../../vendor/img/user/";
?>

<div class="content-wrapper" style="min-height: 1416.81px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="../">Beranda</a></li>
                        <li class="breadcrumb-item"><a href="../user">User</a></li>
                        <li class="breadcrumb-item active"><?= $title; ?></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-7">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="img-fluid img-circle" width=200 src="<?= $path, $user[0]['gambar']?>" alt="Profil" style="border: 3px solid #adb5bd;">
                </div>

                <h3 class="text-center mt-2"><b><i><?= $user[0]['nama'] ?></i></b></h3>

                <p class="text-muted text-center"><?= $user[0]['nama_role']?></p>

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="<?= $user[0]['email']?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">No Ponsel</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="<?= $user[0]['no_telp']?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal Dibuat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="<?= date('d M Y ',strtotime($user[0]['date_created']))?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal Diubah</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="<?= date('d M Y H:i:s',strtotime($user[0]['date_updated']));?>" readonly>
                    </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

          </div>

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

<?php 
   require_once __DIR__."../../_partials/foot.php";
?>