<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Perpustakaan Online</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f0f4f8;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        .header {
            text-align: center;
            margin-bottom: 40px;
        }
        .header h1 {
            font-size: 2rem;
            color: #2d6a4f;
        }
        .header p {
            color: #666;
            margin-top: 6px;
        }
        .cards {
            display: flex;
            gap: 24px;
            flex-wrap: wrap;
            justify-content: center;
        }
        .card {
            background: white;
            border-radius: 16px;
            padding: 36px 32px;
            width: 200px;
            text-align: center;
            text-decoration: none;
            color: #333;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
            transition: all 0.3s;
            border-top: 5px solid #2d6a4f;
        }
        .card:hover {
            transform: translateY(-6px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }
        .card .icon { font-size: 2.5rem; margin-bottom: 14px; }
        .card h3 { font-size: 1.1rem; color: #2d6a4f; margin-bottom: 8px; }
        .card p { font-size: 0.8rem; color: #888; line-height: 1.4; }
    </style>
</head>
<body>

<div class="header">
    <h1>📚 Perpustakaan Online</h1>
    <p>Manajemen data member, buku, dan peminjaman</p>
</div>

<div class="cards">
    <a class="card" href="Member.php">
        <div class="icon">👥</div>
        <h3>Member</h3>
        <p>Kelola data anggota perpustakaan</p>
    </a>
    <a class="card" href="Buku.php">
        <div class="icon">📖</div>
        <h3>Buku</h3>
        <p>Kelola seluruh data buku</p>
    </a>
    <a class="card" href="Peminjaman.php">
        <div class="icon">📋</div>
        <h3>Peminjaman</h3>
        <p>Kelola data peminjaman buku</p>
    </a>
</div>

</body>
</html>