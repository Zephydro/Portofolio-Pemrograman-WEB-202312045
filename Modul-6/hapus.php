<?php
include 'koneksi.php';
$id = $_GET['id'];
$koneksi->query("DELETE FROM produk WHERE id_produk = $id");
header("Location: index.php");
?>
