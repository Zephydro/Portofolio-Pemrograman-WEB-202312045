<?php
// File proses.php - Memproses form buku tamu
// Meskipun JavaScript menangani self-processing, file ini tetap dibuat sesuai kriteria

// Mulai session
session_start();

// Fungsi untuk membersihkan input
function sanitizeInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Fungsi validasi email
function validateEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

// Cek apakah form dikirim dengan metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];
    $success = false;
    
    // Ambil dan bersihkan data dari form
    $nama = isset($_POST['nama']) ? sanitizeInput($_POST['nama']) : '';
    $alamat = isset($_POST['alamat']) ? sanitizeInput($_POST['alamat']) : '';
    $pesan = isset($_POST['pesan']) ? sanitizeInput($_POST['pesan']) : '';
    
    // Validasi input
    if (empty($nama)) {
        $errors[] = "Nama lengkap harus diisi";
    }
    
    if (empty($alamat)) {
        $errors[] = "Alamat email harus diisi";
    } elseif (!validateEmail($alamat)) {
        $errors[] = "Format email tidak valid";
    }
    
    if (empty($pesan)) {
        $errors[] = "Pesan/komentar harus diisi";
    }
    
    // Jika tidak ada error, proses data
    if (empty($errors)) {
        // Buat array data
        $data = [
            'nama' => $nama,
            'email' => $alamat,
            'pesan' => $pesan,
            'timestamp' => date('d/m/Y H:i:s')
        ];
        
        // Simpan ke file JSON (sebagai alternatif database)
        $filename = 'data/buku_tamu.json';
        
        // Buat direktori jika belum ada
        if (!file_exists('data')) {
            mkdir('data', 0777, true);
        }
        
        // Baca data yang sudah ada
        $existingData = [];
        if (file_exists($filename)) {
            $jsonData = file_get_contents($filename);
            $existingData = json_decode($jsonData, true) ?: [];
        }
        
        // Tambahkan data baru di awal array
        array_unshift($existingData, $data);
        
        // Simpan kembali ke file
        if (file_put_contents($filename, json_encode($existingData, JSON_PRETTY_PRINT))) {
            $success = true;
            $_SESSION['success_message'] = "Pesan berhasil dikirim! Terima kasih atas kunjungan Anda.";
        } else {
            $errors[] = "Gagal menyimpan data. Silakan coba lagi.";
        }
    }
    
    // Set session untuk error jika ada
    if (!empty($errors)) {
        $_SESSION['error_message'] = implode(', ', $errors);
    }
    
    // Redirect kembali ke halaman utama
    header('Location: index.php');
    exit();
}

// Jika bukan POST request, redirect ke halaman utama
header('Location: index.php');
exit();
?>