<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<link href="<?= base_url('assets/img/logo/logo.png') ?>" rel="icon">
<title><?= isset($title) ? $title : 'Title' ?></title>
<link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
<link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css">
<link href="<?= base_url('assets/css/ruang-admin.min.css') ?>" rel="stylesheet">

<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
<style>
	.add-product-btn {
		display: inline-block;
		padding: 10px 20px;
		font-size: 16px;
		font-weight: bold;
		color: #fff;
		background-color: #28a745;
		border: none;
		border-radius: 5px;
		text-align: center;
		text-decoration: none;
		transition: background-color 0.3s ease, transform 0.3s ease;
	}

	.add-product-btn:hover {
		background-color: #218838;
		transform: translateY(-2px);
	}

	.add-product-btn i {
		margin-right: 8px;
	}
</style>

<style>
	.form-group {
		margin-bottom: 10px;
	}
	
	.currency-group {
		display: flex;
		align-items: center;
		margin-top: 10px;
	}

	.currency-group input {
		width: 80px;
		margin-right: 5px;
	}

	.currency-group label {
		margin-right: 10px;
		white-space: nowrap;
	}
</style>

<?php if (isset($css)): ?>
	<?= $css ?>
<?php endif; ?>
<style>
	.table-flush > tbody > tr:hover {
		--bs-table-hover-bg: transparent;
		background: #363638;
		color: #fff;
	}
	table td {
		vertical-align: middle !important;
		height: 60px;
	}
</style>
