<?php
require 'Model.php';

$buku = null;
if (isset($_GET['id'])) {
    $buku = getBukuById($_GET['id']);
}

if (isset($_POST['simpan'])) {
    $judul   = $_POST['judul_buku'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    $tahun   = $_POST['tahun_terbit'];

    if (isset($_POST['id_buku']) && $_POST['id_buku'] != '') {
        updateBuku($_POST['id_buku'], $judul, $penulis, $penerbit, $tahun);
    } else {
        insertBuku($judul, $penulis, $penerbit, $tahun);
    }
    header("Location: Buku.php");
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title><?= $buku ? 'Edit' : 'Tambah' ?> Buku</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Segoe UI', sans-serif; background: #f0f4f8; }
        .navbar { background: #2d6a4f; color: white; padding: 16px 30px; font-size: 1.2rem; font-weight: bold; }
        .container { max-width: 500px; margin: 40px auto; background: white; padding: 30px; border-radius: 16px; box-shadow: 0 4px 15px rgba(0,0,0,0.08); }
        h2 { color: #2d6a4f; margin-bottom: 20px; }
        label { display: block; font-weight: 600; margin-top: 14px; margin-bottom: 4px; color: #444; font-size: 0.9rem; }
        input { width: 100%; padding: 9px 12px; border: 1px solid #ddd; border-radius: 8px; font-size: 0.9rem; outline: none; }
        input:focus { border-color: #2d6a4f; }
        .btn-row { margin-top: 24px; display: flex; gap: 10px; }
        .btn-simpan { background: #2d6a4f; color: white; padding: 10px 24px; border: none; border-radius: 8px; cursor: pointer; font-size: 0.9rem; }
        .btn-simpan:hover { background: #1b4332; }
        .btn-batal { background: #aaa; color: white; padding: 10px 20px; border-radius: 8px; text-decoration: none; font-size: 0.9rem; }
    </style>
</head>
<body>

<div class="navbar">📚 Perpustakaan Online</div>

<div class="container">
    <h2><?= $buku ? 'Edit' : 'Tambah' ?> Buku</h2>

    <form method="POST">
        <input type="hidden" name="id_buku" value="<?= $buku['id_buku'] ?? '' ?>">

        <label>Judul Buku</label>
        <input type="text" name="judul_buku" value="<?= $buku['judul_buku'] ?? '' ?>" required>

        <label>Penulis</label>
        <input type="text" name="penulis" value="<?= $buku['penulis'] ?? '' ?>" required>

        <label>Penerbit</label>
        <input type="text" name="penerbit" value="<?= $buku['penerbit'] ?? '' ?>" required>

        <label>Tahun Terbit</label>
        <input type="number" name="tahun_terbit" value="<?= $buku['tahun_terbit'] ?? '' ?>" required>

        <div class="btn-row">
            <button class="btn-simpan" name="simpan">Simpan</button>
            <a class="btn-batal" href="Buku.php">Batal</a>
        </div>
    </form>
</div>

</body>
</html>