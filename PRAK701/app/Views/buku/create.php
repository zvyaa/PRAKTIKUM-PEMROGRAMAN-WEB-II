<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Buku</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Segoe UI', sans-serif; background: #f0f2f5; }
.navbar { background: linear-gradient(135deg, #e8a0b4, #c9a0dc); padding: 16px 32px; }
        .navbar h1 { color: white; font-size: 20px; }
        .container { max-width: 600px; margin: 40px auto; padding: 0 20px; }
        .card { background: white; padding: 36px; border-radius: 16px; box-shadow: 0 4px 20px rgba(0,0,0,0.08); }
        .card h2 { margin-bottom: 24px; color: #333; }
        label { font-size: 13px; font-weight: 600; color: #555; display: block; margin-bottom: 6px; }
        input { width: 100%; padding: 12px; border: 2px solid #eee; border-radius: 10px; font-size: 14px; margin-bottom: 18px; outline: none; }
        input:focus { border-color: #667eea; }
        .btn-row { display: flex; gap: 12px; }
        .btn-simpan { flex: 1; padding: 12px; background: linear-gradient(135deg, #e8a0b4, #c9a0dc); color: white; border: none; border-radius: 10px; font-size: 15px; font-weight: 600; cursor: pointer; }
        .btn-kembali { flex: 1; padding: 12px; background: #f0f2f5; color: #555; border: none; border-radius: 10px; font-size: 15px; font-weight: 600; cursor: pointer; text-align: center; text-decoration: none; }
        .error { background: #ffe0e0; color: #c0392b; padding: 12px; border-radius: 8px; font-size: 13px; margin-bottom: 16px; }
    </style>
</head>
<body>
    <div class="navbar">
        <h1>📚 Perpustakaan Digital</h1>
    </div>
    <div class="container">
        <div class="card">
            <h2>Tambah Buku</h2>
            <?php if (isset($validation)): ?>
                <div class="error"><?= $validation->listErrors() ?></div>
            <?php endif; ?>
            <form action="/buku/store" method="post">
                <?= csrf_field() ?>
                <label>Judul</label>
                <input type="text" name="judul" placeholder="Masukkan judul buku">
                <label>Penulis</label>
                <input type="text" name="penulis" placeholder="Masukkan nama penulis">
                <label>Penerbit</label>
                <input type="text" name="penerbit" placeholder="Masukkan nama penerbit">
                <label>Tahun Terbit</label>
                <input type="number" name="tahun_terbit" placeholder="Contoh: 2020">
                <div class="btn-row">
                    <a href="/buku" class="btn-kembali">← Kembali</a>
                    <button type="submit" class="btn-simpan">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>