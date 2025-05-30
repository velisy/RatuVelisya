<?php include("header.php"); ?>

<h2>Edit Barang</h2>
<form method="post">
    <input type="hidden" name="id_barang" value="<?= $barang['id_barang'] ?>">
    Kode Barang: <input type="text" name="kode_barang" value="<?= $barang['kode_barang'] ?>"><br>
    Nama Barang: <input type="text" name="nama_barang" value="<?= $barang['nama_barang'] ?>"><br>
    <button type="submit">Update</button>
</form>

<?php include("footer.php"); ?>