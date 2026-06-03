<?php
require 'Model.php';

$member = null;
if (isset($_GET['id'])) {
    $member = getMemberById($_GET['id']);
}

if (isset($_POST['simpan'])) {
    $nama       = $_POST['nama_member'];
    $nomor      = $_POST['nomor_member'];
    $alamat     = $_POST['alamat'];
    $telepon    = $_POST['nomor_telepon'];
    $tgl_daftar = $_POST['tgl_mendaftar'];
    $tgl_bayar  = $_POST['tgl_terakhir_bayar'];

    if (isset($_POST['id_member']) && $_POST['id_member'] != '') {
        updateMember($_POST['id_member'], $nama, $nomor, $alamat, $telepon, $tgl_daftar, $tgl_bayar);
    } else {
        insertMember($nama, $nomor, $alamat, $telepon, $tgl_daftar, $tgl_bayar);
    }
    header("Location: Member.php");
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title><?= $member ? 'Edit' : 'Tambah' ?> Member</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Segoe UI', sans-serif; background: #f0f4f8; }
        .navbar { background: #2d6a4f; color: white; padding: 16px 30px; font-size: 1.2rem; font-weight: bold; }
        .container { max-width: 500px; margin: 40px auto; background: white; padding: 30px; border-radius: 16px; box-shadow: 0 4px 15px rgba(0,0,0,0.08); }
        h2 { color: #2d6a4f; margin-bottom: 20px; }
        label { display: block; font-weight: 600; margin-top: 14px; margin-bottom: 4px; color: #444; font-size: 0.9rem; }
        input, textarea { width: 100%; padding: 9px 12px; border: 1px solid #ddd; border-radius: 8px; font-size: 0.9rem; outline: none; }
        input:focus, textarea:focus { border-color: #2d6a4f; }
        .btn-row { margin-top: 24px; display: flex; gap: 10px; }
        .btn-simpan { background: #2d6a4f; color: white; padding: 10px 24px; border: none; border-radius: 8px; cursor: pointer; font-size: 0.9rem; }
        .btn-simpan:hover { background: #1b4332; }
        .btn-batal { background: #aaa; color: white; padding: 10px 20px; border-radius: 8px; text-decoration: none; font-size: 0.9rem; }
    </style>
</head>
<body>

<div class="navbar">📚 Perpustakaan Online</div>

<div class="container">
    <h2><?= $member ? 'Edit' : 'Tambah' ?> Member</h2>

    <form method="POST">
        <input type="hidden" name="id_member" value="<?= $member['id_member'] ?? '' ?>">

        <label>Nama Member</label>
        <input type="text" name="nama_member" value="<?= $member['nama_member'] ?? '' ?>" required>

        <label>Nomor Member</label>
        <input type="text" name="nomor_member" value="<?= $member['nomor_member'] ?? '' ?>" required>

        <label>Alamat</label>
        <textarea name="alamat" rows="3"><?= $member['alamat'] ?? '' ?></textarea>

        <label>Nomor Telepon</label>
        <input type="text" name="nomor_telepon" value="<?= $member['nomor_telepon'] ?? '' ?>">

        <label>Tanggal Mendaftar</label>
        <input type="date" name="tgl_mendaftar" value="<?= $member['tgl_mendaftar'] ?? '' ?>" required>

        <label>Tanggal Terakhir Bayar</label>
        <input type="date" name="tgl_terakhir_bayar" value="<?= $member['tgl_terakhir_bayar'] ?? '' ?>">

        <div class="btn-row">
            <button class="btn-simpan" name="simpan">Simpan</button>
            <a class="btn-batal" href="Member.php">Batal</a>
        </div>
    </form>
</div>

</body>
</html>