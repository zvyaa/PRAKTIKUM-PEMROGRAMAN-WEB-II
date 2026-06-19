<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Buku</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Segoe UI', sans-serif; background: #fdf0f8; min-height: 100vh; }
        .navbar { background: linear-gradient(135deg, #e8a0b4, #c9a0dc); padding: 16px 32px; box-shadow: 0 4px 15px rgba(180,120,180,0.3); }
        .navbar h1 { font-size: 20px; color: white; font-weight: 700; }
        .container { max-width: 600px; margin: 40px auto; padding: 0 24px; }
        .card { background: white; padding: 40px; border-radius: 20px; box-shadow: 0 8px 30px rgba(180,120,180,0.15); }
        .card-header { display: flex; align-items: center; gap: 12px; margin-bottom: 28px; padding-bottom: 20px; border-bottom: 2px solid #fce8f5; }
        .card-header span { font-size: 36px; }
        .card-header h2 { font-size: 22px; color: #7b5ea7; font-weight: 700; }
        .card-header p { font-size: 13px; color: #bbb; margin-top: 2px; }
        label { font-size: 13px; font-weight: 600; color: #9b59b6; display: block; margin-bottom: 8px; }
        input { width: 100%; padding: 13px 16px; border: 2px solid #f0e6f6; border-radius: 12px; font-size: 14px; margin-bottom: 20px; outline: none; color: #555; background: #fdf8ff; }
        input:focus { border-color: #c9a0dc; background: white; }
        .btn-row { display: flex; gap: 12px; margin-top: 8px; }
        .btn-update { flex: 1; padding: 13px; background: linear-gradient(135deg, #e8a0b4, #c9a0dc); color: white; border: none; border-radius: 12px; font-size: 15px; font-weight: 700; cursor: pointer; box-shadow: 0 4px 15px rgba(180,120,180,0.4); }
        .btn-update:hover { opacity: 0.9; }
        .btn-kembali { flex: 1; padding: 13px; background: #fdf0f8; color: #c9a0dc; border: 2px solid #f0e6f6; border-radius: 12px; font-size: 15px; font-weight: 700; text-align: center; text-decoration: none; }
    </style>
</head>
<body>
    <div class="navbar">
        <h1>📚 Perpustakaan Digital</h1>
    </div>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <span>✏️</span>
                <div>
                    <h2>Edit Buku</h2>
                    <p>Ubah data buku yang dipilih</p>
                </div>
            </div>
            <form action="/buku/update/<?= $buku['id'] ?>" method="post">
                <?= csrf_field() ?>
                <label>📖 Judul</label>
                <input type="text" name="judul" value="<?= $buku['judul'] ?>">
                <label>✍️ Penulis</label>
                <input type="text" name="penulis" value="<?= $buku['penulis'] ?>">
                <label>🏢 Penerbit</label>
                <input type="text" name="penerbit" value="<?= $buku['penerbit'] ?>">
                <label>📅 Tahun Terbit</label>
                <input type="number" name="tahun_terbit" value="<?= $buku['tahun_terbit'] ?>">
                <div class="btn-row">
                    <a href="/buku" class="btn-kembali">← Kembali</a>
                    <button type="submit" class="btn-update">Update Buku</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>