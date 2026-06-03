<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Mandha's Page</title>
<link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,300;0,9..144,500;1,9..144,400&family=Plus+Jakarta+Sans:wght@400;500;600&display=swap" rel="stylesheet">
<style>
*{margin:0;padding:0;box-sizing:border-box}
:root{
  --sage:#b5d5c5;--sage-d:#4a8c70;--sage-dd:#1e4d38;
  --mint:#e8f5ef;--cream:#fafdf9;--text:#1a2e25;--muted:#6b9e82;
}
body{font-family:'Plus Jakarta Sans',sans-serif;background:var(--cream);color:var(--text);min-height:100vh}

nav{background:var(--sage-dd);padding:16px 56px;display:flex;justify-content:space-between;align-items:center}
.brand{font-family:'Fraunces',serif;font-style:italic;color:#d8ede5;font-size:20px;letter-spacing:.5px}
nav a{text-decoration:none;color:#d8ede5;font-size:13px;font-weight:500;margin-left:6px;padding:7px 20px;border:1.5px solid rgba(255,255,255,.25);border-radius:100px;transition:.2s}
nav a:hover,nav a.on{background:rgba(255,255,255,.15);border-color:rgba(255,255,255,.5)}

.hero{display:grid;grid-template-columns:1fr 380px;min-height:90vh}

.hero-l{padding:72px 64px;display:flex;flex-direction:column;justify-content:center;background:var(--cream)}
.eyebrow{font-size:11px;font-weight:600;letter-spacing:3px;text-transform:uppercase;color:var(--muted);margin-bottom:20px}
.name{font-family:'Fraunces',serif;font-size:58px;line-height:1.05;font-weight:300;color:var(--text);margin-bottom:8px}
.name em{color:var(--sage-d);font-style:italic;display:block}
.nim{display:inline-flex;align-items:center;gap:10px;margin:20px 0 36px;background:var(--mint);border:1.5px solid var(--sage);border-radius:100px;padding:8px 20px;font-size:13px;font-weight:600;color:var(--sage-dd)}
.nim::before{content:'';width:8px;height:8px;background:var(--sage-d);border-radius:50%}
.btns{display:flex;gap:12px;flex-wrap:wrap}
.btn-p{text-decoration:none;background:var(--sage-dd);color:#fff;padding:13px 30px;border-radius:100px;font-size:14px;font-weight:600;transition:.2s}
.btn-p:hover{background:var(--sage-d)}
.btn-o{text-decoration:none;border:2px solid var(--sage);color:var(--sage-dd);padding:12px 28px;border-radius:100px;font-size:14px;font-weight:600;transition:.2s}
.btn-o:hover{background:var(--mint)}

.hero-r{background:var(--sage-dd);position:relative;display:flex;flex-direction:column;align-items:center;justify-content:center;padding:48px 40px;gap:20px}
.photo-frame{width:230px;height:270px;border-radius:28px;overflow:hidden;border:3px solid rgba(255,255,255,.2)}
.photo-frame img{width:100%;height:100%;object-fit:cover}
.stat-row{display:flex;gap:12px;width:100%}
.stat{flex:1;background:rgba(255,255,255,.08);border:1px solid rgba(255,255,255,.12);border-radius:16px;padding:14px 16px;text-align:center}
.stat small{display:block;font-size:10px;letter-spacing:2px;text-transform:uppercase;color:rgba(255,255,255,.45);margin-bottom:4px}
.stat strong{font-size:13px;font-weight:600;color:#d8ede5}

.section{max-width:1060px;margin:0 auto;padding:56px 64px}
.sec-head{display:flex;align-items:center;gap:16px;margin-bottom:28px}
.sec-head span{font-size:11px;font-weight:700;letter-spacing:3px;text-transform:uppercase;color:var(--muted)}
.sec-head::after{content:'';flex:1;height:1px;background:var(--sage)}

.grid2{display:grid;grid-template-columns:1fr 1fr;gap:16px;margin-bottom:16px}
.card{background:#fff;border:1.5px solid #e3f0ea;border-radius:20px;padding:24px 28px;transition:.2s}
.card:hover{border-color:var(--sage);transform:translateY(-2px)}
.card.wide{grid-column:1/-1}
.clabel{font-size:10px;font-weight:700;letter-spacing:2.5px;text-transform:uppercase;color:var(--muted);margin-bottom:10px}
.cval{font-size:16px;font-weight:600;color:var(--text)}
.cdesc{font-size:14px;color:#4a6657;line-height:1.8}
.chips{display:flex;flex-wrap:wrap;gap:7px;margin-top:8px}
.chip{background:var(--mint);color:var(--sage-dd);border:1.5px solid var(--sage);font-size:12px;font-weight:600;padding:4px 14px;border-radius:100px}

footer{background:var(--sage-dd);padding:18px 56px;display:flex;justify-content:space-between;align-items:center;font-size:13px;color:rgba(255,255,255,.6)}
footer span:first-child{font-family:'Fraunces',serif;font-style:italic;color:#d8ede5;font-size:16px}
</style>
</head>
<body>
<nav>
  <span class="brand">Mandha's Page</span>
  <div><a href="/" class="on">Beranda</a><a href="/profil">Profil</a></div>
</nav>

<div class="hero">
  <div class="hero-l">
    <p class="eyebrow">Selamat datang di halaman saya</p>
    <h1 class="name">Halo, Saya<em><?= $nama ?></em></h1>
    <div class="nim"><?= $nim ?></div>
    <div class="btns">
      <a href="/profil" class="btn-p">Lihat Profil →</a>
      <a href="#tentang" class="btn-o">Tentang Saya</a>
    </div>
  </div>
  <div class="hero-r">
    <div class="photo-frame"><img src="/images/foto.jpeg" alt="Foto <?= $nama ?>"></div>
    <div class="stat-row">
      <div class="stat"><small>Prodi</small><strong><?= $prodi ?></strong></div>
      <div class="stat"><small>Asal</small><strong><?= $asal ?></strong></div>
    </div>
  </div>
</div>

<div class="section" id="tentang">
  <div class="sec-head"><span>Tentang Saya</span></div>
  <div class="grid2">
    <div class="card wide">
      <div class="clabel">About Me</div>
      <p class="cdesc">Halo! Saya <strong><?= $nama ?></strong>, mahasiswi <?= $prodi ?> yang gemar <?= $hobi ?>. Senang bertemu dengan kalian di sini!</p>
    </div>
    <div class="card">
      <div class="clabel">Instagram</div>
      <div class="cval">@a.mndh_</div>
    </div>
    <div class="card">
      <div class="clabel">Hobi</div>
      <div class="cval" style="font-size:14px;font-weight:400"><?= $hobi ?></div>
    </div>
    <div class="card wide">
      <div class="clabel">Institut</div>
      <div class="chips">
        <?php foreach(explode(', ',$institut) as $s): ?><span class="chip"><?= trim($s) ?></span><?php endforeach; ?>
      </div>
    </div>
  </div>
</div>

<footer>
  <span>Mandha's Page</span>
  <span><?= $nama ?> · <?= $nim ?> · 2026</span>
</footer>
</body>
</html>