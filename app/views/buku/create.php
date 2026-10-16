<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Buku</title>
</head>
<body>
    <h2>Tambah Buku</h2>
    <form method="post" action="index.php?page=buku&action=store">
        <label>ISBN</label><br>
        <input type="text" name="isbn" required><br><br>

        <label>Judul Buku</label><br>
        <input type="text" name="judul" required><br><br>

        <label>Penulis</label><br>
        <input type="text" name="penulis" required><br><br>

        <label>Penerbit</label><br