<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form Input Matakuliah</title>
	<link rel="stylesheet" href="<?=base_url('assets/bootstrap/css/bootstrap.min.css')?>">
</head>
<body>
	<div class="col-md-6 mx-auto mt-5">
		<div class="card">
			<div class="card-header">
				<h3>Form Input Matakuliah</h3>
			</div>
			<div class="card-body">
				<form action="<?= base_url('matakuliah/cetak') ?>" method="post">
					<div class="form-group">
						<label>Kode MTK</label>
						<input type="text" name="kode" class="form-control" value="<?php echo set_value('kode'); ?>">
						<?php echo form_error('kode'); ?>
					</div>
					<div class="form-group">
						<label>Nama MTK</label>
						<input type="text" name="nama" class="form-control" value="<?php echo set_value('nama'); ?>">
						<?php echo form_error('kode'); ?>
					</div>
					<div class="form-group">
						<label>SKS</label>
						<select name="sks" class="form-control">
							<option value="">Pilih SKS</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="3">3</option>
						</select>
					</div>
					<button class="btn btn-primary btn-sm">Simpan</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
