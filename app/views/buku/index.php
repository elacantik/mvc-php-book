<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Manajemen Data Buku - Perpustakaan</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts: Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-slate-900 text-slate-100 min-h-screen p-4 md:p-8">

    <div class="max-w-6xl mx-auto space-y-6">
        
        <!-- Header & Action Section -->
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 bg-slate-800 p-6 rounded-2xl border border-slate-700 shadow-xl">
            <div>
                <h1 class="text-2xl md:text-3xl font-bold tracking-tight text-white flex items-center gap-3">
                    <svg class="w-8 h-8 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                    Katalog Data Buku
                </h1>
                <p class="text-sm text-slate-400 mt-1">Kelola seluruh koleksi buku perpustakaan secara cepat dan praktis.</p>
            </div>
            
            <a href="index.php?page=buku&action=create" 
               class="inline-flex items-center justify-center gap-2 bg-indigo-600 hover:bg-indigo-500 text-white font-semibold px-5 py-2.5 rounded-xl transition duration-200 shadow-lg shadow-indigo-600/30">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                </svg>
                Tambah Buku Baru
            </a>
        </div>

        <!-- Table Container -->
        <div class="bg-slate-800 rounded-2xl border border-slate-700 shadow-xl overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm text-slate-300">
                    <thead class="bg-slate-800/80 uppercase text-xs text-slate-400 border-b border-slate-700">
                        <tr>
                            <th scope="col" class="py-4 px-6 font-semibold">No</th>
                            <th scope="col" class="py-4 px-6 font-semibold">ISBN</th>
                            <th scope="col" class="py-4 px-6 font-semibold">Judul Buku</th>
                            <th scope="col" class="py-4 px-6 font-semibold">Penulis</th>
                            <th scope="col" class="py-4 px-6 font-semibold">Penerbit</th>
                            <th scope="col" class="py-4 px-6 font-semibold text-center">Tahun</th>
                            <th scope="col" class="py-4 px-6 font-semibold text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-700/60">
                        <?php if (!empty($books)): ?>
                            <?php $no = 1; foreach ($books as $b): ?>
                                <tr class="hover:bg-slate-700/40 transition duration-150">
                                    <td class="py-4 px-6 font-medium text-slate-400"><?= $no++ ?></td>
                                    <td class="py-4 px-6">
                                        <span class="inline-block bg-slate-900 text-indigo-300 text-xs font-mono px-2.5 py-1 rounded-md border border-slate-700">
                                            <?= htmlspecialchars($b['isbn']) ?>
                                        </span>
                                    </td>
                                    <td class="py-4 px-6 font-semibold text-white">
                                        <?= htmlspecialchars($b['judul']) ?>
                                    </td>
                                    <td class="py-4 px-6 text-slate-300">
                                        <?= htmlspecialchars($b['penulis']) ?>
                                    </td>
                                    <td class="py-4 px-6 text-slate-300">
                                        <?= htmlspecialchars($b['penerbit']) ?>
                                    </td>
                                    <td class="py-4 px-6 text-center">
                                        <span class="bg-emerald-900/60 text-emerald-300 border border-emerald-700/50 text-xs font-semibold px-2.5 py-1 rounded-full">
                                            <?= htmlspecialchars($b['tahun_terbit']) ?>
                                        </span>
                                    </td>
                                    <td class="py-4 px-6 text-center">
                                        <div class="flex items-center justify-center gap-2">
                                            <!-- Edit Button -->
                                            <a href="index.php?page=buku&action=edit&id=<?= $b['id'] ?>" 
                                               class="bg-amber-500/10 hover:bg-amber-500/20 text-amber-400 border border-amber-500/30 px-3 py-1.5 rounded-lg text-xs font-medium transition duration-200">
                                                Edit
                                            </a>
                                            <!-- Delete Button -->
                                            <a href="index.php?page=buku&action=delete&id=<?= $b['id'] ?>" 
                                               onclick="return confirm('Apakah Anda yakin ingin menghapus buku ini?');"
                                               class="bg-rose-500/10 hover:bg-rose-500/20 text-rose-400 border border-rose-500/30 px-3 py-1.5 rounded-lg text-xs font-medium transition duration-200">
                                                Hapus
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="7" class="py-12 text-center text-slate-400">
                                    <svg class="w-12 h-12 mx-auto mb-3 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path>
                                    </svg>
                                    Belum ada data buku yang tersimpan.
                                </td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

</body>
</html>