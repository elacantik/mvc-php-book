CREATE DATABASE IF NOT EXISTS perpustakaan
CHARACTER SET utf8mb4
COLLATE utf8mb4_unicode_ci;

USE perpustakaan;

CREATE TABLE IF NOT EXISTS buku (
    id INT AUTO_INCREMENT PRIMARY KEY,
    isbn VARCHAR(20) NOT NULL UNIQUE,
    judul VARCHAR(150) NOT NULL,
    penulis VARCHAR(100) NOT NULL,
    penerbit VARCHAR(100) NOT NULL,
    tahun_terbit INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO buku (isbn, judul, penulis, penerbit, tahun_terbit) VALUES
('978-602-03-3160-7', 'Hujan', 'Tere Liye', 'Gramedia Pustaka Utama', 2016),
('978-979-3062-79-2', 'Laskar Pelangi', 'Andrea Hirata', 'Bentang Pustaka', 2005),
('978-602-06-3317-6', 'Bumi', 'Tere Liye', 'Gramedia Pustaka Utama', 2014);