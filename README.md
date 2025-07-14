# 🌐 Portfolio Pemrograman Web

**Mata Kuliah: Pemrograman Web**  
**NIM: 202312056**  
**Nama: M. Ammar Alfarabi**  
**Kampus: Sekolah Tinggi Teknologi Bontang**

---

## 📋 Deskripsi Project

Repository ini berisi kumpulan tugas dan project dari mata kuliah Pemrograman Web yang mencakup pembelajaran progresif dari HTML dasar hingga aplikasi web dinamis dengan PHP dan database. Setiap modul dirancang untuk membangun pemahaman yang komprehensif tentang teknologi web modern.

## 🛠️ Teknologi yang Digunakan

| Teknologi      | Versi  | Penggunaan                              |
| -------------- | ------ | --------------------------------------- |
| **HTML5**      | Latest | Struktur dan markup halaman web         |
| **CSS3**       | Latest | Styling, layout, dan responsive design  |
| **JavaScript** | ES6+   | Interaktivitas dan dynamic content      |
| **Bootstrap**  | 5.3.3  | Framework CSS untuk responsive design   |
| **PHP**        | 7.4+   | Server-side scripting dan backend logic |
| **MySQL**      | 8.0+   | Database management system              |

## 📁 Struktur Project

```
Portofolio-Pemrograman-WEB-202312056/
├── Modul-1/                    # HTML Fundamentals
│   ├── tugas_modul_1.html     # Form pendaftaran mahasiswa
│   └── STITEK Logo 2.png      # Asset logo kampus
├── Modul-2/                    # CSS & Responsive Design
│   ├── tugas_modul2.html      # HTML structure
│   └── tugas_modul2.css       # CSS styling dengan grid layout
├── Modul-3/                    # Bootstrap Framework
│   ├── Tugas - Modul 3.html   # Company profile dengan Bootstrap
│   └── assets/                # Image assets
│       ├── tugas1.png
│       ├── tugas2.png
│       └── tugas3.png
├── Modul-4/                    # JavaScript Programming
│   └── Tugas.html             # E-commerce dengan JavaScript
├── Modul-5/                    # PHP Fundamentals
│   └── tugas.php              # Buku tamu digital dengan validasi
├── Modul-6/                    # PHP & Database Integration
│   └── Crud Toko Online/      # Aplikasi CRUD lengkap
│       ├── index.php          # Halaman utama
│       ├── tambah.php         # Form tambah produk
│       ├── edit.php           # Form edit produk
│       ├── hapus.php          # Fungsi hapus produk
│       ├── koneksi_toko.php   # Konfigurasi database
│       └── koneksi.txt        # Backup konfigurasi
└── README.md                   # Dokumentasi project
```

## 🎯 Detail Modul Pembelajaran

### 📝 Modul 1: HTML Fundamentals

**File:** `Modul-1/tugas_modul_1.html`

**Deskripsi:** Formulir pendaftaran mahasiswa baru yang mendemonstrasikan penggunaan elemen HTML dasar.

**Fitur:**

- Form validation dengan atribut `required`
- Input types: text, email, radio, checkbox, select, textarea
- Fieldset untuk grouping form elements
- Inline CSS styling
- External link integration

**Konsep yang Dipelajari:**

- Struktur HTML5 semantic
- Form elements dan attributes
- Basic styling dengan inline CSS
- Accessibility considerations

---

### 🎨 Modul 2: CSS & Responsive Design

**Files:** `Modul-2/tugas_modul2.html`, `Modul-2/tugas_modul2.css`

**Deskripsi:** Implementasi CSS Grid Layout dengan responsive design untuk berbagai ukuran layar.

**Fitur:**

- CSS Grid Layout system
- Responsive breakpoints (768px, 480px)
- Custom color scheme dan typography
- Mobile-first approach

**Konsep yang Dipelajari:**

- CSS Grid vs Flexbox
- Media queries untuk responsive design
- CSS custom properties
- Box model dan positioning

---

### 🚀 Modul 3: Bootstrap Framework

**File:** `Modul-3/Tugas - Modul 3.html`

**Deskripsi:** Company profile "BravoTech" menggunakan Bootstrap framework untuk rapid development.

**Fitur:**

- Responsive navigation dengan hamburger menu
- Bootstrap grid system
- Card components untuk product showcase
- Table styling dengan Bootstrap classes
- Footer dengan social media links

**Konsep yang Dipelajari:**

- Bootstrap component library
- Utility classes dan spacing
- Responsive grid system
- Component customization

---

### ⚡ Modul 4: JavaScript Programming

**File:** `Modul-4/Tugas.html`

**Deskripsi:** Aplikasi e-commerce "Toko Elektronik Cepat" dengan JavaScript interaktivity.

**Fitur:**

- Real-time clock display
- Image slideshow dengan navigation
- Dynamic product catalog
- Form validation dan error handling
- Shopping cart calculation dengan promo codes
- Receipt generation

**Konsep yang Dipelajari:**

- DOM manipulation
- Event handling
- Array dan object manipulation
- Form validation
- Local storage (optional)

---

### 🔧 Modul 5: PHP Fundamentals

**File:** `Modul-5/tugas.php`

**Deskripsi:** Buku tamu digital STITEK Bontang dengan server-side validation.

**Fitur:**

- Server-side form processing
- Input validation dan sanitization
- Error handling dan user feedback
- Responsive design dengan custom CSS
- XSS protection dengan `htmlspecialchars()`

**Konsep yang Dipelajari:**

- PHP syntax dan variables
- Form handling dengan `$_POST`
- Input validation techniques
- Security best practices
- PHP dan HTML integration

---

### 🗄️ Modul 6: PHP & Database Integration

**Directory:** `Modul-6/Crud Toko Online/`

**Deskripsi:** Aplikasi CRUD (Create, Read, Update, Delete) untuk manajemen produk toko online.

**Fitur:**

- Database connection dengan MySQLi
- Full CRUD operations
- Data listing dengan table format
- Form handling untuk input/edit
- Confirmation dialogs untuk delete operations
- Error handling untuk database operations

**Files:**

- `index.php` - Halaman utama dengan listing produk
- `tambah.php` - Form tambah produk baru
- `edit.php` - Form edit produk existing
- `hapus.php` - Fungsi delete produk
- `koneksi_toko.php` - Database configuration

**Konsep yang Dipelajari:**

- Database design dan normalization
- SQL queries (SELECT, INSERT, UPDATE, DELETE)
- PHP-MySQL integration
- Security considerations untuk database
- Error handling dan debugging

## 🚀 Cara Menjalankan Project

### Prerequisites

- **Web Server:** Apache/Nginx (XAMPP, WAMP, atau LAMP)
- **PHP:** Version 7.4 atau lebih tinggi
- **MySQL:** Version 8.0 atau lebih tinggi
- **Browser:** Chrome, Firefox, Safari, atau Edge (versi terbaru)

### Setup Instructions

#### 1. Clone Repository

```bash
git clone [repository-url]
cd Portofolio-Pemrograman-WEB-202312056
```

#### 2. Setup Web Server

- Install XAMPP/WAMP/LAMP
- Start Apache dan MySQL services
- Copy project folder ke `htdocs` (XAMPP) atau `www` (WAMP)

#### 3. Database Setup (untuk Modul 6)

```sql
-- Buat database
CREATE DATABASE db_toko;

-- Gunakan database
USE db_toko;

-- Buat tabel produk
CREATE TABLE produk (
    id_produk INT AUTO_INCREMENT PRIMARY KEY,
    nama_produk VARCHAR(100) NOT NULL,
    harga DECIMAL(10,2) NOT NULL,
    stok INT NOT NULL
);

-- Insert sample data
INSERT INTO produk (nama_produk, harga, stok) VALUES
('Laptop Gaming', 15000000.00, 5),
('Mouse Wireless', 250000.00, 20),
('Keyboard Mechanical', 800000.00, 15);
```

#### 4. Konfigurasi Database

Edit file `Modul-6/Crud Toko Online/koneksi_toko.php`:

```php
<?php
$servername = "localhost";
$username = "root";        // Sesuaikan dengan username MySQL Anda
$password = "";            // Sesuaikan dengan password MySQL Anda
$dbname = "db_toko";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
```

### 🌐 Akses Project

| Modul   | URL                                                              | Deskripsi                 |
| ------- | ---------------------------------------------------------------- | ------------------------- |
| Modul 1 | `http://localhost/[project-folder]/Modul-1/tugas_modul_1.html`   | Form Pendaftaran          |
| Modul 2 | `http://localhost/[project-folder]/Modul-2/tugas_modul2.html`    | CSS Grid Layout           |
| Modul 3 | `http://localhost/[project-folder]/Modul-3/Tugas - Modul 3.html` | Bootstrap Company Profile |
| Modul 4 | `http://localhost/[project-folder]/Modul-4/Tugas.html`           | JavaScript E-commerce     |
| Modul 5 | `http://localhost/[project-folder]/Modul-5/tugas.php`            | PHP Buku Tamu             |
| Modul 6 | `http://localhost/[project-folder]/Modul-6/Crud Toko Online/`    | PHP CRUD Application      |

## 📱 Responsive Design

Semua project telah dioptimasi untuk berbagai ukuran layar:

- **Desktop:** ≥ 1024px
- **Tablet:** 768px - 1023px
- **Mobile:** ≤ 767px

## 🔒 Security Features

- **Input Validation:** Client-side dan server-side validation
- **XSS Protection:** Penggunaan `htmlspecialchars()` untuk sanitasi input
- **SQL Injection Prevention:** Prepared statements (dapat ditingkatkan)
- **CSRF Protection:** Token validation (untuk pengembangan lanjutan)

## 🎨 Design Patterns

- **Mobile-First Approach:** Responsive design dimulai dari mobile
- **Progressive Enhancement:** Fitur ditambahkan secara bertahap
- **Separation of Concerns:** HTML, CSS, dan JavaScript terpisah
- **DRY Principle:** Don't Repeat Yourself dalam kode

## 📈 Learning Outcomes

Setelah menyelesaikan semua modul, mahasiswa mampu:

1. **Frontend Development:**

   - Membuat struktur HTML semantik
   - Implementasi CSS modern dengan Grid/Flexbox
   - Menggunakan framework CSS (Bootstrap)
   - Programming JavaScript untuk interaktivitas

2. **Backend Development:**

   - PHP programming fundamentals
   - Database integration dengan MySQL
   - Server-side validation dan security

3. **Full-Stack Integration:**
   - Menggabungkan frontend dan backend
   - Database design dan management
   - Deployment dan hosting considerations

## 🤝 Contributing

Untuk kontribusi atau perbaikan:

1. Fork repository ini
2. Buat branch baru (`git checkout -b feature/improvement`)
3. Commit perubahan (`git commit -am 'Add new feature'`)
4. Push ke branch (`git push origin feature/improvement`)
5. Buat Pull Request

## 📞 Contact

**M. Ammar Alfarabi**

- Email: alfarabibravo8@gmail.com
- Kampus: Sekolah Tinggi Teknologi Bontang
- NIM: 202312056
- Instagram: @blck_sunday

## 📄 License

Project ini dibuat untuk keperluan akademik mata kuliah Pemrograman Web di STITEK Bontang.

---

**© 2025 M. Ammar Alfarabi - STITEK Bontang**
