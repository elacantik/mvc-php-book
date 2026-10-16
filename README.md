# MVC PHP Native - Data Buku

Aplikasi CRUD sederhana untuk mempelajari pola Model-View-Controller (MVC) pada PHP Native menggunakan studi kasus Data Buku.

## Kebutuhan Sistem
- PHP 8.0 atau lebih baru
- MySQL / MariaDB
- Web server lokal (XAMPP / Laragon)
- Git

## Instalasi
1. Clone atau salin folder proyek ini ke folder web server (`htdocs` atau `www`).
2. Impor file database `database/buku.sql` melalui phpMyAdmin atau terminal.
3. Sesuaikan konfigurasi koneksi database pada `config/database.php`.
4. Buka aplikasi melalui browser: `http://localhost/mvc-buku/public/index.php`.

## Struktur MVC
- `app/models/` : Akses dan operasi data buku.
- `app/controllers/` : Alur request dan pemanggilan Model/View.
- `app/views/` : Tampilan antarmuka HTML untuk data buku.
- `config/` : Konfigurasi koneksi database PDO.
- `database/` : Skema SQL dan data awal buku.
- `public/` : Entry point aplikasi (routing).

## Fitur Aplikasi
- Menampilkan daftar buku (ISBN, Judul, Penulis, Penerbit, Tahun Terbit)
- Menambahkan data buku baru
- Mengedit / memperbarui data buku
- Menghapus data buku

## Histori Commit Git
Gunakan `git log --oneline --graph --decorate` untuk melihat tahapan pengembangan proyek.