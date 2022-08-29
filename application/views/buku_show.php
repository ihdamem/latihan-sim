<!DOCTYPE html>
<html>

<head>
    <title>Data Buku</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/table.css">
</head>

<body>
    <section>
        <div class="content">
            <h2>Buku</h2>
            <div class="grupbutton">
                <a href="<?= base_url('data/add'); ?>"><button class="user">Tambah Buku</button></a>
            </div>
            <table class="table">
                <tr class="head">
                    <td>No</td>
                    <td>Kode Buku</td>
                    <td>Judul</td>
                    <td>Keterangan</td>
                    <td>Pengarang</td>
                    <td>Penerbit</td>
                    <td>Tahun</td>
                    <td colspan="2">
                        <center>Opsi</center>
                    </td>
                </tr>
                <?php
                foreach ($buku->result() as $i => $data) {
                ?>
                    <tr>
                        <td><?= ++$i; ?></td>
                        <td><?= $data->kode_buku; ?></td>
                        <td><?= $data->judul; ?></td>
                        <td><?= $data->keterangan; ?></td>
                        <td><?= $data->pengarang; ?></td>
                        <td><?= $data->penerbit; ?></td>
                        <td><?= $data->tahun; ?></td>
                        <td><a href="<?= base_url('data/edit/' . $data->id_buku); ?>"><button class="edit">Ubah</button></a></td>
                        <td><a href="<?= base_url('data/delete/' . $data->id_buku); ?>"><button class="delete">Hapus</button></a></td>
                    </tr>
                <?php
                } ?>
            </table>
            <div class="grupbutton">
                <div class="rightbutton">
                    <a href="<?= base_url('user/show'); ?>"><button class="logout">Data Anggota</button></a>
                </div>
            </div>
        </div>
    </section>
</body>

</html>