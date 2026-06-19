<?php
require 'Model.php';

$peminjaman = null;
if (isset($_GET['id'])) {
    $peminjaman = getPeminjamanById($_GET['id']);
}

if (isset($_POST['simpan'])) {
    $id_member  = $_POST['id_member'];
    $id_buku    = $_POST['id_buku'];
    $tgl_pinjam = $_POST['tgl_pinjam'];
    $tgl_kembali = $_POST['tgl_kembali'];

    if (isset($_POST['id_peminjaman']) && $_POST['id_peminjaman'] != '') {
        updatePeminjaman($_POST['id_peminjaman'], $id_member, $id_buku, $tgl_pinjam, $tgl_kembali);
    } else {
        insertPeminjaman($id_member, $id_buku, $tgl_pinjam, $tgl_kembali);
    }
    header("Location: Peminjaman.php");
}

$members = getAllMember();
$bukus   = getAllBuku();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title><?= $peminjaman ? 'Edit' : 'Tambah' ?> Peminjaman</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Segoe UI', sans-serif; background: #f0f4f8; }
        .navbar { background: #2d6a4f; color: white; padding: 16px 30px; font-size: 1.2rem; font-weight: bold; }
        .container { max-width: 500px; margin: 40px auto; background: white; padding: 30px; border-radius: 16px; box-shadow: 0 4px 15px rgba(0,0,0,0.08); }
        h2 { color: #2d6a4f; margin-bottom: 20px; }
        label { display: block; font-weight: 600; margin-top: 14px; margin-bottom: 4px; color: #444; font-size: 0.9rem; }
        input, select {
            width: 100%; padding: 9px 12px; border: 1px solid #ddd;
            border-radius: 8px; font-size: 0.9rem; outline: none;
            background: white;
        }
        input:focus, select:focus { border-color: #2d6a4f; }
        .btn-row { margin-top: 24px; display: flex; gap: 10px; }
        .btn-simpan { background: #2d6a4f; color: white; padding: 10px 24px; border: none; border-radius: 8px; cursor: pointer; font-size: 0.9rem; }
        .btn-simpan:hover { background: #1b4332; }
        .btn-batal { background: #aaa; color: white; padding: 10px 20px; border-radius: 8px; text-decoration: none; font-size: 0.9rem; }
    </style>
</head>
<body>

<div class="navbar">📚 Perpustakaan Online</div>

<div class="container">
    <h2><?= $peminjaman ? 'Edit' : 'Tambah' ?> Peminjaman</h2>

    <form method="POST">
        <input type="hidden" name="id_peminjaman" value="<?= $peminjaman['id_peminjaman'] ?? '' ?>">

        <label>Nama Member</label>
        <select name="id_member" required>
            <option value="">-- Pilih Member --</option>
            <?php foreach ($members as $m): ?>
            <option value="<?= $m['id_member'] ?>"
                <?= (isset($peminjaman) && $peminjaman['id_member'] == $m['id_member']) ? 'selected' : '' ?>>
                <?= $m['nama_member'] ?>
            </option>
            <?php endforeach; ?>
        </select>

        <label>Judul Buku</label>
        <select name="id_buku" required>
            <option value="">-- Pilih Buku --</option>
            <?php foreach ($bukus as $b): ?>
            <option value="<?= $b['id_buku'] ?>"
                <?= (isset($peminjaman) && $peminjaman['id_buku'] == $b['id_buku']) ? 'selected' : '' ?>>
                <?= $b['judul_buku'] ?>
            </option>
            <?php endforeach; ?>
        </select>

        <label>Tanggal Pinjam</label>
        <input type="date" name="tgl_pinjam" value="<?= $peminjaman['tgl_pinjam'] ?? '' ?>" required>

        <label>Tanggal Kembali</label>
        <input type="date" name="tgl_kembali" value="<?= $peminjaman['tgl_kembali'] ?? '' ?>" required>

        <div class="btn-row">
            <button class="btn-simpan" name="simpan">Simpan</button>
            <a class="btn-batal" href="Peminjaman.php">Batal</a>
        </div>
    </form>
</div>

</body>
</html>