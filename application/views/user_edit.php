<!DOCTYPE html>
<html>

<head>
	<title>Form Edit Data User</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/table.css">
</head>

<body>

	<section>
		<div class="content">
			<h2>Edit Data User</h2>
			<form method="post" action="<?= base_url('user/update'); ?>">
				<input type="hidden" name="id" value="<?= $anggota->id; ?>">
				<table class="table">
					<tr>
						<td>Kode Anggota </td>
						<td><input type="text" value="<?= $anggota->kode_anggota; ?>" name="kode_anggota"></td>
					</tr>
					<tr>
						<td>Nama</td>
						<td><input type="text" value="<?= $anggota->nama; ?>" name="nama"></td>
					</tr>
					<tr>
						<td>Email</td>
						<td><input type="text" value="<?= $anggota->email; ?>" name="email"></td>
					</tr>
					<tr>
						<td>Telepon</td>
						<td><input type="text" value="<?= $anggota->telp; ?>" name="telp"></td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td><input type="text" value="<?= $anggota->alamat; ?>" name="alamat"></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" value="<?= $anggota->password; ?>" name="password"></td>
					</tr>
					<tr>
						<td colspan="2"><button class="edit" type="submit">Ubah</button></td>
					</tr>
				</table>
				<div>

				</div>
			</form>
		</div>
	</section>

</body>

</html>