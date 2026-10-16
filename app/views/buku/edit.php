<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Buku</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; background-color: #f4f6f9; }
        h2 { color: #333; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        input[type="text"], input[type="number"] { width: 300px; padding: 8px; border: 1px solid #ccc; border-radius: 4px; }
        .btn { padding: 8px 15px; background-color: #007bff; color: white; border: none; border-radius: 4px; cursor: pointer; }
        .btn:hover { background-color: #0056b3; }
        .btn-back { display: inline-block; margin-left: 10px; color: #555; text-decoration: none; }
    </style>
</head>
<body>

    <h2>Edit Buku</h2>

    <form action="index.php?page=buku&action=update" method="POST">
        <input type="hidden" name="id" value="<?= $buku['id'] ?>">

        <div class="form-group">
            <label for="isbn">ISBN</label>
            <input type="text" id="isbn" name="isbn" value="<?= htmlspecialchars($buku['isbn']) ?>" required>
        </div>

        <div class="form-group">
            <label for="judul">Judul Buku</label>
            <input type="text" id="judul" name="judul" value="<?= htmlspecialchars($buku['judul']) ?>" required>
        </div>

        <div class="form-group">
            <label for="penulis">Penulis</label>
            <input type="text" id="penulis" name="penulis" value="<?= htmlspecialchars($buku['penulis']) ?>" required>
        </div>

        <div class="form-group">
            <label for="penerbit">Penerbit</label>
            <input type="text" id="penerbit" name="penerbit" value="<?= htmlspecialchars($buku['penerbit']) ?>" required>
        </div>

        <div class="form-group">
            <label for="tahun_terbit">Tahun Terbit</label>
            <input type="number" id="tahun_terbit" name="tahun_terbit" value="<?= htmlspecialchars($buku['tahun_terbit']) ?>" required>
        </div>

        <button type="submit" class="btn">Update</button>
        <a href="index.php?page=buku" class="btn-back">Kembali</a>
    </form>

</body>
</html>