<!DOCTYPE html>
<html>

<head>
	<title>Form Tambah User</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/table.css">
</head>

<body>
	<h2>Tambah User</h2>
	<form method="post" action="<?= base_url('user/save'); ?>">
		<table class="table">
			<tr>
				<td>Kode Anggota</td>
				<td><input type="text" name="kode_anggota"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>Telpon</td>
				<td><input type="text" name="telp"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
		</table>
		<tr>
			<td colspan="2"><button type="submit" class="delete">Simpan</button></td>
		</tr>
	</form>
</body>

</html>