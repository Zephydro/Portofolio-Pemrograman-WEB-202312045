<?php
include 'koneksi.php';
$id = $_GET['id'];
$query = $koneksi->query("SELECT * FROM produk WHERE id_produk = $id");
$data = $query->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f2f5;
            font-family: 'Segoe UI', sans-serif;
        }
        .container {
            margin-top: 60px;
            max-width: 600px;
        }
        .card {
            border: none;
            border-radius: 15px;
            background-color: #fff;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            padding: 25px;
        }
        h2 {
            text-align: center;
            color:rgb(0, 0, 0);
            font-weight: 600;
            margin-bottom: 30px;
        }
        .btn-gray {
            background-color:rgb(80, 148, 41);
            color: white;
            transition: background-color 0.3s ease;
        }
        .btn-gray:hover {
            background-color:rgb(40, 130, 22);
        }
        label {
            font-weight: 500;
            color: #333;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="card">
        <h2>Edit Produk</h2>
        <form method="post">
            <div class="mb-3">
                <label class="form-label">Nama Produk</label>
                <input type="text" name="nama_produk" class="form-control" value="<?= $data['nama_produk']; ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Harga</label>
                <input type="number" name="harga" class="form-control" value="<?= $data['harga']; ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Stok</label>
                <input type="number" name="stok" class="form-control" value="<?= $data['stok']; ?>" required>
            </div>
            <div class="d-flex justify-content-between">
                <a href="index.php" class="btn btn-secondary">← Kembali</a>
                <button type="submit" name="update" class="btn btn-gray">Simpan Perubahan</button>
            </div>
        </form>
    </div>
</div>

<?php
if (isset($_POST['update'])) {
    $nama = $_POST['nama_produk'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $koneksi->query("UPDATE produk SET nama_produk='$nama', harga=$harga, stok=$stok WHERE id_produk=$id");
    header("Location: index.php");
}
?>
</body>
</html>
