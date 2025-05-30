<?php
include 'model/BarangModel.php';

$action = $_GET['action'] ?? 'index';

switch ($action) {
    case 'index':
        $data = getAllBarang();
        include 'view/barang_list.php';
        break;
    case 'add':
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            addBarang($_POST);
            header('Location: index.php?page=barang');
        }
        include 'view/barang_add.php';
        break;
    case 'edit':
        $id_barang = $_GET['id_barang'];
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            updateBarang($_POST);
            header('Location: index.php?page=barang');
        }
        $barang = getBarangByID($id_barang);
        include 'view/barang_edit.php';
        break;
    case 'delete':
        $id_barang = $_GET['id_barang'];
        deleteBarang($id_barang);
        header('Location: index.php?page=barang');
        break;
}
?>
