</div>


    <script src="<?= $url ?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script>
    $.widget.bridge('uibutton', $.ui.button)
    </script>
    <script src="<?= $url ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= $url ?>assets/sweetalert2/dist/sweetalert2.min.js"></script>
    <script src="<?= $url ?>assets/plugins/sparklines/sparkline.js"></script>
    <script src="<?= $url ?>assets/plugins/jquery-knob/jquery.knob.min.js"></script>
    <script src="<?= $url ?>assets/plugins/moment/moment.min.js"></script>
    <script src="<?= $url ?>assets/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="<?= $url ?>assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="<?= $url ?>assets/plugins/summernote/summernote-bs4.min.js"></script>
    <script src="<?= $url ?>assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <script src="<?= $url ?>assets/dist/js/adminlte.min.js"></script>
    <?php if($title == "Tambah User" || $title == "Tambah Wisata" || $title == "Ubah User" || $title == "Ubah Wisata") { ?>
    <script type="text/javascript">  
      window.addEventListener('load', function() {
          document.querySelector('input[type="file"]').addEventListener('change', function() {
              if (this.files && this.files[0]) {
                  var img = document.getElementById('myImg'); 
                  img.src = URL.createObjectURL(this.files[0]); 
              }
          });
      });
    </script>  
    <?php }?>
    <script type="text/javascript">
    $(function() {
    $('.keluar').click(function() {
        Swal.fire({
        icon : "info",
        title: 'Yakin Ingin Keluar?',
        text: "tekan tombol ya jika yakin ingin keluar",
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya',
        timer: 3000
        }).then((result) => {
        if (result.value) {
            location.href = "http://localhost/agen_wisata/views/logout";
        }
        })
        });
    });
    </script>
    		<?php if($title == 'Data Wisata' || $title == 'Data User'){ ?>
			<script>
				var keyword     = document.getElementById('keyword');
				var cari        = document.getElementById('cari');
				var container   = document.getElementById('formcari');

				keyword.addEventListener('keyup', function () {
					var xhr = new XMLHttpRequest();

					xhr.onreadystatechange = function () {
						// Cek Kesiapan Ajax
						if (xhr.readyState == 4 && xhr.status == 200) {
							container.innerHTML = xhr.responseText;
						}
					}
					// Eksekusi Ajax
					<?php if($title == 'Data Wisata') { ?>
						xhr.open('GET', '../../../vendor/ajax/datacari?keyword=' + keyword.value, true);
						xhr.send();
					<?php } else { ?>
						xhr.open('GET', '../../../vendor/ajax/datacariuser?keyword=' + keyword.value, true);
						xhr.send();
					<?php } ?>
				});
			</script>
		<?php } ?>

    </body>
</html>