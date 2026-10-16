<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Buku Baru</title>
    <style>
        * { box-sizing: border-box; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
        body { background-color: #f8fafc; color: #334155; margin: 0; padding: 30px; }
        .container { max-width: 500px; margin: 0 auto; background: #ffffff; padding: 25px; border-radius: 12px; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1); }
        h2 { margin-top: 0; margin-bottom: 20px; color: #1e293b; font-size: 20px; }
        .form-group { margin-bottom: 16px; }
        label { display: block; margin-bottom: 6px; font-weight: 600; font-size: 14px; color: #475569; }
        input[type="text"], input[type="number"] { width: 100%; padding: 10px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 14px; outline: none; transition: 0.2s; }
        input[type="text"]:focus, input[type="number"]:focus { border-color: #2563eb; box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1); }
        .btn-group { display: flex; gap: 10px; margin-top: 24px; }
        .btn { flex: 1; padding: 10px; background-color: #16a34a; color: white; border: none; border-radius: 6px; font-weight: 600; cursor: pointer; text-align: center; text-decoration: none; font-size: 14px; }
        .btn:hover { background-color: #15803d; }
        .btn-secondary { background-color: #e2e8f0; color: #475569; }
        .btn-secondary:hover { background-color: #cbd5e1; }
    </style>
</head>
<body>

<div class="container">
    <h2>➕ Tambah Buku Baru</h2>

    <form action="index.php?page=buku&action=store" method="POST">
        <div class="form-group">
            <label for="isbn">ISBN</label>
            <input type="text" id="isbn" name="isbn" placeholder="Contoh: 978-602-03-2478-4" required>
        </div>

        <div class="form-group">
            <label for="judul">Judul Buku</label>
            <input type="text" id="judul" name="judul" placeholder="Masukkan judul buku" required>
        </div>

        <div class="form-group">
            <label for="penulis">Penulis</label>
            <input type="text" id="penulis" name="penulis" placeholder="Nama penulis" required>
        </div>

        <div class="form-group">
            <label for="penerbit">Penerbit</label>
            <input type="text" id="penerbit" name="penerbit" placeholder="Nama penerbit" required>
        </div>

        <div class="form-group">
            <label for="tahun_terbit">Tahun Terbit</label>
            <input type="number" id="tahun_terbit" name="tahun_terbit" placeholder="Contoh: 2024" required>
        </div>

        <div class="btn-group">
            <button type="submit" class="btn">Simpan Buku</button>
            <a href="index.php?page=buku" class="btn btn-secondary">Batal</a>
        </div>
    </form>
</div>

</body>
</html>