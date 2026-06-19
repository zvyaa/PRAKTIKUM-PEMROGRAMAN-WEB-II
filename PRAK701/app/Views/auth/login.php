<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Segoe UI', sans-serif; background: linear-gradient(135deg, #f8c8d4, #d4b8e0); min-height: 100vh; display: flex; justify-content: center; align-items: center; }
        .card { background: white; padding: 50px 40px; border-radius: 20px; width: 380px; box-shadow: 0 20px 60px rgba(180,120,180,0.2); }
        .logo { text-align: center; margin-bottom: 30px; }
        .logo span { font-size: 48px; }
        .logo h1 { font-size: 22px; color: #7b5ea7; margin-top: 8px; font-weight: 700; }
        .logo p { font-size: 13px; color: #aaa; margin-top: 4px; }
        label { font-size: 13px; font-weight: 600; color: #888; display: block; margin-bottom: 6px; }
        input { width: 100%; padding: 12px 16px; margin-bottom: 20px; border: 2px solid #f0e6f6; border-radius: 10px; font-size: 14px; outline: none; }
        input:focus { border-color: #c9a0dc; }
        button { width: 100%; padding: 14px; background: linear-gradient(135deg, #e8a0b4, #c9a0dc); color: white; border: none; border-radius: 10px; font-size: 16px; font-weight: 600; cursor: pointer; }
        button:hover { opacity: 0.9; }
        .error { background: #fde8f0; color: #c0392b; padding: 10px 14px; border-radius: 8px; font-size: 13px; margin-bottom: 16px; }
    </style>
</head>
<body>
    <div class="card">
        <div class="logo">
            <span>📚</span>
            <h1>Perpustakaan Digital</h1>
            <p>Silakan masuk untuk mengelola data buku</p>
        </div>
        <?php if (session()->getFlashdata('error')): ?>
            <div class="error"><?= session()->getFlashdata('error') ?></div>
        <?php endif; ?>
        <form action="/login" method="post">
            <?= csrf_field() ?>
            <label>Email</label>
            <input type="email" name="email" placeholder="admin@email.com">
            <label>Password</label>
            <input type="password" name="password" placeholder="••••••••">
            <button type="submit">Masuk →</button>
        </form>
    </div>
</body>
</html>