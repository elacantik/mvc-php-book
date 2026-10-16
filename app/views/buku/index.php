<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Katalog Data Buku</title>
    <style>
        * { box-sizing: border-box; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
        body { background-color: #f8fafc; color: #334155; margin: 0; padding: 30px; }
        .container { max-width: 1000px; margin: 0 auto; background: #ffffff; padding: 25px; border-radius: 12px; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1); }
        .header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; }
        h2 { margin: 0; color: #1e293b; font-size: 22px; }
        .btn { display: inline-block; padding: 10px 16px; background-color: #2563eb; color: white; text-decoration: none; border-radius: 6px; font-weight: 500; font-size: 14px; transition: 0.2s; }
        .btn:hover { background-color: #1d4ed8; }
        table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        th, td { padding: 12px 15px; text-align: left; border-bottom: 1px solid #e2e8f0; font-size: 14px; }
        th { background-color: #f1f5f9; color: #475569; font-weight: 600; }
        tr:hover { background-color: #f8fafc; }
        .badge { background-color: #e0e7ff; color: #3730a3; padding: 4px 8px; border-radius: 4px; font-family: monospace; font-size: 12px; }
        .btn-edit { color: #d97706; text-decoration: none; font-weight: 600; margin-right: 8px; }
        .btn-delete { color: #dc2626; text-decoration: none; font-weight: 600; }
        .btn-edit:hover { text-decoration: underline; }
        .btn-delete:hover { text-decoration: underline; }
    </style>
</head>
<body>

<div class="container">
    <div class="header">
        <h2>📚 Katalog Data Buku</h2>
        <a href="index.php?page=buku&action=create" class="btn">+ Tambah Buku</a>
    </div>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>ISBN</th>
                <th>Judul Buku</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun</th>
                <th style="text-align: center;">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($books)): ?>
                <?php $no = 1; foreach ($books as $b): ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><span class="badge"><?= htmlspecialchars($b['isbn']) ?></span></td>
                        <td><strong><?= htmlspecialchars($b['judul']) ?></strong></td>
                        <td><?= htmlspecialchars($b['penulis']) ?></td>
                        <td><?= htmlspecialchars($b['penerbit']) ?></td>
                        <td><?= htmlspecialchars($b['tahun_terbit']) ?></td>
                        <td style="text-align: center;">
                            <a href="index.php?page=buku&action=edit&id=<?= $b['id'] ?>" class="btn-edit">Edit</a>
                            <a href="index.php?page=buku&action=delete&id=<?= $b['id'] ?>" class="btn-delete" onclick="return confirm('Yakin ingin menghapus data ini?');">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="7" style="text-align: center; color: #94a3b8; padding: 20px;">Belum ada data buku yang tersimpan.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

</body>
</html>