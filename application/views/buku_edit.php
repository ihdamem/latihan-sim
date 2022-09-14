<!DOCTYPE html>
<html>

<head>
    <title>Form Edit Data Anggota</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/table.css">
</head>

<body>
    <section class="editsiswa">
        <div class="content">
            <h2>Form Edit Data Anggota</h2>
            <form method="post" action="<?= base_url('data/update'); ?>">
                <input type="hidden" name="id_buku" value="<?= $buku->id_buku; ?>">
                <table class="table">
                    <tr>
                        <td>Nama</td>
                        <td><input type="text" value="<?= $buku->kode_buku; ?>" name="kode_buku"></td>
                    </tr>
                    <tr>
                        <td>tempat Lahir</td>
                        <td><input type="text" value="<?= $buku->judul; ?>" name="judul"></td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td><input type="text" value="<?= $buku->keterangan; ?>" name="keterangan"></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td><input type="text" value="<?= $buku->pengarang; ?>" name="pengarang"></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td><input type="text" value="<?= $buku->penerbit ?>" name="penerbit"></td>
                    </tr>
                    <tr>
                        <td>Telpon</td>
                        <td><input type="year" value="<?= $buku->tahun; ?>" name="tahun"></td>
                    </tr>
                    <td colspan="2"><button type="submit" class="edit">Ubah Data</button></td>
                    </tr>
                </table>
            </form>
        </div>
    </section>
</body>

</html>