<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Buku</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f6f9;
        }
        h2 {
            color: #333;
        }
        .btn {
            display: inline-block;
            padding: 8px 12px;
            background-color: #28a745;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            margin-bottom: 15px;
        }
        .btn:hover {
            background-color: #218838;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
        }
        table, th, td {
            border: 1px solid #ccc;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .btn-edit {
            color: #007bff;
            text-decoration: none;
        }
        .btn-delete {
            color: #dc3545;
            text-decoration: none;
        }
    </style>
</head>
<body>

    <h2>Daftar Buku</h2>
    
    <a href="index.php?page=buku&action=create" class="btn">+ Tambah Buku Baru</a>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>ISBN</th>
                <th>Judul Buku</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($books)): ?>
                <?php $no = 1; foreach ($books as $b): ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= htmlspecialchars($b['isbn']) ?></td>
                        <td><?= htmlspecialchars($b['judul']) ?></td>
                        <td><?= htmlspecialchars($b['penulis']) ?></td>
                        <td><?= htmlspecialchars($b['penerbit']) ?></td>
                        <td><?= htmlspecialchars($b['tahun_terbit']) ?></td>
                        <td>
                            <a href="index.php?page=buku&action=edit&id=<?= $b['id'] ?>" class="btn-edit">Edit</a> | 
                            <a href="index.php?page=buku&action=delete&id=<?= $b['id'] ?>" class="btn-delete" onclick="return confirm('Yakin ingin menghapus data ini?');">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="7" style="text-align: center;">Belum ada data buku.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

</body>
</html>