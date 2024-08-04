<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link href="<?php echo base_url('assets/img/logo/logo.png'); ?>" rel="icon">
	<title>Authentication</title>
	<link href="<?php echo base_url('assets/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url('assets/css/ruang.css'); ?>" rel="stylesheet">
</head>

<body class="bg-gradient-login">
<!-- Login Content -->
<div class="container-login">
	<div class="row justify-content-center">
		<div class="col-xl-6 col-lg-12 col-md-9">
			<div class="card shadow-sm my-5">
				<div class="card-body p-0">
					<div class="row">
						<div class="col-lg-12">
							<div class="login-form">
								<div class="text-center">
									<h1 class="h4 text-gray-900 mb-4">Giriş</h1>
								</div>
								<?php if($this->session->flashdata('error')): ?>
									<div class="alert alert-danger">
										<?php echo $this->session->flashdata('error'); ?>
									</div>
								<?php endif; ?>
								<?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
								<form class="user" id="loginForm" action="<?php echo site_url('auth/login'); ?>" method="post">
									<div class="form-group">
										<input type="email" class="form-control" name="email" id="email" value="<?php echo set_value('email'); ?>" aria-describedby="emailHelp" placeholder="Enter Email Address">
									</div>
									<div class="form-group">
										<input type="password" class="form-control" name="password" id="password" placeholder="Password">
									</div>
									<div class="form-group">
										<div class="custom-control custom-checkbox small" style="line-height: 1.5rem;">
											<input type="checkbox" class="custom-control-input" name="remember" value="1" id="customCheck">
											<label class="custom-control-label" for="customCheck">
												Beni Hatırla</label>
										</div>
									</div>
									<div class="form-group">
										<button class="btn btn-primary btn-block" type="submit">Giriş Yap</button>
									</div>
									<hr>
								</form>
								<hr>
								<div class="text-center">
									<a class="font-weight-bold small" href="<?php echo site_url('auth/register'); ?>">Bir hesap oluşturun!</a>
								</div>
								<div class="text-center">
									<a class="small" href="<?php echo site_url('auth/forgot_password'); ?>">Parolanızı mı unuttunuz?</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Login Content -->
<script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/ruang-admin.min.js'); ?>"></script>
</body>

</html>
