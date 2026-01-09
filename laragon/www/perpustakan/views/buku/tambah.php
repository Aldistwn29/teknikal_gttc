<!DOCTYPE html>
<html>
<head>
    <title>Tambah Buku</title>
</head>
<body>

<h2>Tambah Buku</h2>

<form action="index.php?action=simpan" method="POST">
    <input type="text" name="judul" placeholder="Judul" required><br><br>
    <input type="text" name="pengarang" placeholder="Pengarang" required><br><br>
    <input type="text" name="penerbit" placeholder="Penerbit" required><br><br>
    <input type="number" name="tahun" placeholder="Tahun" required><br><br>
    <input type="number" name="stok" placeholder="Stok" required><br><br>

    <button type="submit">Simpan</button>
</form>

<a href="index.php">Kembali</a>

</body>
</html>
