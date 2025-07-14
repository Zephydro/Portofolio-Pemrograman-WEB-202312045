<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f2f5;
            font-family: 'Segoe UI', sans-serif;
        }
        .container {
            margin-top: 60px;
        }
        .card {
            border: none;
            border-radius: 15px;
            background-color: #fff;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            padding: 20px;
        }
        h2 {
            color:rgb(0, 0, 0);
            font-weight: 600;
            margin-bottom: 30px;
        }
        .btn-gray {
            background-color:rgb(55, 102, 144);
            color: white;
            transition: background-color 0.3s ease;
        }
        .btn-gray:hover {
            background-color:rgb(19, 45, 65);
        }
        table tr:hover {
            background-color: #f8f9fa;
            transition: background-color 0.3s ease;
        }
        .table th {
            background-color: #dee2e6;
        }
        .table td, .table th {
            vertical-align: middle;
        }
        @media (max-width: 768px) {
            h2 {
                font-size: 1.5rem;
            }
            .table-responsive {
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>
<div class="container">
    <div class="text-center mb-4">
        <h2>Daftar Produk Toko Elektronik Jaya</h2>
        <a href="tambah.php" class="btn btn-gray">+ Tambah Produk Baru</a>
    </div>

    <div class="card table-responsive">
        <table class="table table-bordered table-hover align-middle">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th style="width: 160px;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                $query = $koneksi->query("SELECT * FROM produk");
                while ($row = $query->fetch_assoc()) {
                    echo "<tr>
                            <td>{$no}</td>
                            <td>{$row['nama_produk']}</td>
                            <td>Rp " . number_format($row['harga'], 0, ',', '.') . "</td>
                            <td>{$row['stok']}</td>
                            <td>
                                <a href='edit.php?id={$row['id_produk']}' class='btn btn-warning btn-sm'>Edit</a>
                                <a href='hapus.php?id={$row['id_produk']}' onclick=\"return confirm('apakah anda ingin menghapusnya?');\" class='btn btn-danger btn-sm'>Hapus</a>
                            </td>
                          </tr>";
                    $no++;
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
