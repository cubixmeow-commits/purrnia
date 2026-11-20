<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>The World of Purrnia</title>
  <meta name="description" content="The story of Purrnia, a world that grew from the love of two small cats who chose each other and walked forward together. Meet the Purren, the Cubix Meow, and the eight regions.">
  <meta property="og:title" content="The World of Purrnia">
  <meta property="og:description" content="A world that hums. Meet Mr. Meow, Mrs. Meow, and the friends who call Purrnia home.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://cubixmeow.com/about">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500;600;700&family=DM+Sans:ital,wght@0,300;0,400;0,500;0,600;1,400&family=Playfair+Display:ital,wght@0,400;0,500;0,600;1,400&display=swap" rel="stylesheet">
  <style>
    :root {
      --cream: #faf5ec;
      --cream-deep: #f3ead8;
      --warm-orange: #e8944a;
      --warm-orange-soft: #f0b87a;
      --moss-green: #7a9b6d;
      --moss-light: #a8c99b;
      --sky-soft: #9bbcd4;
      --sky-light: #c8dde9;
      --rose-soft: #e4a0a0;
      --rose-light: #f0c8c8;
      --earth-brown: #8b6f4e;
      --text-warm: #5a4332;
      --text-muted: #9a8574;
      --card-bg: rgba(255, 252, 245, 0.75);
      --card-hover: rgba(248, 235, 210, 0.9);
      --border-soft: rgba(180, 150, 110, 0.15);
      --wash-accent: rgba(232, 148, 74, 0.12);
      --ember-amber: #d4883a;
      --lullaby-indigo: #7b8fb8;
      --terrace-gold: #c9a832;
      --canyon-rose: #c48a8a;
      --tundra-lilac: #a68ab8;
      --archive-emerald: #6a8a6a;
      --canopy-pink: #c49ab0;
      --bazaar-berry: #9a5a6a;
    }

    *, *::before, *::after { margin: 0; padding: 0; box-sizing: border-box; }
    html { overflow-x: hidden; }
    body { background: var(--cream); font-family: 'DM Sans', sans-serif; color: var(--text-warm); overflow-x: hidden; -webkit-font-smoothing: antialiased; position: relative; width: 100%; }

    @keyframes floatBlob { 0%{transform:translate(0,0) scale(1)} 33%{transform:translate(15px,-20px) scale(1.05)} 66%{transform:translate(-10px,10px) scale(.97)} 100%{transform:translate(5px,-5px) scale(1.02)} }
    @keyframes fadeSlideUp { from{opacity:0;transform:translateY(30px)} to{opacity:1;transform:translateY(0)} }
    @keyframes pawDrift { 0%{opacity:0;transform:scale(.5) rotate(-20deg)} 50%{opacity:.12;transform:scale(1) rotate(0)} 100%{opacity:0;transform:scale(.8) rotate(10deg)} }

    .reveal { opacity:0; transform:translateY(30px); transition:opacity .7s ease, transform .7s ease; }
    .reveal.visible { opacity:1; transform:translateY(0); }

    .blob { position:absolute; border-radius:50% 40% 60% 50%/40% 50% 50% 60%; filter:blur(40px); pointer-events:none; z-index:0; }

    /* ── Nav ── */
    .nav { position:fixed; top:0; left:0; right:0; z-index:100; padding:16px 32px; display:flex; justify-content:space-between; align-items:center; transition:all .4s ease; background:rgba(250,245,236,.92); backdrop-filter:blur(20px); -webkit-backdrop-filter:blur(20px); border-bottom:1px solid var(--border-soft); }
    .nav-logo { display:flex; align-items:center; gap:10px; text-decoration:none; }
    .nav-logo-icon { font-size:24px; }
    .nav-logo-text { font-family:'Caveat',cursive; font-size:26px; font-weight:700; color:var(--text-warm); letter-spacing:-.5px; }
    .nav-links { display:flex; gap:32px; align-items:center; }
    .nav-links a { font-size:14px; color:var(--text-muted); text-decoration:none; letter-spacing:.5px; font-weight:500; transition:color .3s; }
    .nav-links a:hover { color:var(--warm-orange); }
    .nav-links a.active { color:var(--warm-orange); }
    .nav-mobile-toggle { display:none; background:none; border:none; cursor:pointer; width:32px; height:32px; position:relative; }
    .nav-mobile-toggle span { display:block; width:22px; height:2px; background:var(--text-warm); border-radius:2px; position:absolute; left:5px; transition:all .3s ease; }
    .nav-mobile-toggle span:nth-child(1){top:9px} .nav-mobile-toggle span:nth-child(2){top:15px} .nav-mobile-toggle span:nth-child(3){top:21px}

    /* ── Page Hero ── */
    .page-hero { padding:140px 24px 60px; text-align:center; position:relative; z-index:1; }
    .page-hero-badge { display:inline-block; padding:6px 20px; background:rgba(232,148,74,.1); border-radius:24px; margin-bottom:24px; border:1px solid rgba(232,148,74,.15); animation:fadeSlideUp 1s ease-out both; }
    .page-hero-badge span { font-size:13px; color:var(--warm-orange); letter-spacing:2px; text-transform:uppercase; font-weight:500; }
    .page-hero h1 { font-family:'Caveat',cursive; font-size:clamp(44px,7vw,76px); font-weight:700; line-height:1.1; color:var(--text-warm); margin-bottom:16px; animation:fadeSlideUp 1s ease-out .15s both; }
    .page-hero-sub { font-family:'Playfair Display',serif; font-size:clamp(16px,2.2vw,20px); color:var(--text-muted); font-style:italic; max-width:560px; margin:0 auto; line-height:1.6; animation:fadeSlideUp 1s ease-out .3s both; }

    /* ── Story Container ── */
    .story-container { max-width:680px; margin:0 auto; padding:0 24px 60px; position:relative; z-index:1; }

    .story-timeline { position:relative; padding-left:48px; }
    .story-timeline::before { content:''; position:absolute; top:0; bottom:0; left:18px; width:2px; background:linear-gradient(180deg, var(--warm-orange-soft) 0%, var(--moss-light) 25%, var(--rose-light) 50%, var(--sky-light) 75%, var(--tundra-lilac) 100%); border-radius:2px; }

    .story-chapter { position:relative; margin-bottom:64px; }
    .story-chapter:last-child { margin-bottom:0; }
    .chapter-marker { position:absolute; left:-48px; top:4px; width:36px; height:36px; border-radius:50%; display:flex; align-items:center; justify-content:center; font-size:18px; border:2px solid var(--border-soft); background:var(--cream); z-index:2; }
    .chapter-label { font-size:11px; letter-spacing:2.5px; text-transform:uppercase; color:var(--text-muted); margin-bottom:8px; font-weight:500; }
    .chapter-title { font-family:'Caveat',cursive; font-size:clamp(28px,4vw,36px); color:var(--text-warm); font-weight:600; margin-bottom:20px; line-height:1.2; }
    .chapter-text { font-size:15px; line-height:1.85; color:var(--text-muted); }
    .chapter-text p { margin-bottom:16px; }
    .chapter-text p:last-child { margin-bottom:0; }
    .chapter-highlight { font-family:'Playfair Display',serif; font-size:17px; font-style:italic; color:var(--text-warm); line-height:1.7; padding:20px 24px; margin:20px 0; background:linear-gradient(135deg,rgba(232,148,74,.06) 0%,rgba(122,155,109,.04) 100%); border-left:3px solid var(--warm-orange-soft); border-radius:0 12px 12px 0; }

    /* ── Section Headers (within story) ── */
    .section-header { text-align:center; margin-top:80px; margin-bottom:48px; }
    .section-header .chapter-label { text-align:center; }
    .section-header .chapter-title { text-align:center; margin-bottom:8px; }
    .section-header .section-divider { height:3px; max-width:120px; margin:16px auto 0; background:linear-gradient(90deg,transparent,var(--warm-orange-soft),transparent); border-radius:2px; }
    .section-header .section-desc { font-size:15px; color:var(--text-muted); max-width:480px; margin:20px auto 0; line-height:1.7; text-align:center; }

    /* ── Artifact Cards ── */
    .artifact-row { display:grid; grid-template-columns:1fr 1fr; gap:24px; margin:32px 0; }
    .artifact-card { padding:28px 24px; border-radius:20px; background:var(--card-bg); border:1px solid var(--border-soft); text-align:center; transition:transform .3s ease; }
    .artifact-card:hover { transform:translateY(-4px); }
    .artifact-icon { font-size:36px; margin-bottom:12px; }
    .artifact-name { font-family:'Caveat',cursive; font-size:22px; color:var(--text-warm); margin-bottom:4px; }
    .artifact-owner { font-size:11px; text-transform:uppercase; letter-spacing:1.5px; color:var(--warm-orange); font-weight:500; margin-bottom:10px; }
    .artifact-meaning { font-family:'Playfair Display',serif; font-size:14px; font-style:italic; color:var(--text-muted); line-height:1.6; }

    /* ── Region Cards ── */
    .regions-grid { display:grid; grid-template-columns:repeat(2,1fr); gap:16px; margin:32px 0; }
    .region-card { background:var(--card-bg); border-radius:20px; padding:24px 20px; border:1px solid var(--border-soft); position:relative; overflow:hidden; transition:all .4s ease; }
    .region-card:hover { transform:translateY(-4px); box-shadow:0 10px 32px rgba(180,130,80,.1); }
    .region-glow { position:absolute; top:-16px; left:50%; transform:translateX(-50%); width:70px; height:70px; border-radius:50%; filter:blur(22px); opacity:.25; pointer-events:none; }
    .region-card:hover .region-glow { opacity:.4; }
    .region-card .region-icon { font-size:28px; margin-bottom:8px; position:relative; }
    .region-card h4 { font-family:'Caveat',cursive; font-size:19px; color:var(--text-warm); margin:0 0 4px; position:relative; line-height:1.2; }
    .region-card .region-framework { font-size:10px; letter-spacing:1px; text-transform:uppercase; position:relative; margin-bottom:6px; font-weight:500; }
    .region-card p { font-size:12px; color:var(--text-muted); line-height:1.55; position:relative; }

    /* ── Character Cards ── */
    .character-cards { display:grid; grid-template-columns:1fr 1fr; gap:20px; margin:32px 0; }
    .char-card { padding:28px 22px; border-radius:20px; background:var(--card-bg); border:1px solid var(--border-soft); position:relative; overflow:hidden; transition:all .4s ease; }
    .char-card:hover { transform:translateY(-4px); box-shadow:0 10px 32px rgba(180,130,80,.1); }
    .char-card-glow { position:absolute; top:0; left:0; right:0; bottom:0; pointer-events:none; opacity:.5; }
    .char-card-emoji { font-size:36px; margin-bottom:12px; position:relative; }
    .char-card h3 { font-family:'Caveat',cursive; font-size:24px; color:var(--text-warm); margin-bottom:2px; position:relative; }
    .char-card-species { font-size:10px; letter-spacing:1.5px; text-transform:uppercase; color:var(--text-muted); margin-bottom:4px; position:relative; font-weight:500; }
    .char-card-role { font-size:12px; letter-spacing:1.5px; text-transform:uppercase; font-weight:500; margin-bottom:12px; position:relative; }
    .char-card p { font-size:13px; line-height:1.7; color:var(--text-muted); position:relative; }
    .char-trait { display:inline-block; padding:4px 12px; border-radius:12px; font-size:11px; font-weight:500; margin:10px 4px 0 0; position:relative; }

    /* ── Quirk detail ── */
    .char-quirk { font-size:12px; color:var(--text-muted); font-style:italic; margin-top:10px; position:relative; line-height:1.5; }

    /* ── Theme List ── */
    .themes-list { display:flex; flex-direction:column; gap:12px; margin:32px 0; }
    .theme-item { display:flex; align-items:flex-start; gap:14px; padding:16px 20px; background:var(--card-bg); border-radius:14px; border:1px solid var(--border-soft); }
    .theme-icon { font-size:20px; flex-shrink:0; margin-top:2px; }
    .theme-text { font-family:'Caveat',cursive; font-size:20px; color:var(--text-warm); line-height:1.3; }

    /* ── Magic Pills ── */
    .frameworks-grid { display:grid; grid-template-columns:repeat(2,1fr); gap:12px; margin:32px 0; }
    .framework-pill { padding:18px 14px; border-radius:16px; background:var(--card-bg); border:1px solid var(--border-soft); text-align:center; transition:all .3s ease; }
    .framework-pill:hover { transform:translateY(-3px); box-shadow:0 8px 24px rgba(180,130,80,.08); }
    .framework-pill .fw-icon { font-size:22px; margin-bottom:6px; }
    .framework-pill h5 { font-family:'Caveat',cursive; font-size:16px; color:var(--text-warm); margin:0 0 3px; }
    .framework-pill .fw-theme { font-size:10px; color:var(--text-muted); letter-spacing:.5px; }

    /* ── Mystery Cards ── */
    .mystery-list { display:flex; flex-direction:column; gap:14px; margin:32px 0; }
    .mystery-card { padding:20px 24px; border-radius:16px; background:var(--card-bg); border:1px solid var(--border-soft); }
    .mystery-card h4 { font-family:'Caveat',cursive; font-size:19px; color:var(--text-warm); margin-bottom:6px; }
    .mystery-card p { font-size:13px; color:var(--text-muted); line-height:1.6; }

    /* ── CTA ── */
    .story-cta { text-align:center; padding:60px 24px 80px; position:relative; z-index:1; }
    .story-cta-card { max-width:520px; margin:0 auto; padding:48px 40px; border-radius:28px; background:linear-gradient(135deg,rgba(232,148,74,.08) 0%,rgba(122,155,109,.06) 50%,rgba(155,188,212,.06) 100%); border:1px solid var(--border-soft); position:relative; overflow:hidden; }
    .story-cta-paw { position:absolute; top:-20px; right:-20px; font-size:80px; opacity:.08; transform:rotate(15deg); }
    .story-cta-card h2 { font-family:'Caveat',cursive; font-size:36px; color:var(--text-warm); margin-bottom:12px; }
    .story-cta-card > p { font-size:15px; color:var(--text-muted); line-height:1.7; margin-bottom:28px; }
    .cta-btn { display:inline-flex; align-items:center; gap:10px; padding:14px 36px; background:linear-gradient(135deg,var(--warm-orange) 0%,#d4782a 100%); color:white; border-radius:28px; text-decoration:none; font-family:'DM Sans',sans-serif; font-size:15px; font-weight:600; letter-spacing:.5px; transition:all .3s ease; box-shadow:0 4px 20px rgba(232,148,74,.3); border:none; cursor:pointer; }
    .cta-btn:hover { transform:translateY(-2px); box-shadow:0 8px 30px rgba(232,148,74,.4); }
    .cta-btn-secondary { display:inline-flex; align-items:center; gap:8px; padding:12px 28px; background:transparent; color:var(--text-warm); border-radius:28px; text-decoration:none; font-family:'DM Sans',sans-serif; font-size:14px; font-weight:500; transition:all .3s ease; border:1.5px solid var(--border-soft); margin-left:12px; }
    .cta-btn-secondary:hover { border-color:var(--warm-orange-soft); background:rgba(232,148,74,.05); }

    /* ── Footer ── */
    .footer { padding:40px 24px 32px; text-align:center; position:relative; z-index:1; }
    .footer-logo { display:flex; justify-content:center; align-items:center; gap:8px; margin-bottom:12px; }
    .footer-logo span:last-child { font-family:'Caveat',cursive; font-size:20px; color:var(--text-warm); font-weight:600; }
    .footer p { font-size:12px; color:var(--text-muted); letter-spacing:1px; }
    .footer .copyright { font-size:11px; margin-top:16px; opacity:.6; }

    .paw-print { position:absolute; pointer-events:none; z-index:0; }

    /* ── Responsive ── */
    @media (max-width:768px) {
      .nav{padding:12px 16px} .nav-links{display:none} .nav-mobile-toggle{display:block}
      .nav-links.open{display:flex;flex-direction:column;position:absolute;top:100%;left:0;right:0;background:rgba(250,245,236,.97);backdrop-filter:blur(20px);-webkit-backdrop-filter:blur(20px);padding:24px;gap:20px;border-bottom:1px solid var(--border-soft)}
      .page-hero{padding:110px 20px 40px} .page-hero h1{font-size:clamp(36px,10vw,56px)}
      .story-container{padding:0 16px 40px}
      .story-timeline{padding-left:40px} .story-timeline::before{left:14px}
      .chapter-marker{left:-40px;width:30px;height:30px;font-size:15px}
      .chapter-title{font-size:clamp(24px,6vw,32px)} .chapter-text{font-size:14px}
      .chapter-highlight{font-size:15px;padding:16px 20px}
      .character-cards{grid-template-columns:1fr;gap:16px}
      .artifact-row{grid-template-columns:1fr;gap:16px}
      .regions-grid{grid-template-columns:1fr;gap:12px}
      .frameworks-grid{grid-template-columns:1fr 1fr;gap:10px}
      .cta-btn-secondary{margin-left:0;margin-top:12px}
      .blob{display:none} .paw-print{display:none}
      .section-header{margin-top:60px;margin-bottom:36px}
    }
    @media (max-width:380px) {
      .page-hero h1{font-size:34px} .nav-logo-text{font-size:22px}
      .frameworks-grid{grid-template-columns:1fr}
    }
  </style>
</head>
<body>


<!-- Blobs -->
<div class="blob" style="width:450px;height:450px;top:-80px;left:-100px;background:radial-gradient(ellipse at 40% 40%,var(--warm-orange) 0%,transparent 70%);opacity:.07;animation:floatBlob 13s ease-in-out infinite alternate"></div>
<div class="blob" style="width:380px;height:380px;top:400px;left:72%;background:radial-gradient(ellipse at 40% 40%,var(--moss-green) 0%,transparent 70%);opacity:.06;animation:floatBlob 16s ease-in-out 2s infinite alternate"></div>
<div class="blob" style="width:320px;height:320px;top:1000px;left:8%;background:radial-gradient(ellipse at 40% 40%,var(--rose-soft) 0%,transparent 70%);opacity:.06;animation:floatBlob 14s ease-in-out 4s infinite alternate"></div>
<div class="blob" style="width:400px;height:400px;top:1800px;left:65%;background:radial-gradient(ellipse at 40% 40%,var(--sky-soft) 0%,transparent 70%);opacity:.05;animation:floatBlob 17s ease-in-out 3s infinite alternate"></div>
<div class="blob" style="width:350px;height:350px;top:2600px;left:25%;background:radial-gradient(ellipse at 40% 40%,var(--warm-orange-soft) 0%,transparent 70%);opacity:.05;animation:floatBlob 15s ease-in-out 5s infinite alternate"></div>
<div class="blob" style="width:300px;height:300px;top:3400px;left:70%;background:radial-gradient(ellipse at 40% 40%,var(--tundra-lilac) 0%,transparent 70%);opacity:.05;animation:floatBlob 12s ease-in-out 1s infinite alternate"></div>
<div class="blob" style="width:360px;height:360px;top:4200px;left:15%;background:radial-gradient(ellipse at 40% 40%,var(--canopy-pink) 0%,transparent 70%);opacity:.04;animation:floatBlob 16s ease-in-out 3s infinite alternate"></div>
<div class="blob" style="width:340px;height:340px;top:5000px;left:60%;background:radial-gradient(ellipse at 40% 40%,var(--moss-light) 0%,transparent 70%);opacity:.05;animation:floatBlob 14s ease-in-out 2s infinite alternate"></div>

<!-- Paw prints -->
<svg class="paw-print" width="24" height="24" viewBox="0 0 24 24" fill="var(--earth-brown)" style="top:10%;left:8%;transform:rotate(-90deg) scale(0.7);animation:pawDrift 7s ease-in-out 0s infinite">
  <ellipse cx="12" cy="16" rx="5" ry="4.5"/><circle cx="7" cy="9" r="2.5"/><circle cx="17" cy="9" r="2.5"/><circle cx="4" cy="13" r="2"/><circle cx="20" cy="13" r="2"/>
</svg>
<svg class="paw-print" width="24" height="24" viewBox="0 0 24 24" fill="var(--earth-brown)" style="top:22%;left:49%;transform:rotate(-40deg) scale(1.05);animation:pawDrift 9s ease-in-out 1.8s infinite">
  <ellipse cx="12" cy="16" rx="5" ry="4.5"/><circle cx="7" cy="9" r="2.5"/><circle cx="17" cy="9" r="2.5"/><circle cx="4" cy="13" r="2"/><circle cx="20" cy="13" r="2"/>
</svg>
<svg class="paw-print" width="24" height="24" viewBox="0 0 24 24" fill="var(--earth-brown)" style="top:34%;left:90%;transform:rotate(10deg) scale(1.4);animation:pawDrift 11s ease-in-out 3.6s infinite">
  <ellipse cx="12" cy="16" rx="5" ry="4.5"/><circle cx="7" cy="9" r="2.5"/><circle cx="17" cy="9" r="2.5"/><circle cx="4" cy="13" r="2"/><circle cx="20" cy="13" r="2"/>
</svg>
<svg class="paw-print" width="24" height="24" viewBox="0 0 24 24" fill="var(--earth-brown)" style="top:46%;left:46%;transform:rotate(60deg) scale(0.7);animation:pawDrift 13s ease-in-out 5.4s infinite">
  <ellipse cx="12" cy="16" rx="5" ry="4.5"/><circle cx="7" cy="9" r="2.5"/><circle cx="17" cy="9" r="2.5"/><circle cx="4" cy="13" r="2"/><circle cx="20" cy="13" r="2"/>
</svg>
<svg class="paw-print" width="24" height="24" viewBox="0 0 24 24" fill="var(--earth-brown)" style="top:58%;left:87%;transform:rotate(110deg) scale(1.05);animation:pawDrift 15s ease-in-out 7.2s infinite">
  <ellipse cx="12" cy="16" rx="5" ry="4.5"/><circle cx="7" cy="9" r="2.5"/><circle cx="17" cy="9" r="2.5"/><circle cx="4" cy="13" r="2"/><circle cx="20" cy="13" r="2"/>
</svg>
<svg class="paw-print" width="24" height="24" viewBox="0 0 24 24" fill="var(--earth-brown)" style="top:70%;left:43%;transform:rotate(160deg) scale(1.4);animation:pawDrift 17s ease-in-out 9s infinite">
  <ellipse cx="12" cy="16" rx="5" ry="4.5"/><circle cx="7" cy="9" r="2.5"/><circle cx="17" cy="9" r="2.5"/><circle cx="4" cy="13" r="2"/><circle cx="20" cy="13" r="2"/>
</svg>
<svg class="paw-print" width="24" height="24" viewBox="0 0 24 24" fill="var(--earth-brown)" style="top:82%;left:84%;transform:rotate(210deg) scale(0.7);animation:pawDrift 19s ease-in-out 10.8s infinite">
  <ellipse cx="12" cy="16" rx="5" ry="4.5"/><circle cx="7" cy="9" r="2.5"/><circle cx="17" cy="9" r="2.5"/><circle cx="4" cy="13" r="2"/><circle cx="20" cy="13" r="2"/>
</svg>
<svg class="paw-print" width="24" height="24" viewBox="0 0 24 24" fill="var(--earth-brown)" style="top:94%;left:40%;transform:rotate(260deg) scale(1.05);animation:pawDrift 21s ease-in-out 12.6s infinite">
  <ellipse cx="12" cy="16" rx="5" ry="4.5"/><circle cx="7" cy="9" r="2.5"/><circle cx="17" cy="9" r="2.5"/><circle cx="4" cy="13" r="2"/><circle cx="20" cy="13" r="2"/>
</svg>


<!-- NAV -->
<nav class="nav">
  <a href="index.html" class="nav-logo"><span class="nav-logo-icon">🐾</span><span class="nav-logo-text">Cubix Meow</span></a>
  <div class="nav-links" id="navLinks">
    <a href="index.html">Home</a>
    <a href="about.php" class="active">Our Story</a>
    <a href="index.html#purrnia">Purrnia</a>
    <a href="index.html#characters">Characters</a>
    <a href="https://www.facebook.com/cubix.meow.rules" target="_blank" rel="noopener">Follow Us</a>
  </div>
  <button class="nav-mobile-toggle" id="navToggle" aria-label="Toggle menu"><span></span><span></span><span></span></button>
</nav>


<!-- PAGE HERO -->
<section class="page-hero">
  <div class="page-hero-badge"><span>The world behind the paws</span></div>
  <h1>The Story of Purrnia</h1>
  <p class="page-hero-sub">
    A world that grew from the love of two small cats who chose each other
    and walked forward together. This is how it began.
  </p>
</section>


<!-- THE ORIGIN STORY -->
<div class="story-container">
  <div class="story-timeline">

    <!-- Chapter 1: The Purr -->
    <div class="story-chapter reveal">
      <div class="chapter-marker">✨</div>
      <div class="chapter-label">In the beginning</div>
      <h2 class="chapter-title">The Purr</h2>
      <div class="chapter-text">
        <p>
          In the time before Purrnia had a name, there was just the Purr. A low, warm
          vibration in the emptiness, like a song with no singer. It had always been there.
          It waited, patient and gentle, for something to resonate with.
        </p>
        <div class="chapter-highlight">
          The world was not empty. It was quiet. The way a hearth is quiet before someone lights it.
        </div>
      </div>
    </div>

    <!-- Chapter 2: Mr. Meow Before -->
    <div class="story-chapter reveal">
      <div class="chapter-marker">🎒</div>
      <div class="chapter-label">Before they met</div>
      <h2 class="chapter-title">The Cat Who Never Stayed</h2>
      <div class="chapter-text">
        <p>
          Mr. Meow was a restless tabby who carried everything he owned in a small leather
          backpack. Inside it: a smooth stone from a riverbed, a dried leaf that smelled like
          rain, a button found on a bridge at dawn. Little things from big places. He had
          crossed every horizon and found nothing that made him want to stop.
        </p>
        <p>
          Every sunset was beautiful, but there was nobody to turn to and say, "Look at that."
          Every new place had a story, but stories told to no one fade faster than footprints
          in sand.
        </p>
        <div class="chapter-highlight">
          He was the happiest cat in the world. He just did not know yet
          that he was also the loneliest.
        </div>
      </div>
    </div>

    <!-- Chapter 3: Mrs. Meow Before -->
    <div class="story-chapter reveal">
      <div class="chapter-marker">🌸</div>
      <div class="chapter-label">Before they met</div>
      <h2 class="chapter-title">The Cat with the Quiet Garden</h2>
      <div class="chapter-text">
        <p>
          Mrs. Meow had a garden. It was small and imperfect and entirely hers. There were
          wildflowers that came back every spring, a stone wall warm enough to sleep on, and
          a wooden gate she had never once opened from the outside.
        </p>
        <p>
          She kept a flower behind her ear, a soft pink bloom from the bush by the fence,
          replaced each morning because she liked the ritual of choosing. Sometimes the wind
          carried unfamiliar scents over the wall, and she would close her eyes and wonder.
        </p>
        <div class="chapter-highlight">
          She was content. But sometimes, late in the afternoon, she felt something
          she could not quite name. Not sadness. Just a quiet question with no answer.
        </div>
      </div>
    </div>

    <!-- Chapter 4: The Meeting -->
    <div class="story-chapter reveal">
      <div class="chapter-marker">💛</div>
      <div class="chapter-label">The day everything changed</div>
      <h2 class="chapter-title">The Garden Gate</h2>
      <div class="chapter-text">
        <p>
          He wandered past her fence on an ordinary afternoon. She was watering her garden.
          He stopped. Not because anything dramatic happened. He stopped because for the first
          time in his life, he did not want to see what was around the next corner.
        </p>
        <p>
          She looked up. She saw an orange tabby with dust on his paws and a backpack that
          had clearly been everywhere. He looked tired and wide-eyed and completely happy to
          be standing outside her garden wall.
        </p>
        <div class="chapter-highlight">
          She opened the gate.
        </div>
        <p>
          They sat together in her garden for one full day. He told her about a lake where the
          water was so still you could see the clouds below you. She gave him a leaf the most
          perfect shade of amber and told him it reminded her of sunsets she had only imagined.
        </p>
        <p>
          And the Purr, which had been waiting since the beginning of everything, found its
          resonance. Two frequencies, one restless and one rooted, harmonizing for the
          first time.
        </p>
      </div>
    </div>

    <!-- Chapter 5: The World Grows -->
    <div class="story-chapter reveal">
      <div class="chapter-marker">🌍</div>
      <div class="chapter-label">From that day on</div>
      <h2 class="chapter-title">The World Grew Beneath Their Paws</h2>
      <div class="chapter-text">
        <p>
          The next morning, they walked out together. And as they walked, the Purr followed.
          Where they felt wonder, canyons opened. Where they felt safe, forests grew. Where
          they felt joy, terraces bloomed. Where they felt at peace, lakes filled.
        </p>
        <p>
          The world was not built. It was felt into being, one emotion at a time, by two
          small cats who loved each other enough to let that love become everything.
        </p>
        <div class="chapter-highlight">
          He gave her a reason to walk out the gate. She gave him a reason
          to stop long enough to see where he was. And together, their love became a world.
        </div>
        <p>
          When they had walked far enough, they returned to the place where her garden had
          been. They found a great tree that had grown from the single flower she once wore
          behind her ear, planted in the soil where they first sat together. They rested
          beneath it. The Purr found its full voice. The world exhaled. And Purrnia began.
        </p>
      </div>
    </div>
  </div>

  <!-- THE ARTIFACTS -->
  <div class="section-header reveal">
    <p class="chapter-label">What they carry</p>
    <h2 class="chapter-title">The Backpack & The Flower</h2>
    <div class="section-divider"></div>
  </div>

  <div class="artifact-row reveal">
    <div class="artifact-card">
      <div class="artifact-icon">🎒</div>
      <div class="artifact-name">The Leather Backpack</div>
      <div class="artifact-owner">Mr. Meow</div>
      <p class="artifact-meaning">
        Everything he was before her. The wanderer, the collector,
        the cat who believed the world was worth seeing. He never takes it off.
      </p>
    </div>
    <div class="artifact-card">
      <div class="artifact-icon">🌸</div>
      <div class="artifact-name">The Flower</div>
      <div class="artifact-owner">Mrs. Meow</div>
      <p class="artifact-meaning">
        The garden she chose to carry rather than stay behind.
        The Rootmother, the great tree at the center of Purrnia, grew from this flower.
      </p>
    </div>
  </div>

  <!-- THE CUBIX MEOW -->
  <div class="section-header reveal">
    <p class="chapter-label">The magic</p>
    <h2 class="chapter-title">The Cubix Meow</h2>
    <div class="section-divider"></div>
    <p class="section-desc">
      The living pulse of Purrnia. A vast web of warm energy that flows beneath the soil,
      through the water, and between every living creature. It responds to kindness.
      It remembers every good thing anyone ever did. The ground beneath your feet
      is made of crystallized care.
    </p>
  </div>

  <div class="chapter-highlight reveal" style="margin:0 0 32px">
    The entire world runs on one premise: the land is only as alive as the love that moves through it.
  </div>

  <div class="frameworks-grid">
          <div class="framework-pill reveal" style="transition-delay:0s">
        <div class="fw-icon">🕯️</div>
        <h5>Nostalgic Anchoring</h5>
        <div class="fw-theme">Memory &amp; Comfort</div>
      </div>
          <div class="framework-pill reveal" style="transition-delay:0.05s">
        <div class="fw-icon">🤝</div>
        <h5>Harmonic Synthesis</h5>
        <div class="fw-theme">Friendship &amp; Trust</div>
      </div>
          <div class="framework-pill reveal" style="transition-delay:0.1s">
        <div class="fw-icon">🔍</div>
        <h5>Epistemic Unveiling</h5>
        <div class="fw-theme">Curiosity &amp; Wonder</div>
      </div>
          <div class="framework-pill reveal" style="transition-delay:0.15s">
        <div class="fw-icon">💛</div>
        <h5>Empathetic Transmutation</h5>
        <div class="fw-theme">Kindness &amp; Empathy</div>
      </div>
          <div class="framework-pill reveal" style="transition-delay:0.2s">
        <div class="fw-icon">🍞</div>
        <h5>Hearth-Crafting</h5>
        <div class="fw-theme">Domesticity &amp; Care</div>
      </div>
          <div class="framework-pill reveal" style="transition-delay:0.25s">
        <div class="fw-icon">🧶</div>
        <h5>Catenary Weaving</h5>
        <div class="fw-theme">Connection &amp; Play</div>
      </div>
          <div class="framework-pill reveal" style="transition-delay:0.3s">
        <div class="fw-icon">🐾</div>
        <h5>Intuitive Wayfinding</h5>
        <div class="fw-theme">Hope &amp; Surrender</div>
      </div>
          <div class="framework-pill reveal" style="transition-delay:0.35s">
        <div class="fw-icon">🌱</div>
        <h5>Generative Cultivation</h5>
        <div class="fw-theme">Stewardship &amp; Nature</div>
      </div>
      </div>

  <!-- THE EIGHT REGIONS -->
  <div class="section-header reveal">
    <p class="chapter-label">The world</p>
    <h2 class="chapter-title">The Eight Regions</h2>
    <div class="section-divider"></div>
    <p class="section-desc">
      Eight places where Mr. Meow and Mrs. Meow stopped, felt something,
      and let the feeling take root. All connected by the Threadways
      to the Rootmother at Hearthstone Commons.
    </p>
  </div>

  <div class="regions-grid">
          <div class="region-card reveal" style="transition-delay:0s">
        <div class="region-glow" style="background:#d4883a"></div>
        <div class="region-icon">🔥</div>
        <h4>Emberwood Thicket</h4>
        <div class="region-framework" style="color:var(--ember-amber)">Hearth-Crafting</div>
        <p>Ancient forest of golden light, empathetic fires, and homes carved into colossal trees. Tea-Cup Foxes sleep on warm pastries.</p>
      </div>
          <div class="region-card reveal" style="transition-delay:0.05s">
        <div class="region-glow" style="background:#7b8fb8"></div>
        <div class="region-icon">🌊</div>
        <h4>Lullaby Lochs</h4>
        <div class="region-framework" style="color:var(--lullaby-indigo)">Intuitive Wayfinding</div>
        <p>Terraced lakes under eternal twilight. The water hums when touched. Bubble-Frogs comfort the lonely.</p>
      </div>
          <div class="region-card reveal" style="transition-delay:0.1s">
        <div class="region-glow" style="background:#c9a832"></div>
        <div class="region-icon">🌻</div>
        <h4>Sun-Draped Terraces</h4>
        <div class="region-framework" style="color:var(--terrace-gold)">Generative Cultivation</div>
        <p>Mediterranean hills of perpetual harvest. Plants grow when complimented. Silk-Weaver Bees weave gifts of sunlight.</p>
      </div>
          <div class="region-card reveal" style="transition-delay:0.15s">
        <div class="region-glow" style="background:#c48a8a"></div>
        <div class="region-icon">🪁</div>
        <h4>Chiming Canyons</h4>
        <div class="region-framework" style="color:var(--canyon-rose)">Epistemic Unveiling</div>
        <p>Rose-quartz mesas and crystal geodes. The wind carries you. Kite-Rays swim through the air.</p>
      </div>
          <div class="region-card reveal" style="transition-delay:0.2s">
        <div class="region-glow" style="background:#a68ab8"></div>
        <div class="region-icon">❄️</div>
        <h4>Velvet Tundra</h4>
        <div class="region-framework" style="color:var(--tundra-lilac)">Empathetic Transmutation</div>
        <p>Diamond snow that never chills. Auroras drip warm light into healing pools. Woolly Moth-Cats are living blankets.</p>
      </div>
          <div class="region-card reveal" style="transition-delay:0.25s">
        <div class="region-glow" style="background:#6a8a6a"></div>
        <div class="region-icon">📜</div>
        <h4>Glimmering Archives</h4>
        <div class="region-framework" style="color:var(--archive-emerald)">Nostalgic Anchoring</div>
        <p>A city of petrified books and floating lanterns powered by donated happy memories.</p>
      </div>
          <div class="region-card reveal" style="transition-delay:0.3s">
        <div class="region-glow" style="background:#c49ab0"></div>
        <div class="region-icon">☁️</div>
        <h4>Cloud-Spun Canopy</h4>
        <div class="region-framework" style="color:var(--canopy-pink)">Catenary Weaving</div>
        <p>Walkable clouds sculpted by hand. Aura-Sheep change color with the sky. Rainbow bridges connect islands.</p>
      </div>
          <div class="region-card reveal" style="transition-delay:0.35s">
        <div class="region-glow" style="background:#9a5a6a"></div>
        <div class="region-icon">🧵</div>
        <h4>Bramble-Patch Bazaars</h4>
        <div class="region-framework" style="color:var(--bazaar-berry)">Harmonic Synthesis</div>
        <p>Underground markets lit by glowing berries. Broken things mend with gold. Patchwork Badgers find what you've lost.</p>
      </div>
      </div>

  <!-- THE CHARACTERS -->
  <div class="section-header reveal">
    <p class="chapter-label">The inhabitants</p>
    <h2 class="chapter-title">Friends of Purrnia</h2>
    <div class="section-divider"></div>
    <p class="section-desc">
      The Purren are soft, round, feline creatures with a Glow over their heart.
      But Purrnia is home to many species, each with their own warmth.
    </p>
  </div>

  <div class="character-cards">
          <div class="char-card reveal" style="transition-delay:0s">
        <div class="char-card-glow" style="background:radial-gradient(circle at 30% 30%,rgba(122,155,109,.08) 0%,transparent 60%)"></div>
        <div class="char-card-emoji">🐕</div>
        <h3>Templeton</h3>
        <div class="char-card-species">Golden Hound</div>
        <div class="char-card-role" style="color:var(--moss-green)">Cultivator · Sun-Draped Terraces</div>
        <p>Tends the Tanglewood, the most productive and most chaotic garden in the Terraces. Names every plant. Gives everything away except lunch for himself.</p>
        <p class="char-quirk">"Falls asleep between the rows so often that vines grow over his legs. His satchel always has something sprouting out of it."</p>
                  <span class="char-trait" style="background:rgba(122,155,109,.1);color:var(--moss-green)">Patient</span>
                  <span class="char-trait" style="background:rgba(232,148,74,.1);color:var(--warm-orange)">Generous</span>
                  <span class="char-trait" style="background:rgba(155,188,212,.1);color:#6a96b0">Forgetful</span>
              </div>
          <div class="char-card reveal" style="transition-delay:0.06s">
        <div class="char-card-glow" style="background:radial-gradient(circle at 30% 30%,rgba(155,188,212,.08) 0%,transparent 60%)"></div>
        <div class="char-card-emoji">🐆</div>
        <h3>Maya</h3>
        <div class="char-card-species">Snow Pard</div>
        <div class="char-card-role" style="color:var(--sky-soft)">Seeker · Chiming Canyons</div>
        <p>High-altitude explorer and cartographer. Makes the most beautiful maps in Purrnia. Talks to herself in full debates while climbing.</p>
        <p class="char-quirk">"Wears an ankle bell so she stops appearing silently behind people. Her den is a beautiful disaster of priceless crystals and unwashed teacups."</p>
                  <span class="char-trait" style="background:rgba(155,188,212,.1);color:#6a96b0">Observant</span>
                  <span class="char-trait" style="background:rgba(122,155,109,.1);color:var(--moss-green)">Precise</span>
                  <span class="char-trait" style="background:rgba(228,160,160,.1);color:#c07070">Restless</span>
              </div>
          <div class="char-card reveal" style="transition-delay:0.12s">
        <div class="char-card-glow" style="background:radial-gradient(circle at 30% 30%,rgba(201,168,50,.08) 0%,transparent 60%)"></div>
        <div class="char-card-emoji">🦁</div>
        <h3>Tony</h3>
        <div class="char-card-species">Mane-Cat</div>
        <div class="char-card-role" style="color:var(--terrace-gold)">Keeper · Glimmering Archives</div>
        <p>Eyes perpetually half-closed. Reads ancient memory cubes. Radiates warmth so steady that people heal just by sitting near him.</p>
        <p class="char-quirk">"Falls asleep everywhere, which the community reads as a sign that the space is safe. Purrs audibly when experiencing a good memory cube."</p>
                  <span class="char-trait" style="background:rgba(201,168,50,.1);color:var(--terrace-gold)">Calm</span>
                  <span class="char-trait" style="background:rgba(232,148,74,.1);color:var(--warm-orange)">Present</span>
                  <span class="char-trait" style="background:rgba(122,155,109,.1);color:var(--moss-green)">Wise</span>
              </div>
          <div class="char-card reveal" style="transition-delay:0.18s">
        <div class="char-card-glow" style="background:radial-gradient(circle at 30% 30%,rgba(168,201,155,.08) 0%,transparent 60%)"></div>
        <div class="char-card-emoji">🦥</div>
        <h3>Garro</h3>
        <div class="char-card-species">Moss Sloth</div>
        <div class="char-card-role" style="color:var(--moss-light)">Mender · Tundra-Thicket Border</div>
        <p>Gives the best hugs in Purrnia. Slows the world down around people in pain so they can see their feelings one at a time.</p>
        <p class="char-quirk">"Things grow in his fur and he does not notice. Templeton once removed a fully sprouted bean plant from behind his ear. He said, "That is a good bean.""</p>
                  <span class="char-trait" style="background:rgba(168,201,155,.1);color:var(--moss-light)">Kind</span>
                  <span class="char-trait" style="background:rgba(155,188,212,.1);color:#6a96b0">Slow</span>
                  <span class="char-trait" style="background:rgba(228,160,160,.1);color:#c07070">Perceptive</span>
              </div>
          <div class="char-card reveal" style="transition-delay:0.24s">
        <div class="char-card-glow" style="background:radial-gradient(circle at 30% 30%,rgba(123,143,184,.08) 0%,transparent 60%)"></div>
        <div class="char-card-emoji">🦫</div>
        <h3>Brappie</h3>
        <div class="char-card-species">River Bara</div>
        <div class="char-card-role" style="color:var(--lullaby-indigo)">Harmonist · Bramble-Patch Bazaars</div>
        <p>Knows every name, every tea preference, every heartache in the Bazaars. A living tuning fork for social harmony.</p>
        <p class="char-quirk">"Completely immovable when she decides to sit somewhere. Once fell asleep in a Threadway and travelers walked around her for six hours."</p>
                  <span class="char-trait" style="background:rgba(123,143,184,.1);color:var(--lullaby-indigo)">Social</span>
                  <span class="char-trait" style="background:rgba(232,148,74,.1);color:var(--warm-orange)">Calm</span>
                  <span class="char-trait" style="background:rgba(122,155,109,.1);color:var(--moss-green)">Grounded</span>
              </div>
          <div class="char-card reveal" style="transition-delay:0.3s">
        <div class="char-card-glow" style="background:radial-gradient(circle at 30% 30%,rgba(212,136,58,.08) 0%,transparent 60%)"></div>
        <div class="char-card-emoji">🐂</div>
        <h3>Angus</h3>
        <div class="char-card-species">Highland Woolly</div>
        <div class="char-card-role" style="color:var(--ember-amber)">Hearthkeeper · Emberwood Thicket</div>
        <p>Bakes one bread. Tends one fire that has not gone out in living memory. Cannot see through his fringe and refuses to trim it.</p>
        <p class="char-quirk">"Navigates entirely by feel, sound, and smell. His baking process is non-verbal and non-measured. "You just know when it is ready," he says."</p>
                  <span class="char-trait" style="background:rgba(212,136,58,.1);color:var(--ember-amber)">Solid</span>
                  <span class="char-trait" style="background:rgba(122,155,109,.1);color:var(--moss-green)">Traditional</span>
                  <span class="char-trait" style="background:rgba(155,188,212,.1);color:#6a96b0">Content</span>
              </div>
      </div>

  <!-- SEVEN TRUTHS -->
  <div class="section-header reveal">
    <p class="chapter-label">What we believe</p>
    <h2 class="chapter-title">The Seven Truths</h2>
    <div class="section-divider"></div>
  </div>

  <div class="themes-list">
          <div class="theme-item reveal" style="transition-delay:0s">
        <span class="theme-icon">✨</span>
        <span class="theme-text">The world remembers kindness.</span>
      </div>
          <div class="theme-item reveal" style="transition-delay:0.07s">
        <span class="theme-icon">💛</span>
        <span class="theme-text">Vulnerability is the source of all strength.</span>
      </div>
          <div class="theme-item reveal" style="transition-delay:0.14s">
        <span class="theme-icon">🤝</span>
        <span class="theme-text">No one can do everything alone.</span>
      </div>
          <div class="theme-item reveal" style="transition-delay:0.21s">
        <span class="theme-icon">🍞</span>
        <span class="theme-text">Care is the most powerful act.</span>
      </div>
          <div class="theme-item reveal" style="transition-delay:0.28s">
        <span class="theme-icon">🌱</span>
        <span class="theme-text">Growth cannot be forced.</span>
      </div>
          <div class="theme-item reveal" style="transition-delay:0.35s">
        <span class="theme-icon">💫</span>
        <span class="theme-text">Nothing is ever truly broken.</span>
      </div>
          <div class="theme-item reveal" style="transition-delay:0.42s">
        <span class="theme-icon">🐾</span>
        <span class="theme-text">No one is ever truly lost.</span>
      </div>
      </div>

  <!-- QUIET MYSTERIES -->
  <div class="section-header reveal">
    <p class="chapter-label">Things we wonder about</p>
    <h2 class="chapter-title">The Quiet Mysteries</h2>
    <div class="section-divider"></div>
    <p class="section-desc">
      Unanswered questions that Purren hold gently, like a smooth stone in a pocket.
    </p>
  </div>

  <div class="mystery-list">
          <div class="mystery-card reveal" style="transition-delay:0s">
        <h4>Are the First Wanderers still walking?</h4>
        <p>The oldest memory cubes show two figures matching the stories. No cube has ever shown them stopping.</p>
      </div>
          <div class="mystery-card reveal" style="transition-delay:0.06s">
        <h4>What is at the sorce of the Cubix Meow?</h4>
        <p>Seekers have explored deeper than anyone thought possible and still found more cubes, more corridors, more shimmering geometry.</p>
      </div>
          <div class="mystery-card reveal" style="transition-delay:0.12s">
        <h4>Why do the Meow-Lights look like cats?</h4>
        <p>The spirit familiars always take a feline shape. Always. Even in regions populated by foxes, frogs, and rays.</p>
      </div>
          <div class="mystery-card reveal" style="transition-delay:0.18s">
        <h4>Who left the first Lantern Post journal?</h4>
        <p>The oldest entries are written in a script no living Purren can read, in ink that still glows. Some believe it is Mrs. Meow's handwriting.</p>
      </div>
          <div class="mystery-card reveal" style="transition-delay:0.24s">
        <h4>What do the Drowsy Places dream about?</h4>
        <p>The sleeping land is not dead. Cultivators at the edges say the soil feels distant, as if remembering something far away.</p>
      </div>
      </div>

</div>


<!-- CTA -->
<section class="story-cta">
  <div class="story-cta-card reveal">
    <div class="story-cta-paw">🐾</div>
    <h2>Follow the Paws</h2>
    <p>
      New art, comics, and stories from Purrnia every day.
      Join Mr. Meow and Mrs. Meow on their adventures.
    </p>
    <div>
      <a href="https://www.facebook.com/cubix.meow.rules" target="_blank" rel="noopener noreferrer" class="cta-btn">🐾 Follow on Facebook</a>
      <a href="index.html" class="cta-btn-secondary">← Back Home</a>
    </div>
  </div>
</section>


<!-- FOOTER -->
<footer class="footer">
  <div class="footer-logo"><span>🐾</span><span>Cubix Meow</span></div>
  <p>Two cats. One world. Endless wonder.</p>
  <p class="copyright">&copy; 2026 Cubix Meow. The world of Purrnia. Made with love for cats and travel.</p>
</footer>


<script>
const navToggle = document.getElementById('navToggle');
const navLinks = document.getElementById('navLinks');
navToggle.addEventListener('click', () => { navLinks.classList.toggle('open'); });

const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => { if (entry.isIntersecting) entry.target.classList.add('visible'); });
}, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });
document.querySelectorAll('.reveal').forEach(el => observer.observe(el));
</script>

</body>
</html>