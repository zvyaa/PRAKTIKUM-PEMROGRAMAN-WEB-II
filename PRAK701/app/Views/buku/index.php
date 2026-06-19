<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Buku</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Segoe UI', sans-serif; background: #fdf0f8; }
        .navbar { background: linear-gradient(135deg, #e8a0b4, #c9a0dc); padding: 16px 32px; display: flex; justify-content: space-between; align-items: center; box-shadow: 0 4px 15px rgba(180,120,180,0.3); }
        .navbar-left { display: flex; align-items: center; gap: 10px; }
        .navbar-left h1 { font-size: 20px; color: white; font-weight: 700; }
        .navbar-right { display: flex; align-items: center; gap: 12px; }
        .user-badge { background: rgba(255,255,255,0.25); color: white; padding: 8px 16px; border-radius: 20px; font-size: 13px; font-weight: 600; }
        .btn-logout { background: white; color: #c9a0dc; padding: 8px 18px; border-radius: 20px; text-decoration: none; font-size: 13px; font-weight: 700; }
        .container { max-width: 1000px; margin: 36px auto; padding: 0 24px; }
        .top { display: flex; justify-content: space-between; align-items: center; margin-bottom: 24px; }
        .top h2 { font-size: 22px; color: #7b5ea7; font-weight: 700; }
        .top p { font-size: 13px; color: #bbb; margin-top: 4px; }
        .btn-tambah { background: linear-gradient(135deg, #e8a0b4, #c9a0dc); color: white; padding: 12px 24px; border-radius: 25px; text-decoration: none; font-size: 14px; font-weight: 700; box-shadow: 0 4px 15px rgba(180,120,180,0.4); }
        .stats { display: flex; gap: 16px; margin-bottom: 28px; }
        .stat-card { flex: 1; background: white; border-radius: 16px; padding: 20px 24px; box-shadow: 0 4px 15px rgba(180,120,180,0.1); border-top: 4px solid #e8a0b4; }
        .stat-card .icon { font-size: 28px; margin-bottom: 8px; }
        .stat-card .label { font-size: 11px; color: #bbb; text-transform: uppercase; letter-spacing: 1px; }
        .stat-card .value { font-size: 32px; font-weight: 700; color: #7b5ea7; margin-top: 4px; }
        table { width: 100%; border-collapse: collapse; background: white; border-radius: 16px; overflow: hidden; box-shadow: 0 4px 15px rgba(180,120,180,0.1); }
        th { background: linear-gradient(135deg, #e8a0b4, #c9a0dc); color: white; padding: 16px 18px; text-align: left; font-size: 13px; letter-spacing: 0.5px; }
        td { padding: 14px 18px; border-bottom: 1px solid #fce8f5; font-size: 14px; color: #555; }
        tr:last-child td { border-bottom: none; }
        tr:hover td { background: #fdf4ff; }
        .judul { font-weight: 700; color: #7b5ea7; }
        .tahun { background: #f5e6ff; color: #9b59b6; padding: 4px 12px; border-radius: 20px; font-size: 12px; font-weight: 600; }
        .aksi a { text-decoration: none; padding: 6px 14px; border-radius: 20px; font-size: 12px; font-weight: 600; margin-right: 4px; }
        .btn-detail { background: #e8f8f0; color: #27ae60; }
        .btn-edit { background: #fff0f8; color: #e8a0b4; }
        .btn-hapus { background: #fde8e8; color: #e74c3c; }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="navbar-left">
            <h1>📚 Perpustakaan Digital</h1>
        </div>
        <div class="navbar-right">
            <span class="user-badge">👤 <?= session()->get('username') ?></span>
            <a href="/logout" class="btn-logout">Logout</a>
        </div>
    </div>
    <div class="container">
        <div class="top">
            <div>
                <h2>Manajemen Buku</h2>
                <p>Kelola koleksi buku perpustakaan digital</p>
            </div>
            <a href="/buku/create" class="btn-tambah">+ Tambah Buku</a>
        </div>
        <div class="stats">
            <div class="stat-card">
                <div class="icon">📖</div>
                <div class="label">Total Buku</div>
                <div class="value"><?= count($buku) ?></div>
            </div>
            <div class="stat-card">
                <div class="icon">✍️</div>
                <div class="label">Penulis Unik</div>
                <div class="value"><?= count(array_unique(array_column($buku, 'penulis'))) ?></div>
            </div>
            <div class="stat-card">
                <div class="icon">🏢</div>
                <div class="label">Penerbit</div>
                <div class="value"><?= count(array_unique(array_column($buku, 'penerbit'))) ?></div>
            </div>
        </div>
        <table>
            <tr>
                <th>No</th>
                <th>Judul Buku</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun</th>
                <th>Aksi</th>
            </tr>
            <?php $no = 1; foreach ($buku as $b): ?>
            <tr>
                <td><?= $no++ ?></td>
                <td class="judul"><?= $b['judul'] ?></td>
                <td><?= $b['penulis'] ?></td>
                <td><?= $b['penerbit'] ?></td>
                <td><span class="tahun"><?= $b['tahun_terbit'] ?></span></td>
                <td class="aksi">
                    <a href="/buku/show/<?= $b['id'] ?>" class="btn-detail">Detail</a>
                    <a href="/buku/edit/<?= $b['id'] ?>" class="btn-edit">Edit</a>
                    <a href="/buku/delete/<?= $b['id'] ?>" class="btn-hapus" onclick="return confirm('Yakin hapus?')">Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>