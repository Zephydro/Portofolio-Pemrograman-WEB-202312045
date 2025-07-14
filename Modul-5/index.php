<?php
// Mulai session untuk menampilkan pesan
session_start();

// Fungsi untuk membaca data dari file JSON
function getBukuTamuData() {
    $filename = 'data/buku_tamu.json';
    if (file_exists($filename)) {
        $jsonData = file_get_contents($filename);
        return json_decode($jsonData, true) ?: [];
    }
    return [];
}

$bukuTamuData = getBukuTamuData();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu Digital STITEK Bontang</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Buku Tamu Digital STITEK Bontang</h1>
        </header>
        
        <main>
            <section class="form-section">
                <h2>Form Input Buku Tamu</h2>
                
                <?php if (isset($_SESSION['success_message'])): ?>
                    <div class="success-message">
                        <?php echo htmlspecialchars($_SESSION['success_message']); ?>
                    </div>
                    <?php unset($_SESSION['success_message']); ?>
                <?php endif; ?>
                
                <?php if (isset($_SESSION['error_message'])): ?>
                    <div class="error-message">
                        Error: <?php echo htmlspecialchars($_SESSION['error_message']); ?>
                    </div>
                    <?php unset($_SESSION['error_message']); ?>
                <?php endif; ?>
                
                <form id="bukuTamuForm" method="POST" action="proses.php">
                    <div class="form-group">
                        <label for="nama">Nama Lengkap:</label>
                        <input type="text" id="nama" name="nama" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="alamat">Alamat Email:</label>
                        <input type="email" id="alamat" name="alamat" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="pesan">Pesan/Komentar:</label>
                        <textarea id="pesan" name="pesan" rows="4" required></textarea>
                    </div>
                    
                    <button type="submit">Kirim Pesan</button>
                </form>
            </section>
            
            <section class="data-section">
                <h2>Area Tampilan Data</h2>
                <div id="pesanContainer">
                    <?php if (empty($bukuTamuData)): ?>
                        <p class="no-data">Belum ada pesan yang dikirim.</p>
                    <?php else: ?>
                        <?php foreach ($bukuTamuData as $item): ?>
                            <div class="pesan-item">
                                <h4><?php echo htmlspecialchars($item['nama']); ?></h4>
                                <div class="email"><?php echo htmlspecialchars($item['email']); ?></div>
                                <div class="pesan-text"><?php echo nl2br(htmlspecialchars($item['pesan'])); ?></div>
                                <div class="timestamp">Dikirim pada: <?php echo htmlspecialchars($item['timestamp']); ?></div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </section>
        </main>
    </div>
    
    <script src="script.js"></script>
</body>
</html>