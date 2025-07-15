// Data storage untuk pesan buku tamu
let bukuTamuData = [];

// Fungsi untuk memuat data dari localStorage
function loadData() {
    const savedData = localStorage.getItem('bukuTamuData');
    if (savedData) {
        bukuTamuData = JSON.parse(savedData);
        displayMessages();
    }
}

// Fungsi untuk menyimpan data ke localStorage
function saveData() {
    localStorage.setItem('bukuTamuData', JSON.stringify(bukuTamuData));
}

// Fungsi validasi input
function validateInput(nama, email, pesan) {
    const errors = [];
    
    // Validasi nama (tidak boleh kosong)
    if (!nama.trim()) {
        errors.push('Nama lengkap harus diisi');
    }
    
    // Validasi email
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!email.trim()) {
        errors.push('Alamat email harus diisi');
    } else if (!emailRegex.test(email)) {
        errors.push('Format email tidak valid');
    }
    
    // Validasi pesan (tidak boleh kosong)
    if (!pesan.trim()) {
        errors.push('Pesan/komentar harus diisi');
    }
    
    return errors;
}

// Fungsi untuk membersihkan input (mencegah XSS)
function sanitizeInput(input) {
    const div = document.createElement('div');
    div.textContent = input;
    return div.innerHTML;
}

// Fungsi untuk menampilkan pesan
function displayMessages() {
    const container = document.getElementById('pesanContainer');
    
    if (bukuTamuData.length === 0) {
        container.innerHTML = '<p class="no-data">Belum ada pesan yang dikirim.</p>';
        return;
    }
    
    let html = '';
    bukuTamuData.forEach((item, index) => {
        html += `
            <div class="pesan-item">
                <h4>${sanitizeInput(item.nama)}</h4>
                <div class="email">${sanitizeInput(item.email)}</div>
                <div class="pesan-text">${sanitizeInput(item.pesan)}</div>
                <div class="timestamp">Dikirim pada: ${item.timestamp}</div>
            </div>
        `;
    });
    
    container.innerHTML = html;
}

// Fungsi untuk menampilkan pesan sukses atau error
function showMessage(message, type = 'success') {
    const existingMessage = document.querySelector('.success-message, .error-message');
    if (existingMessage) {
        existingMessage.remove();
    }
    
    const messageDiv = document.createElement('div');
    messageDiv.className = type === 'success' ? 'success-message' : 'error-message';
    messageDiv.textContent = message;
    
    const formSection = document.querySelector('.form-section');
    formSection.insertBefore(messageDiv, formSection.querySelector('form'));
    
    // Hapus pesan setelah 5 detik
    setTimeout(() => {
        messageDiv.remove();
    }, 5000);
}

// Event listener untuk form submission
document.addEventListener('DOMContentLoaded', function() {
    loadData();
    
    const form = document.getElementById('bukuTamuForm');
    
    form.addEventListener('submit', function(e) {
        e.preventDefault(); // Mencegah form submit normal
        
        // Ambil data dari form
        const nama = document.getElementById('nama').value;
        const email = document.getElementById('alamat').value;
        const pesan = document.getElementById('pesan').value;
        
        // Validasi input
        const errors = validateInput(nama, email, pesan);
        
        if (errors.length > 0) {
            showMessage('Error: ' + errors.join(', '), 'error');
            return;
        }
        
        // Buat objek data baru
        const newEntry = {
            nama: nama.trim(),
            email: email.trim(),
            pesan: pesan.trim(),
            timestamp: new Date().toLocaleString('id-ID')
        };
        
        // Tambahkan ke array (di awal array agar pesan terbaru muncul di atas)
        bukuTamuData.unshift(newEntry);
        
        // Simpan data
        saveData();
        
        // Tampilkan pesan sukses
        showMessage('Pesan berhasil dikirim! Terima kasih atas kunjungan Anda.');
        
        // Reset form
        form.reset();
        
        // Update tampilan
        displayMessages();
        
        // Scroll ke area tampilan data
        document.querySelector('.data-section').scrollIntoView({ 
            behavior: 'smooth' 
        });
    });
    
    // Validasi real-time untuk input
    const inputs = form.querySelectorAll('input, textarea');
    inputs.forEach(input => {
        input.addEventListener('blur', function() {
            if (this.value.trim() === '') {
                this.style.borderColor = '#dc3545';
            } else {
                this.style.borderColor = '#4facfe';
            }
        });
        
        input.addEventListener('input', function() {
            if (this.style.borderColor === 'rgb(220, 53, 69)') {
                this.style.borderColor = '#e1e5e9';
            }
        });
    });
});

// Fungsi untuk menghapus semua data (untuk testing)
function clearAllData() {
    if (confirm('Apakah Anda yakin ingin menghapus semua data buku tamu?')) {
        bukuTamuData = [];
        saveData();
        displayMessages();
        showMessage('Semua data telah dihapus.');
    }
}

// Tambahkan tombol clear data (hanya untuk development/testing)
if (window.location.hostname === 'localhost' || window.location.hostname === '127.0.0.1') {
    document.addEventListener('DOMContentLoaded', function() {
        const clearButton = document.createElement('button');
        clearButton.textContent = 'Clear All Data (Dev Only)';
        clearButton.style.background = '#dc3545';
        clearButton.style.marginLeft = '10px';
        clearButton.onclick = clearAllData;
        
        const submitButton = document.querySelector('button[type="submit"]');
        submitButton.parentNode.appendChild(clearButton);
    });
}