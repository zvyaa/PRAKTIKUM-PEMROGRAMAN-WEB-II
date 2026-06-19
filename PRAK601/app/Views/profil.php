<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Profil — Mandha</title>
<link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,300;0,9..144,500;1,9..144,400&family=Plus+Jakarta+Sans:wght@400;500;600&display=swap" rel="stylesheet">
<style>
*{margin:0;padding:0;box-sizing:border-box}
:root{
  --sage:#b5d5c5;--sage-d:#4a8c70;--sage-dd:#1e4d38;
  --mint:#e8f5ef;--cream:#fafdf9;--text:#1a2e25;--muted:#6b9e82;
}
body{font-family:'Plus Jakarta Sans',sans-serif;background:var(--cream);color:var(--text);min-height:100vh;display:flex;flex-direction:column}

nav{background:var(--sage-dd);padding:16px 56px;display:flex;justify-content:space-between;align-items:center}
.brand{font-family:'Fraunces',serif;font-style:italic;color:#d8ede5;font-size:20px}
nav a{text-decoration:none;color:#d8ede5;font-size:13px;font-weight:500;margin-left:6px;padding:7px 20px;border:1.5px solid rgba(255,255,255,.25);border-radius:100px;transition:.2s}
nav a:hover,nav a.on{background:rgba(255,255,255,.15);border-color:rgba(255,255,255,.5)}

.main{flex:1;display:flex;align-items:center;justify-content:center;padding:48px 20px}

.card{background:#fff;border-radius:28px;overflow:hidden;border:1.5px solid #daeee4;width:100%;max-width:820px;display:grid;grid-template-columns:260px 1fr}

.sidebar{background:var(--sage-dd);padding:44px 32px;display:flex;flex-direction:column;align-items:center;gap:0}
.avatar{width:130px;height:130px;border-radius:50%;overflow:hidden;border:3px solid rgba(255,255,255,.2);margin-bottom:20px}
.avatar img{width:100%;height:100%;object-fit:cover}
.s-name{font-family:'Fraunces',serif;font-style:italic;color:#d8ede5;font-size:19px;text-align:center;line-height:1.3;margin-bottom:10px}
.s-nim{background:rgba(255,255,255,.1);border:1px solid rgba(255,255,255,.15);border-radius:100px;padding:5px 14px;font-size:11px;font-weight:600;color:rgba(255,255,255,.7);letter-spacing:.5px;margin-bottom:28px}
.s-sep{width:32px;height:1.5px;background:rgba(255,255,255,.15);margin-bottom:24px}
.s-item{width:100%;margin-bottom:18px}
.s-item small{display:block;font-size:10px;letter-spacing:2px;text-transform:uppercase;color:rgba(255,255,255,.4);margin-bottom:4px}
.s-item p{font-size:13px;color:#d8ede5;font-weight:500}

.content{padding:44px 44px}
.pg-top{margin-bottom:32px;padding-bottom:24px;border-bottom:1.5px solid #e3f0ea}
.pg-top small{font-size:11px;letter-spacing:3px;text-transform:uppercase;color:var(--muted);font-weight:600;display:block;margin-bottom:4px}
.pg-top h1{font-family:'Fraunces',serif;font-size:42px;font-weight:300;font-style:italic;color:var(--text)}

.row{display:flex;align-items:flex-start;gap:0;padding:13px 0;border-bottom:1px solid #eef7f2}
.row:last-of-type{border-bottom:none}
.rl{width:90px;font-size:11px;font-weight:700;letter-spacing:1.5px;text-transform:uppercase;color:var(--muted);padding-top:2px;flex-shrink:0}
.rv{font-size:14px;color:var(--text);flex:1;line-height:1.7}
.chips{display:flex;flex-wrap:wrap;gap:6px}
.chip{background:var(--mint);color:var(--sage-dd);border:1.5px solid var(--sage);font-size:12px;font-weight:600;padding:3px 12px;border-radius:100px}

.foot-btn{margin-top:28px}
.btn{text-decoration:none;display:inline-block;background:var(--sage-dd);color:#fff;padding:11px 26px;border-radius:100px;font-size:14px;font-weight:600;transition:.2s}
.btn:hover{background:var(--sage-d)}
</style>
</head>
<body>
<nav>
  <span class="brand">Mandha's Page</span>
  <div><a href="/">Beranda</a><a href="/profil" class="on">Profil</a></div>
</nav>

<div class="main">
  <div class="card">
    <div class="sidebar">
      <div class="avatar"><img src="/images/foto.jpeg" alt="Foto"></div>
      <p class="s-name"><?= $nama ?></p>
      <div class="s-nim"><?= $nim ?></div>
      <div class="s-sep"></div>
      <div class="s-item"><small>Prodi</small><p><?= $prodi ?></p></div>
      <div class="s-item"><small>Asal</small><p><?= $asal ?></p></div>
      <div class="s-item"><small>Instagram</small><p>@a.mndh_</p></div>
    </div>
    <div class="content">
      <div class="pg-top">
        <small>My</small>
        <h1>Profile</h1>
      </div>
      <div class="row"><span class="rl">Nama</span><span class="rv"><?= $nama ?></span></div>
      <div class="row"><span class="rl">NIM</span><span class="rv"><?= $nim ?></span></div>
      <div class="row"><span class="rl">Institut</span><span class="rv"><?= $institut ?></span></div>
      <div class="row"><span class="rl">Prodi</span><span class="rv"><?= $prodi ?></span></div>
      <div class="row"><span class="rl">Asal</span><span class="rv"><?= $asal ?></span></div>
      <div class="row"><span class="rl">Hobi</span><span class="rv"><?= $hobi ?></span></div>
      <div class="row"><span class="rl">Skill</span><span class="rv">
        <div class="chips"><?php foreach(explode(', ',$skill) as $s): ?><span class="chip"><?= trim($s) ?></span><?php endforeach; ?></div>
      </span></div>
      <div class="foot-btn"><a href="/" class="btn">← Kembali</a></div>
    </div>
  </div>
</div>
</body>
</html>