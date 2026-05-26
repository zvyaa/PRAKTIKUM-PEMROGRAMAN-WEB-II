<?php
require 'Model.php';

if (isset($_GET['hapus'])) {
    deletePeminjaman($_GET['hapus']);
    header("Location: Peminjaman.php");
}

$peminjamans = getAllPeminjaman();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Peminjaman</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Segoe UI', sans-serif; background: #f0f4f8; }
        .navbar { background: #2d6a4f; color: white; padding: 16px 30px; font-size: 1.2rem; font-weight: bold; }
        .container { max-width: 1100px; margin: 30px auto; padding: 0 20px; }
        h2 { color: #2d6a4f; margin-bottom: 16px; }
        .btn-tambah {
            background: #2d6a4f; color: white; padding: 9px 18px;
            border-radius: 8px; text-decoration: none; font-size: 0.9rem;
            display: inline-block; margin-bottom: 16px;
        }
        .btn-tambah:hover { background: #1b4332; }
        table { width: 100%; border-collapse: collapse; background: white; border-radius: 12px; overflow: hidden; box-shadow: 0 2px 10px rgba(0,0,0,0.08); }
        th { background: #2d6a4f; color: white; padding: 12px 14px; text-align: left; font-size: 0.9rem; }
        td { padding: 11px 14px; font-size: 0.88rem; border-bottom: 1px solid #eee; }
        tr:last-child td { border-bottom: none; }
        tr:hover td { background: #f9f9f9; }
        .btn-edit { background: #2196F3; color: white; padding: 5px 12px; border-radius: 6px; text-decoration: none; font-size: 0.8rem; margin-right: 4px; }
        .btn-hapus { background: #e53935; color: white; padding: 5px 12px; border-radius: 6px; text-decoration: none; font-size: 0.8rem; }
        .btn-back { display: inline-block; margin-top: 16px; color: #2d6a4f; text-decoration: none; font-size: 0.9rem; }
        .empty { text-align: center; color: #aaa; padding: 30px; }
    </style>
</head>
<body>

<div class="navbar">📚 Perpustakaan Online</div>

<div class="container">
    <h2>Data Peminjaman</h2>
    <a class="btn-tambah" href="FormPeminjaman.php">+ Tambah Peminjaman</a>

    <table>
        <tr>
            <th>No</th>
            <th>Nama Member</th>
            <th>Judul Buku</th>
            <th>Tgl Pinjam</th>
            <th>Tgl Kembali</th>
            <th>Opsi</th>
        </tr>
        <?php if (count($peminjamans) == 0): ?>
        <tr><td colspan="6" class="empty">Belum ada data peminjaman</td></tr>
        <?php else: ?>
        <?php $no = 1; foreach ($peminjamans as $p): ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $p['nama_member'] ?></td>
            <td><?= $p['judul_buku'] ?></td>
            <td><?= $p['tgl_pinjam'] ?></td>
            <td><?= $p['tgl_kembali'] ?></td>
            <td>
                <a class="btn-edit" href="FormPeminjaman.php?id=<?= $p['id_peminjaman'] ?>">Edit</a>
                <a class="btn-hapus" href="Peminjaman.php?hapus=<?= $p['id_peminjaman'] ?>"
                   onclick="return confirm('Yakin hapus?')">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
        <?php endif; ?>
    </table>

    <a class="btn-back" href="index.php">← Kembali ke Beranda</a>
</div>

</body>
</html>