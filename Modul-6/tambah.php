<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Produk</title>
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
            background-color:rgb(37, 92, 141);
            color: white;
            transition: background-color 0.3s ease;
        }
        .btn-gray:hover {
            background-color:rgb(11, 35, 54);
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
        <h2>Tambah Produk</h2>
        <form method="post">
            <div class="mb-3">
                <label for="nama_produk" class="form-label">Nama Produk</label>
                <input type="text" name="nama_produk" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="number" name="harga" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="stok" class="form-label">Stok</label>
                <input type="number" name="stok" class="form-control" required>
            </div>
            <div class="d-flex justify-content-between">
                <a href="index.php" class="btn btn-secondary">← Kembali</a>
                <button type="submit" name="simpan" class="btn btn-gray">Simpan</button>
            </div>
        </form>
    </div>
</div>

<?php
if (isset($_POST['simpan'])) {
    $nama = $_POST['nama_produk'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $koneksi->query("INSERT INTO produk (nama_produk, harga, stok) VALUES ('$nama', $harga, $stok)");
    header("Location: index.php");
}
?>
</body>
</html>
