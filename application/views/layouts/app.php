<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?=$judul?></title>
		<link rel="stylesheet" href="<?=base_url('assets/bootstrap/css/bootstrap.min.css')?>">
		<style>
			body {
				background-color: #f0f0f0;
			}
		</style>
	</head>
	<body>
		<?php $this->load->view('layouts/_partials/navbar'); ?>
		<?php $this->load->view($content); ?>
		<?php $this->load->view('layouts/_partials/footer'); ?>
	</body>
</html>
