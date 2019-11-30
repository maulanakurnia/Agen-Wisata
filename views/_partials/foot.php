			</main>
			<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">
				<div class="small-dialog-header"> <h3>Masuk</h3></div>
				<form action="<?= $base_url ?>login" method="post"> 
					<div class="sign-in-wrapper">
						<div class="form-group">
							<label>Email</label>
							<input type="email" class="form-control" name="email" id="email">
							<i class="icon_mail_alt"></i>
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" class="form-control" name="password" id="password" value="">
							<i class="icon_lock_alt"></i>
						</div>
						<div class="text-center"><input type="submit" value="Masuk" class="btn btn-primary btn-block"></div>
						<div class="text-center mt-1">
							Belum Memiliki Akun? <a href="<?= $base_url ?>daftar">Daftar!</a>
						</div>
					</div>
				</form>
			</div>
			<div id="toTop"></div>

			<script src="<?= $url ?>vendor/js/jquery-2.2.4.min.js"></script>
			<script src="<?= $url ?>vendor/js/common_scripts.js"></script>
			<script src="<?= $url ?>vendor/js/main.js"></script>
			<script src="<?= $url ?>vendor/js/jquery.flexslider.js"></script>
			<script src="<?= $url ?>vendor/js/script.js"></script>
		<?php if($title == 'Data Wisata'){ ?>
			<script src="<?= $url ?>vendor/js/script-cari.js"></script>
		<?php } ?>
		<?php if($title == "Ubah Profil") { ?>
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
	</body>
</html>