<?php
include 'models/Buku.php';
$buku = new Buku();
$data = $buku->getAll();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Perpustkaan lite</title>
     <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f4f6f9;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1000px;
            margin: 40px auto;
            background: #fff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }

        h2 {
            margin-bottom: 20px;
            color: #333;
        }

        .btn {
            display: inline-block;
            padding: 10px 16px;
            background: #2563eb;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            font-size: 14px;
            margin-bottom: 15px;
        }

        .btn:hover {
            background: #1e40af;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table thead {
            background: #2563eb;
            color: white;
        }

        table th, table td {
            padding: 12px;
            text-align: left;
        }

        table tr:nth-child(even) {
            background: #f1f5f9;
        }

        table tr:hover {
            background: #e2e8f0;
        }

        .aksi a {
            color: #dc2626;
            text-decoration: none;
            font-weight: bold;
        }

        .aksi a:hover {
            text-decoration: underline;
        }

        footer {
            text-align: center;
            margin-top: 20px;
            color: #777;
            font-size: 13px;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Petpustakaan</h2>
    <a href="index.php?action=tambah" class="btn">Tambah Buku</a>
    <table>
        <thead>
             <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Pengarang</th>
                <th>Penerbit</th>
                <th>Tahun</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; while($row = mysqli_fetch_assoc($data)) : ?>
                  <tr>
                <td><?= $no++ ?></td>
                <td><?= $row['judul'] ?></td>
                <td><?= $row['pengarang'] ?></td>
                <td><?= $row['penerbit'] ?></td>
                <td><?= $row['tahun'] ?></td>
                <td><?= $row['stok'] ?></td>
             <td class="aksi">
                    <a href="index.php?action=hapus&id=<?= $row['id'] ?>"
                       onclick="return confirm('Yakin ingin menghapus?')">
                        Hapus
                    </a>
                </td>
                 </tr>
            <?php $no++; endwhile; ?>
        </tbody>
    </table>
       <footer>
        © <?= date('Y') ?> Perpustakaan Lite — Teknical Test PHP Native
    </footer>
</div>
</body>
</html>
