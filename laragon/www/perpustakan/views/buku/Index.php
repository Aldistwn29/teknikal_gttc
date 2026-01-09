<?php
include 'models/Buku.php';
$buku = new Buku();
$data = $buku->getAll();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Perpustkaan lite</title>
</head>
<body>

<h2>Data Buku</h2>

<a href="index.php?action=tambah">Tambah Buku</a>

<table border="1" cellpadding="10">
    <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Pengarang</th>
        <th>Penerbit</th>
        <th>Tahun</th>
        <th>Stok</th>
        <th>Aksi</th>
    </tr>

    <?php $no = 1; while($row = mysqli_fetch_assoc($data)) : ?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= $row['judul'] ?></td>
        <td><?= $row['pengarang'] ?></td>
        <td><?= $row['penerbit'] ?></td>
        <td><?= $row['tahun'] ?></td>
        <td><?= $row['stok'] ?></td>
        <td>
            <a href="index.php?action=hapus&id=<?= $row['id'] ?>"
               onclick="return confirm('Yakin ingin menghapus?')">
               Hapus
            </a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>

</body>
</html>
