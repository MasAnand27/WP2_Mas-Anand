<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tampil Matakuliah</title>
	<link rel="stylesheet" href="<?=base_url('assets/bootstrap/css/bootstrap.min.css')?>">
</head>
<body>
	<div class="col-md-6 mx-auto mt-5">
		<div class="card">
			<div class="card-header">
				<h3>Tampil Data Matakuliah</h3>
			</div>
			<div class="card-body">
				<table class="table">
					<thead>
						<tr>
							<th>Kode MTK</th>
							<th>Nama MTK</th>
							<th>SKS</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><?=$kode?></td>
							<td><?=$nama?></td>
							<td><?=$sks?></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>
