<?php include("header.php"); ?>

<center> <h2>Daftar Barang</h2> </center>
<center><a href="index.php?page=barang&action=add">Tambah Barang</a> </center>

<?php
     echo ".";
     echo "";
     $nama = "webhozz";
?>
<table style="margin-left:auto;margin-right:auto" border="1">
    <center> <tr><th>Kode Barang</th><th>Nama Barang</th><th>Aksi</th></tr> </center>
    <?php foreach ($data as $barang): ?>
    <tr>
        <td><?= $barang['kode_barang'] ?></td>
        <td><?= $barang['nama_barang'] ?></td>
        <td>
            <a href="index.php?page=barang&action=edit&id_barang=<?= $barang['id_barang'] ?>">Edit</a> |
            <a href="index.php?page=barang&action=delete&id_barang=<?= $barang['id_barang'] ?>" onclick="return confirm('Hapus barang ini?')">Hapus</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

<?php include("footer.php"); ?>
