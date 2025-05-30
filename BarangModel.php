<?php
function getConnection() {
    return new mysqli("localhost", "root", "", "db_barang");
}

function getAllBarang() {
    $conn = getConnection();
    $result = $conn->query("SELECT * FROM barang");
    return $result->fetch_all(MYSQLI_ASSOC);
}

function getBarangByID($id_barang) {
    $conn = getConnection();
    $stmt = $conn->prepare("SELECT * FROM barang WHERE id_barang = ?");
    $stmt->bind_param("s", $id_barang);
    $stmt->execute();
    return $stmt->get_result()->fetch_assoc();
}

function addBarang($data) {
    $conn = getConnection();
    $stmt = $conn->prepare("INSERT INTO barang (kode_barang, nama_barang) VALUES (?, ?)");
    $stmt->bind_param("ss", $data['kode_barang'], $data['nama_barang']);
    $stmt->execute();
}

function updateBarang($data) {
    $conn = getConnection();
    $stmt = $conn->prepare("UPDATE tbl_barang SET kode_barang=?, nama_barang=? WHERE id_barang=?");
    $stmt->bind_param("sss", $data['kode_barang'], $data['nama_barang'], $data['id_barang']);
    $stmt->execute();
}

function deleteBarang($id_barang) {
    $conn = getConnection();
    $stmt = $conn->prepare("DELETE FROM barang WHERE id_barang = ?");
    $stmt->bind_param("s", $id_barang);
    $stmt->execute();
}
?>
