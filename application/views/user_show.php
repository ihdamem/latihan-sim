<!DOCTYPE html>
<html>

<head>
	<title>Data User</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/table.css">
</head>

<body>
	<section>
		<div class="content">
			<h2>Data User</h2>
			<table class="table">
				<tr class="head">
					<td>No</td>
					<td>Kode Anggota</td>
					<td>Nama</td>
					<td>Email</td>
					<td>Telpon</td>
					<td>Alamat</td>
					<td colspan="2">
						<center>Opsi</center>
					</td>
				</tr>
				<?php
				foreach ($anggota->result() as $i => $anggota) {
				?>
					<tr>
						<td><?= ++$i; ?></td>
						<td><?= $anggota->kode_anggota; ?></td>
						<td><?= $anggota->nama; ?></td>
						<td><?= $anggota->email; ?></td>
						<td><?= $anggota->telp; ?></td>
						<td><?= $anggota->alamat; ?></td>
						<td>
							<button class="edit" onclick="window.location.href='<?= base_url('user/edit/' . $anggota->id_anggota); ?>'">Ubah</button>
						</td>
						<td>
							<button class="delete" onclick="window.location.href='<?= base_url('user/delete/' . $anggota->id_anggota); ?>'">Hapus</button>
						</td>
					</tr>
				<?php
				} ?>
			</table>
			<div class="grupbutton"">
				<a href=" <?= base_url('user/add'); ?>"><button class="user">Tambah Anggota</button></a>
				<a href="<?= base_url('data/show'); ?>"><button class="show">Data Buku</button></a>
				<a href=" <?= base_url('userlogout'); ?>"><button class="logout">Logout</button></a>
			</div>
		</div>
	</section>
</body>

</html>