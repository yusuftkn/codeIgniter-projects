<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link href="<?php echo base_url('assets/img/logo/logo.png'); ?>" rel="icon">
	<title>Register</title>
	<link href="<?php echo base_url('assets/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url('assets/css/ruang-admin.min.css'); ?>" rel="stylesheet">
</head>

<body class="bg-gradient-login">
<div class="container-login">
	<div class="row justify-content-center">
		<div class="col-xl-10 col-lg-12 col-md-9">
			<div class="card shadow-sm my-5">
				<div class="card-body p-0">
					<div class="row">
						<div class="col-lg-12">
							<div class="login-form">
								<div class="text-center">
									<h1 class="h4 text-gray-900 mb-4">Kayıt Formu</h1>
								</div>
								<?php echo validation_errors(); ?>
								<form id="registerForm" method="POST" action="<?php echo base_url('auth/register'); ?>">
									<div class="form-group">
										<label>İsim</label>
										<input type="text" class="form-control" name="name" id="name" placeholder="İsim">
									</div>
									<div class="form-group">
										<label>Soyad</label>
										<input type="text" class="form-control" name="last_name" id="last_name" placeholder="Soyad">
									</div>
									<div class="form-group">
										<label>Email</label>
										<input type="email" class="form-control" name="email" id="email" placeholder="Email">
									</div>
									<div class="form-group">
										<label>Şifre</label>
										<input type="password" class="form-control" name="password" id="password" placeholder="Şifre">
									</div
									<div class="form-group">
										<button type="submit" class="btn btn-primary btn-block" id="registerButton">Kayıt Ol</button>
									</div>
								</form>
								<hr>
								<div class="text-center">
									<a class="font-weight-bold small" href="<?php echo base_url('login'); ?>">Zaten hesabınız var mı?</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/ruang-admin.min.js'); ?>"></script>
</body>
</html>
