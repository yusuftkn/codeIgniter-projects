<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('layouts/admin/head')   ?>
</head>

<body id="page-top">
<div id="wrapper">
	<!-- Sidebar -->
	<?php $this->load->view('layouts/admin/sidebar'); ?>
	<!-- Sidebar -->
	<div id="content-wrapper" class="d-flex flex-column">
		<div id="content">
			<!-- TopBar -->
			<?php $this->load->view('layouts/admin/header'); ?>
			<!-- Topbar -->

			<!-- Container Fluid-->
			<div class="container-fluid" id="container-wrapper">
				<?= isset($content) ? $content : '' ?>
			</div>
			<!---Container Fluid-->
			<div class="row text-center">
				<div class="col-md-12 text-center">
					<h1>Hoş Geldiniz</h1>
				</div>
			</div>

			<!-- Logout Modal-->
			<form action="<?php echo base_url('auth/logout'); ?>" method="post">
				<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Çıkış yapmaya hazır mısınız?</h5>
								<button class="close" type="button" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">Oturumu kapatmak istediğinizden emin misiniz?</div>
							<div class="modal-footer">
								<button class="btn btn-secondary" type="button" data-dismiss="modal">İptal</button>
								<button class="btn btn-primary" type="submit">Çıkış Yap</button>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
		<!-- Footer -->
		<?php $this->load->view('layouts/admin/footer'); ?>
		<!-- Footer -->
	</div>
</div>

 <?php $this->load->view('layouts/admin/js')  ?>


</body>

</html>
