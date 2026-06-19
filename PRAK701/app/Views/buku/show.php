<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Buku</title>
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
        .info-row { display: flex; align-items: center; padding: 16px 0; border-bottom: 1px solid #fce8f5; }
        .info-row:last-of-type { border-bottom: none; }
        .info-icon { font-size: 22px; width: 40px; }
        .info-label { font-size: 12px; color: #bbb; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 4px; }
        .info-value { font-size: 16px; color: #444; font-weight: 600; }
        .tahun-badge { background: #f5e6ff; color: #9b59b6; padding: 6px 16px; border-radius: 20px; font-size: 15px; font-weight: 700; display: inline-block; }
        .btn-kembali { display: block; text-align: center; margin-top: 28px; padding: 13px; background: linear-gradient(135deg, #e8a0b4, #c9a0dc); color: white; border-radius: 12px; text-decoration: none; font-size: 15px; font-weight: 700; box-shadow: 0 4px 15px rgba(180,120,180,0.4); }
        .btn-kembali:hover { opacity: 0.9; }
    </style>
</head>
<body>
    <div class="navbar">
        <h1>📚 Perpustakaan Digital</h1>
    </div>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <span>🔍</span>
                <div>
                    <h2>Detail Buku</h2>
                    <p>Informasi lengkap buku</p>
                </div>
            </div>
            <div class="info-row">
                <div class="info-icon">📖</div>
                <div>
                    <div class="info-label">Judul</div>
                    <div class="info-value"><?= $buku['judul'] ?></div>
                </div>
            </div>
            <div class="info-row">
                <div class="info-icon">✍️</div>
                <div>
                    <div class="info-label">Penulis</div>
                    <div class="info-value"><?= $buku['penulis'] ?></div>
                </div>
            </div>
            <div class="info-row">
                <div class="info-icon">🏢</div>
                <div>
                    <div class="info-label">Penerbit</div>
                    <div class="info-value"><?= $buku['penerbit'] ?></div>
                </div>
            </div>
            <div class="info-row">
                <div class="info-icon">📅</div>
                <div>
                    <div class="info-label">Tahun Terbit</div>
                    <div class="info-value"><span class="tahun-badge"><?= $buku['tahun_terbit'] ?></span></div>
                </div>
            </div>
            <a href="/buku" class="btn-kembali">← Kembali ke Daftar Buku</a>
        </div>
    </div>
</body>
</html>