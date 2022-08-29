<!DOCTYPE html>
<html>

<head>
    <title>Form Tambah Buku</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/table.css">
</head>

<body>
    <h2>Form Tambah Buku</h2>
    <form method="post" action="<?= base_url('data/save'); ?>">
        <table class="table">
            <tr>
                <td>Kode Buku</td>
                <td><input type="text" name="kode_buku"></td>
            </tr>
            <tr>
                <td>Judul</td>
                <td><input type="text" name="judul"></td>
            </tr>
            <tr>
                <td>Keterangan</td>
                <td><input type="text" name="keterangan"></td>
            </tr>
            <tr>
                <td>Pengarang</td>
                <td><input type="text" name="pengarang"></td>
            </tr>
            <tr>
                <td>Penerbit</td>
                <td><input type="text" name="penerbit"></td>
            </tr>
            <tr>
                <td>Tahun</td>
                <td><input type="year" name="tahun"></td>
            </tr>
            <td colspan="2"><button type="submit" class="edit">Simpan</button></td>
            </tr>
        </table>
    </form>
</body>

</html>