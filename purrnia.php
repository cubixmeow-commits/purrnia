<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>The World of Purrnia - A Complete Guide</title>
  <meta name="description" content="Explore every corner of Purrnia - a world that grew from the love of two cats. Eight regions, eight frameworks of magic, and the creatures who call it home.">
  <meta property="og:title" content="The World of Purrnia - A Complete Guide">
  <meta property="og:description" content="The Cubix Meow. Eight regions. The Purren. A world made of crystallized kindness.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://cubixmeow.com/purrnia">
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
      --hearthstone-gold: #b89a3a;
    }

    *, *::before, *::after { margin:0; padding:0; box-sizing:border-box; }
    html { overflow-x:hidden; scroll-behavior:smooth; }
    body { background:var(--cream); font-family:'DM Sans',sans-serif; color:var(--text-warm); overflow-x:hidden; -webkit-font-smoothing:antialiased; position:relative; width:100%; }

    /* ── Animations ── */
    @keyframes floatBlob { 0%{transform:translate(0,0) scale(1)} 33%{transform:translate(15px,-20px) scale(1.05)} 66%{transform:translate(-10px,10px) scale(.97)} 100%{transform:translate(5px,-5px) scale(1.02)} }
    @keyframes fadeSlideUp { from{opacity:0;transform:translateY(30px)} to{opacity:1;transform:translateY(0)} }
    @keyframes gentleBounce { 0%,100%{transform:translateY(0)} 50%{transform:translateY(-8px)} }
    @keyframes pawDrift { 0%{opacity:0;transform:scale(.5) rotate(-20deg)} 50%{opacity:.12;transform:scale(1) rotate(0)} 100%{opacity:0;transform:scale(.8) rotate(10deg)} }
    @keyframes pulseGlow { 0%,100%{opacity:.4;box-shadow:0 0 20px currentColor} 50%{opacity:.7;box-shadow:0 0 40px currentColor} }
    @keyframes rotateSlowly { from{transform:rotate(0deg)} to{transform:rotate(360deg)} }
    @keyframes breathe { 0%,100%{transform:scale(1);opacity:.6} 50%{transform:scale(1.08);opacity:.9} }
    @keyframes shimmerLine { 0%{background-position:-200% 0} 100%{background-position:200% 0} }
    @keyframes typeIn { from{width:0} to{width:100%} }
    @keyframes driftUp { 0%{opacity:0;transform:translateY(40px) scale(.95)} 100%{opacity:1;transform:translateY(0) scale(1)} }

    .reveal { opacity:0; transform:translateY(30px); transition:opacity .8s cubic-bezier(.22,1,.36,1), transform .8s cubic-bezier(.22,1,.36,1); }
    .reveal.visible { opacity:1; transform:translateY(0); }
    .reveal-delay-1 { transition-delay:.1s; }
    .reveal-delay-2 { transition-delay:.2s; }
    .reveal-delay-3 { transition-delay:.3s; }
    .reveal-delay-4 { transition-delay:.4s; }

    /* ── Watercolor Blobs ── */
    .blob { position:absolute; border-radius:50% 40% 60% 50%/40% 50% 50% 60%; filter:blur(50px); pointer-events:none; z-index:0; }
    .paw-print { position:absolute; pointer-events:none; z-index:0; }

    /* ── Nav ── */
    .nav { position:fixed; top:0; left:0; right:0; z-index:100; padding:16px 32px; display:flex; justify-content:space-between; align-items:center; transition:all .4s ease; }
    .nav.scrolled { background:rgba(250,245,236,.92); backdrop-filter:blur(20px); -webkit-backdrop-filter:blur(20px); border-bottom:1px solid var(--border-soft); }
    .nav-logo { display:flex; align-items:center; gap:10px; text-decoration:none; }
    .nav-logo-icon { font-size:24px; }
    .nav-logo-text { font-family:'Caveat',cursive; font-size:26px; font-weight:700; color:var(--text-warm); letter-spacing:-.5px; }
    .nav-links { display:flex; gap:32px; align-items:center; }
    .nav-links a { font-size:14px; color:var(--text-muted); text-decoration:none; letter-spacing:.5px; font-weight:500; transition:color .3s; }
    .nav-links a:hover, .nav-links a.active { color:var(--warm-orange); }
    .nav-mobile-toggle { display:none; background:none; border:none; cursor:pointer; width:32px; height:32px; position:relative; }
    .nav-mobile-toggle span { display:block; width:22px; height:2px; background:var(--text-warm); border-radius:2px; position:absolute; left:5px; transition:all .3s ease; }
    .nav-mobile-toggle span:nth-child(1){top:9px} .nav-mobile-toggle span:nth-child(2){top:15px} .nav-mobile-toggle span:nth-child(3){top:21px}

    /* ── Epic Hero ── */
    .epic-hero {
      min-height:100vh; display:flex; flex-direction:column; justify-content:center; align-items:center;
      text-align:center; padding:120px 24px 80px; position:relative; z-index:1; overflow:hidden;
    }
    .hero-orb {
      position:absolute; width:min(600px,90vw); height:min(600px,90vw); border-radius:50%;
      background:radial-gradient(circle, rgba(232,148,74,.1) 0%, rgba(122,155,109,.06) 30%, rgba(155,188,212,.04) 50%, transparent 70%);
      top:50%; left:50%; transform:translate(-50%,-55%); pointer-events:none;
      animation:breathe 8s ease-in-out infinite;
    }
    .hero-rings { position:absolute; top:50%; left:50%; transform:translate(-50%,-55%); pointer-events:none; }
    .hero-ring {
      position:absolute; border-radius:50%; border:1px solid rgba(232,148,74,.08);
      top:50%; left:50%; transform:translate(-50%,-50%);
      animation:rotateSlowly linear infinite;
    }
    .hero-ring:nth-child(1) { width:300px; height:300px; animation-duration:40s; }
    .hero-ring:nth-child(2) { width:450px; height:450px; animation-duration:55s; animation-direction:reverse; border-color:rgba(122,155,109,.06); }
    .hero-ring:nth-child(3) { width:600px; height:600px; animation-duration:70s; border-color:rgba(155,188,212,.05); }
    .hero-ring-dot { position:absolute; width:6px; height:6px; border-radius:50%; background:var(--warm-orange-soft); }
    .hero-ring:nth-child(1) .hero-ring-dot { top:0; left:50%; transform:translate(-50%,-50%); }
    .hero-ring:nth-child(2) .hero-ring-dot { bottom:0; left:50%; transform:translate(-50%,50%); background:var(--moss-light); }
    .hero-ring:nth-child(3) .hero-ring-dot { top:50%; right:0; transform:translate(50%,-50%); background:var(--sky-light); }

    .hero-badge { display:inline-block; padding:6px 20px; background:rgba(232,148,74,.1); border-radius:24px; margin-bottom:24px; border:1px solid rgba(232,148,74,.15); animation:fadeSlideUp 1s ease-out both; position:relative; z-index:2; }
    .hero-badge span { font-size:12px; color:var(--warm-orange); letter-spacing:3px; text-transform:uppercase; font-weight:500; }
    .epic-hero h1 { font-family:'Caveat',cursive; font-size:clamp(56px,9vw,110px); font-weight:700; line-height:1; color:var(--text-warm); margin-bottom:16px; animation:fadeSlideUp 1s ease-out .15s both; position:relative; z-index:2; }
    .hero-tagline { font-family:'Playfair Display',serif; font-size:clamp(17px,2.5vw,22px); color:var(--text-muted); font-style:italic; font-weight:400; margin-bottom:12px; animation:fadeSlideUp 1s ease-out .3s both; position:relative; z-index:2; max-width:540px; line-height:1.6; }
    .hero-quote {
      font-family:'Caveat',cursive; font-size:clamp(18px,2.5vw,24px); color:var(--warm-orange);
      animation:fadeSlideUp 1s ease-out .45s both; position:relative; z-index:2;
      max-width:520px; margin-top:20px; line-height:1.4;
    }
    .scroll-hint { position:absolute; bottom:40px; animation:gentleBounce 2.5s ease-in-out infinite; opacity:.4; z-index:2; }

    /* ── Table of Contents ── */
    .toc-section { padding:0 24px 80px; position:relative; z-index:1; }
    .toc-grid { max-width:960px; margin:0 auto; display:grid; grid-template-columns:repeat(4,1fr); gap:14px; }
    .toc-card {
      background:var(--card-bg); border-radius:20px; padding:24px 18px 20px; text-align:center;
      border:1px solid var(--border-soft); cursor:pointer; transition:all .4s ease; text-decoration:none;
      position:relative; overflow:hidden;
    }
    .toc-card:hover { transform:translateY(-6px); box-shadow:0 14px 44px rgba(180,130,80,.14); background:var(--card-hover); }
    .toc-card .toc-icon { font-size:28px; margin-bottom:8px; }
    .toc-card h3 { font-family:'Caveat',cursive; font-size:19px; color:var(--text-warm); margin:0 0 4px; }
    .toc-card p { font-size:11px; color:var(--text-muted); letter-spacing:.5px; line-height:1.5; }

    /* ── Sections ── */
    .section { padding:80px 24px 100px; position:relative; z-index:1; }
    .section-label { font-size:12px; letter-spacing:3px; text-transform:uppercase; color:var(--text-muted); margin-bottom:12px; text-align:center; }
    .section-title { font-family:'Caveat',cursive; font-size:clamp(36px,5vw,56px); color:var(--text-warm); font-weight:600; text-align:center; line-height:1.1; }
    .section-divider { height:3px; max-width:120px; margin:20px auto 0; background:linear-gradient(90deg,transparent,var(--warm-orange-soft),transparent); border-radius:2px; }
    .section-desc { font-size:15px; color:var(--text-muted); max-width:580px; margin:24px auto 0; line-height:1.8; text-align:center; }

    /* ── Accent block ── */
    .accent-block {
      max-width:640px; margin:40px auto; padding:28px 32px; border-radius:0 16px 16px 0;
      border-left:3px solid var(--warm-orange-soft);
      background:rgba(232,148,74,.04);
      font-family:'Playfair Display',serif; font-size:17px; font-style:italic; color:var(--text-warm);
      line-height:1.7;
    }

    /* ── The Cubix Meow Section ── */
    .cubix-meow-visual {
      max-width:280px; margin:48px auto 40px; position:relative;
    }
    .cubix-core {
      width:140px; height:140px; margin:0 auto; border-radius:50%; position:relative;
      background:radial-gradient(circle, rgba(232,148,74,.2) 0%, rgba(232,148,74,.05) 60%, transparent 80%);
      animation:breathe 6s ease-in-out infinite;
    }
    .cubix-core::before {
      content:'🐾'; position:absolute; top:50%; left:50%; transform:translate(-50%,-50%);
      font-size:40px; filter:drop-shadow(0 0 12px rgba(232,148,74,.3));
    }
    .cubix-orbit { position:absolute; top:50%; left:50%; border-radius:50%; border:1px dashed rgba(232,148,74,.15); animation:rotateSlowly linear infinite; }
    .cubix-orbit:nth-child(2) { width:200px; height:200px; margin:-100px 0 0 -100px; animation-duration:30s; }
    .cubix-orbit:nth-child(3) { width:260px; height:260px; margin:-130px 0 0 -130px; animation-duration:45s; animation-direction:reverse; }
    .cubix-orbit-dot { position:absolute; width:8px; height:8px; border-radius:50%; }
    .cubix-orbit:nth-child(2) .cubix-orbit-dot { top:-4px; left:50%; margin-left:-4px; background:var(--warm-orange-soft); }
    .cubix-orbit:nth-child(3) .cubix-orbit-dot { bottom:-4px; left:50%; margin-left:-4px; background:var(--moss-light); }

    /* ── Frameworks Grid ── */
    .fw-grid { max-width:960px; margin:48px auto 0; display:grid; grid-template-columns:repeat(4,1fr); gap:16px; }
    .fw-card {
      background:var(--card-bg); border-radius:20px; padding:28px 18px 24px; text-align:center;
      border:1px solid var(--border-soft); position:relative; overflow:hidden; transition:all .5s cubic-bezier(.22,1,.36,1); cursor:default;
    }
    .fw-card:hover { transform:translateY(-6px); box-shadow:0 14px 44px rgba(180,130,80,.14); }
    .fw-card .fw-glow { position:absolute; top:-20px; left:50%; transform:translateX(-50%); width:80px; height:80px; border-radius:50%; filter:blur(25px); opacity:.2; pointer-events:none; transition:opacity .4s; }
    .fw-card:hover .fw-glow { opacity:.45; }
    .fw-card .fw-icon { font-size:32px; margin-bottom:10px; position:relative; }
    .fw-card .fw-num { font-size:10px; letter-spacing:2px; text-transform:uppercase; color:var(--text-muted); margin-bottom:6px; position:relative; }
    .fw-card h4 { font-family:'Caveat',cursive; font-size:19px; color:var(--text-warm); margin:0 0 4px; position:relative; line-height:1.2; }
    .fw-card .fw-theme { font-size:11px; letter-spacing:1px; text-transform:uppercase; position:relative; font-weight:500; margin-bottom:8px; }
    .fw-card p { font-size:12px; color:var(--text-muted); line-height:1.6; position:relative; }
    .fw-card .fw-region { font-size:10px; color:var(--text-muted); margin-top:10px; position:relative; letter-spacing:.5px; opacity:.7; }

    /* ── How It Remembers ── */
    .memory-visual {
      max-width:720px; margin:48px auto; display:grid; grid-template-columns:repeat(3,1fr); gap:20px;
    }
    .memory-step {
      text-align:center; padding:28px 18px; background:var(--card-bg); border-radius:20px;
      border:1px solid var(--border-soft); position:relative;
    }
    .memory-step .step-num {
      width:32px; height:32px; border-radius:50%; background:rgba(232,148,74,.1);
      border:1px solid rgba(232,148,74,.2); display:flex; align-items:center; justify-content:center;
      font-family:'Caveat',cursive; font-size:16px; color:var(--warm-orange); margin:0 auto 12px;
    }
    .memory-step .step-icon { font-size:28px; margin-bottom:8px; }
    .memory-step h4 { font-family:'Caveat',cursive; font-size:18px; color:var(--text-warm); margin-bottom:6px; }
    .memory-step p { font-size:12px; color:var(--text-muted); line-height:1.6; }

    /* ── Region Cards ── */
    .region-full-grid { max-width:1040px; margin:48px auto 0; display:grid; grid-template-columns:1fr 1fr; gap:20px; }
    .region-full-card {
      background:var(--card-bg); border-radius:24px; padding:32px 26px 28px;
      border:1px solid var(--border-soft); position:relative; overflow:hidden; transition:all .5s cubic-bezier(.22,1,.36,1);
    }
    .region-full-card:hover { transform:translateY(-5px); box-shadow:0 16px 48px rgba(180,130,80,.12); }
    .region-full-card .r-glow { position:absolute; top:-30px; right:-30px; width:120px; height:120px; border-radius:50%; filter:blur(35px); opacity:.2; pointer-events:none; transition:opacity .4s; }
    .region-full-card:hover .r-glow { opacity:.4; }
    .region-full-card .r-header { display:flex; align-items:center; gap:12px; margin-bottom:14px; position:relative; }
    .region-full-card .r-icon { font-size:36px; }
    .region-full-card .r-titles { flex:1; }
    .region-full-card h3 { font-family:'Caveat',cursive; font-size:24px; color:var(--text-warm); line-height:1.1; }
    .region-full-card .r-framework { font-size:10px; letter-spacing:1.5px; text-transform:uppercase; font-weight:600; }
    .region-full-card .r-desc { font-size:13px; color:var(--text-muted); line-height:1.7; position:relative; margin-bottom:14px; }
    .region-full-card .r-details { display:flex; flex-direction:column; gap:8px; position:relative; }
    .r-detail { display:flex; gap:8px; align-items:flex-start; }
    .r-detail-label { font-size:10px; letter-spacing:1px; text-transform:uppercase; font-weight:600; color:var(--text-warm); min-width:70px; flex-shrink:0; padding-top:2px; }
    .r-detail-text { font-size:12px; color:var(--text-muted); line-height:1.55; }

    /* ── Hearthstone Commons ── */
    .hearthstone-card {
      max-width:720px; margin:48px auto 40px; padding:40px 36px; border-radius:28px;
      background:linear-gradient(135deg, rgba(184,154,58,.06) 0%, rgba(232,148,74,.06) 50%, rgba(122,155,109,.04) 100%);
      border:1px solid rgba(184,154,58,.15); position:relative; overflow:hidden; text-align:center;
    }
    .hearthstone-card .hs-icon { font-size:48px; margin-bottom:12px; }
    .hearthstone-card h3 { font-family:'Caveat',cursive; font-size:32px; color:var(--text-warm); margin-bottom:6px; }
    .hearthstone-card .hs-sub { font-size:11px; letter-spacing:2px; text-transform:uppercase; color:var(--hearthstone-gold); font-weight:600; margin-bottom:16px; }
    .hearthstone-card p { font-size:14px; color:var(--text-muted); line-height:1.8; max-width:560px; margin:0 auto; }

    /* ── Character System ── */
    .kindren-intro { max-width:640px; margin:40px auto; }
    .kindren-intro p { font-size:15px; color:var(--text-muted); line-height:1.8; text-align:center; margin-bottom:16px; }

    .archetype-grid { max-width:960px; margin:40px auto 0; display:grid; grid-template-columns:repeat(4,1fr); gap:14px; }
    .archetype-pill {
      padding:20px 14px; border-radius:18px; background:var(--card-bg); border:1px solid var(--border-soft);
      text-align:center; transition:all .3s ease;
    }
    .archetype-pill:hover { transform:translateY(-3px); box-shadow:0 8px 24px rgba(180,130,80,.1); }
    .archetype-pill .a-icon { font-size:22px; margin-bottom:6px; }
    .archetype-pill h5 { font-family:'Caveat',cursive; font-size:17px; color:var(--text-warm); margin:0 0 3px; }
    .archetype-pill .a-fw { font-size:10px; color:var(--text-muted); letter-spacing:.5px; }
    .archetype-pill .a-desc { font-size:11px; color:var(--text-muted); line-height:1.5; margin-top:6px; }

    /* ── Character Profiles ── */
    .char-profiles { max-width:1040px; margin:48px auto 0; display:flex; flex-direction:column; gap:24px; }
    .char-profile {
      display:grid; grid-template-columns:280px 1fr; gap:32px;
      background:var(--card-bg); border-radius:28px; padding:36px 32px;
      border:1px solid var(--border-soft); position:relative; overflow:hidden;
      transition:all .5s cubic-bezier(.22,1,.36,1);
    }
    .char-profile:hover { box-shadow:0 16px 48px rgba(180,130,80,.1); }
    .char-profile:nth-child(even) { direction:rtl; }
    .char-profile:nth-child(even) > * { direction:ltr; }
    .char-profile .cp-glow { position:absolute; top:0; left:0; right:0; bottom:0; pointer-events:none; opacity:.3; }
    .char-profile .cp-sidebar { position:relative; text-align:center; display:flex; flex-direction:column; align-items:center; justify-content:center; }
    .char-profile .cp-emoji { font-size:64px; margin-bottom:12px; filter:drop-shadow(0 4px 12px rgba(0,0,0,.08)); }
    .char-profile .cp-name { font-family:'Caveat',cursive; font-size:32px; color:var(--text-warm); margin-bottom:2px; }
    .char-profile .cp-species { font-size:10px; letter-spacing:2px; text-transform:uppercase; color:var(--text-muted); margin-bottom:4px; font-weight:500; }
    .char-profile .cp-role { font-size:12px; letter-spacing:1.5px; text-transform:uppercase; font-weight:600; margin-bottom:12px; }
    .char-profile .cp-glow-badge {
      display:inline-flex; align-items:center; gap:6px; padding:6px 14px;
      border-radius:20px; font-size:11px; font-weight:500; letter-spacing:.3px;
    }
    .char-profile .cp-glow-dot { width:8px; height:8px; border-radius:50%; animation:breathe 3s ease-in-out infinite; }
    .char-profile .cp-body { position:relative; }
    .char-profile .cp-desc { font-size:14px; color:var(--text-muted); line-height:1.8; margin-bottom:16px; }
    .char-profile .cp-quirks { margin-bottom:16px; }
    .char-profile .cp-quirk-label { font-size:10px; letter-spacing:2px; text-transform:uppercase; color:var(--text-warm); font-weight:600; margin-bottom:8px; }
    .char-profile .cp-quirk { font-size:13px; color:var(--text-muted); line-height:1.65; margin-bottom:8px; padding-left:16px; position:relative; }
    .char-profile .cp-quirk::before { content:''; position:absolute; left:0; top:8px; width:6px; height:6px; border-radius:50%; background:var(--warm-orange-soft); }
    .char-profile .cp-struggle { padding:16px 20px; border-radius:14px; background:rgba(232,148,74,.04); border-left:3px solid var(--warm-orange-soft); }
    .char-profile .cp-struggle-label { font-size:10px; letter-spacing:1.5px; text-transform:uppercase; color:var(--warm-orange); font-weight:600; margin-bottom:6px; }
    .char-profile .cp-struggle p { font-size:13px; color:var(--text-muted); line-height:1.65; font-style:italic; }
    .char-profile .cp-traits { display:flex; flex-wrap:wrap; gap:6px; margin-top:14px; }
    .cp-trait { padding:4px 12px; border-radius:12px; font-size:11px; font-weight:500; }

    /* ── Lore Layers ── */
    .lore-layers { max-width:720px; margin:48px auto 0; display:flex; flex-direction:column; gap:0; }
    .lore-layer {
      padding:36px 32px; position:relative; border-left:3px solid var(--border-soft);
      margin-left:20px;
    }
    .lore-layer::before {
      content:''; position:absolute; left:-10px; top:36px; width:16px; height:16px;
      border-radius:50%; border:3px solid; background:var(--cream);
    }
    .lore-layer:nth-child(1)::before { border-color:var(--warm-orange-soft); }
    .lore-layer:nth-child(2)::before { border-color:var(--moss-light); }
    .lore-layer:nth-child(3)::before { border-color:var(--rose-soft); }
    .lore-layer .ll-label { font-size:10px; letter-spacing:2.5px; text-transform:uppercase; font-weight:600; margin-bottom:8px; }
    .lore-layer h3 { font-family:'Caveat',cursive; font-size:26px; color:var(--text-warm); margin-bottom:12px; }
    .lore-layer p { font-size:14px; color:var(--text-muted); line-height:1.8; margin-bottom:10px; }
    .lore-layer p:last-child { margin-bottom:0; }

    /* ── Themes ── */
    .themes-grid { max-width:800px; margin:48px auto 0; display:grid; grid-template-columns:1fr 1fr; gap:14px; }
    .theme-card {
      display:flex; align-items:flex-start; gap:14px; padding:22px 20px;
      background:var(--card-bg); border-radius:18px; border:1px solid var(--border-soft);
      transition:all .3s ease;
    }
    .theme-card:hover { transform:translateY(-3px); box-shadow:0 8px 24px rgba(180,130,80,.1); }
    .theme-card:last-child:nth-child(odd) { grid-column:1/-1; max-width:50%; justify-self:center; }
    .theme-icon { font-size:22px; flex-shrink:0; margin-top:2px; }
    .theme-card h4 { font-family:'Caveat',cursive; font-size:20px; color:var(--text-warm); margin-bottom:4px; }
    .theme-card p { font-size:12px; color:var(--text-muted); line-height:1.55; }

    /* ── Mysteries ── */
    .mystery-grid { max-width:800px; margin:48px auto 0; display:grid; grid-template-columns:1fr 1fr; gap:16px; }
    .mystery-card {
      padding:24px 22px; border-radius:20px; background:var(--card-bg); border:1px solid var(--border-soft);
      position:relative; overflow:hidden; transition:all .4s ease;
    }
    .mystery-card:hover { transform:translateY(-4px); box-shadow:0 12px 36px rgba(180,130,80,.1); }
    .mystery-card::before { content:'?'; position:absolute; top:-8px; right:8px; font-family:'Caveat',cursive; font-size:64px; color:rgba(232,148,74,.06); font-weight:700; }
    .mystery-card h4 { font-family:'Caveat',cursive; font-size:19px; color:var(--text-warm); margin-bottom:8px; position:relative; line-height:1.3; }
    .mystery-card p { font-size:13px; color:var(--text-muted); line-height:1.65; position:relative; }

    /* ── Group Dynamic ── */
    .dynamic-section { max-width:720px; margin:48px auto 0; }
    .dynamic-pair {
      display:flex; align-items:center; gap:16px; padding:18px 22px; margin-bottom:12px;
      background:var(--card-bg); border-radius:16px; border:1px solid var(--border-soft);
    }
    .dynamic-pair .dp-icons { font-size:20px; display:flex; gap:4px; flex-shrink:0; }
    .dynamic-pair .dp-label { font-family:'Caveat',cursive; font-size:17px; color:var(--text-warm); flex-shrink:0; min-width:140px; }
    .dynamic-pair p { font-size:12.5px; color:var(--text-muted); line-height:1.55; }

    /* ── CTA ── */
    .cta-section { padding:40px 24px 100px; position:relative; z-index:1; }
    .cta-card {
      max-width:560px; margin:0 auto; padding:48px 40px; border-radius:28px;
      background:linear-gradient(135deg,rgba(232,148,74,.08) 0%,rgba(122,155,109,.06) 50%,rgba(155,188,212,.06) 100%);
      border:1px solid var(--border-soft); position:relative; overflow:hidden; text-align:center;
    }
    .cta-paw { position:absolute; top:-20px; right:-20px; font-size:80px; opacity:.08; transform:rotate(15deg); }
    .cta-card h2 { font-family:'Caveat',cursive; font-size:38px; color:var(--text-warm); margin-bottom:12px; }
    .cta-card > p { font-size:15px; color:var(--text-muted); line-height:1.7; margin-bottom:28px; }
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

    /* ── Responsive ── */
    @media (max-width:768px) {
      .nav{padding:12px 16px} .nav-links{display:none} .nav-mobile-toggle{display:block}
      .nav-links.open{display:flex;flex-direction:column;position:absolute;top:100%;left:0;right:0;background:rgba(250,245,236,.97);backdrop-filter:blur(20px);-webkit-backdrop-filter:blur(20px);padding:24px;gap:20px;border-bottom:1px solid var(--border-soft)}
      .epic-hero{min-height:90vh;padding:100px 20px 60px}
      .hero-rings,.hero-ring{display:none}
      .toc-grid{grid-template-columns:repeat(2,1fr);gap:10px}
      .section{padding:60px 16px 72px}
      .section-title{font-size:clamp(32px,8vw,44px)}
      .fw-grid{grid-template-columns:repeat(2,1fr);gap:12px}
      .fw-card{padding:22px 14px 20px} .fw-card h4{font-size:17px}
      .memory-visual{grid-template-columns:1fr;max-width:320px}
      .region-full-grid{grid-template-columns:1fr;max-width:540px;margin-left:auto;margin-right:auto}
      .hearthstone-card{padding:28px 22px}
      .archetype-grid{grid-template-columns:repeat(2,1fr);gap:10px}
      .char-profile{grid-template-columns:1fr;gap:20px;padding:28px 22px}
      .char-profile:nth-child(even){direction:ltr}
      .char-profile .cp-sidebar{flex-direction:row;gap:16px;justify-content:flex-start}
      .char-profile .cp-emoji{font-size:44px;margin-bottom:0}
      .themes-grid{grid-template-columns:1fr}
      .theme-card:last-child:nth-child(odd){max-width:100%}
      .mystery-grid{grid-template-columns:1fr}
      .dynamic-pair{flex-direction:column;align-items:flex-start;gap:8px}
      .dynamic-pair .dp-label{min-width:auto}
      .accent-block{margin-left:16px;margin-right:16px;font-size:15px;padding:22px 24px}
      .lore-layer{padding:28px 24px;margin-left:12px}
      .cta-btn-secondary{margin-left:0;margin-top:12px}
      .blob{display:none} .paw-print{display:none}
    }
    @media (max-width:380px) {
      .epic-hero h1{font-size:44px}
      .toc-grid{grid-template-columns:1fr 1fr}
      .fw-grid{grid-template-columns:1fr}
      .archetype-grid{grid-template-columns:1fr 1fr}
    }
  </style>
</head>
<body>


<!-- ═══════════ BACKGROUND ELEMENTS ═══════════ -->

<!-- Blobs -->
<div class="blob" style="width:500px;height:500px;top:-100px;left:-150px;background:radial-gradient(ellipse at 40% 40%,var(--warm-orange) 0%,transparent 70%);opacity:.07;animation:floatBlob 13s ease-in-out infinite alternate"></div>
<div class="blob" style="width:420px;height:420px;top:600px;left:72%;background:radial-gradient(ellipse at 40% 40%,var(--moss-green) 0%,transparent 70%);opacity:.06;animation:floatBlob 16s ease-in-out 2s infinite alternate"></div>
<div class="blob" style="width:380px;height:380px;top:1400px;left:8%;background:radial-gradient(ellipse at 40% 40%,var(--sky-soft) 0%,transparent 70%);opacity:.06;animation:floatBlob 14s ease-in-out 4s infinite alternate"></div>
<div class="blob" style="width:450px;height:450px;top:2200px;left:65%;background:radial-gradient(ellipse at 40% 40%,var(--rose-soft) 0%,transparent 70%);opacity:.05;animation:floatBlob 17s ease-in-out 3s infinite alternate"></div>
<div class="blob" style="width:360px;height:360px;top:3200px;left:20%;background:radial-gradient(ellipse at 40% 40%,var(--warm-orange-soft) 0%,transparent 70%);opacity:.05;animation:floatBlob 15s ease-in-out 5s infinite alternate"></div>
<div class="blob" style="width:400px;height:400px;top:4200px;left:70%;background:radial-gradient(ellipse at 40% 40%,var(--tundra-lilac) 0%,transparent 70%);opacity:.04;animation:floatBlob 12s ease-in-out 1s infinite alternate"></div>
<div class="blob" style="width:340px;height:340px;top:5200px;left:30%;background:radial-gradient(ellipse at 40% 40%,var(--canopy-pink) 0%,transparent 70%);opacity:.05;animation:floatBlob 16s ease-in-out 3s infinite alternate"></div>
<div class="blob" style="width:380px;height:380px;top:6400px;left:60%;background:radial-gradient(ellipse at 40% 40%,var(--moss-light) 0%,transparent 70%);opacity:.04;animation:floatBlob 14s ease-in-out 2s infinite alternate"></div>
<div class="blob" style="width:320px;height:320px;top:7600px;left:15%;background:radial-gradient(ellipse at 40% 40%,var(--ember-amber) 0%,transparent 70%);opacity:.05;animation:floatBlob 18s ease-in-out 4s infinite alternate"></div>
<div class="blob" style="width:360px;height:360px;top:8800px;left:75%;background:radial-gradient(ellipse at 40% 40%,var(--bazaar-berry) 0%,transparent 70%);opacity:.04;animation:floatBlob 15s ease-in-out 6s infinite alternate"></div>

<!-- Paw prints -->
<svg class="paw-print" width="24" height="24" viewBox="0 0 24 24" fill="var(--earth-brown)" style="top:6%;left:5%;transform:rotate(-90deg) scale(0.7);animation:pawDrift 6s ease-in-out 0s infinite">
  <ellipse cx="12" cy="16" rx="5" ry="4.5"/><circle cx="7" cy="9" r="2.5"/><circle cx="17" cy="9" r="2.5"/><circle cx="4" cy="13" r="2"/><circle cx="20" cy="13" r="2"/>
</svg>
<svg class="paw-print" width="24" height="24" viewBox="0 0 24 24" fill="var(--earth-brown)" style="top:14%;left:42%;transform:rotate(-45deg) scale(1.05);animation:pawDrift 8s ease-in-out 1.5s infinite">
  <ellipse cx="12" cy="16" rx="5" ry="4.5"/><circle cx="7" cy="9" r="2.5"/><circle cx="17" cy="9" r="2.5"/><circle cx="4" cy="13" r="2"/><circle cx="20" cy="13" r="2"/>
</svg>
<svg class="paw-print" width="24" height="24" viewBox="0 0 24 24" fill="var(--earth-brown)" style="top:22%;left:79%;transform:rotate(0deg) scale(1.4);animation:pawDrift 10s ease-in-out 3s infinite">
  <ellipse cx="12" cy="16" rx="5" ry="4.5"/><circle cx="7" cy="9" r="2.5"/><circle cx="17" cy="9" r="2.5"/><circle cx="4" cy="13" r="2"/><circle cx="20" cy="13" r="2"/>
</svg>
<svg class="paw-print" width="24" height="24" viewBox="0 0 24 24" fill="var(--earth-brown)" style="top:30%;left:26%;transform:rotate(45deg) scale(0.7);animation:pawDrift 12s ease-in-out 4.5s infinite">
  <ellipse cx="12" cy="16" rx="5" ry="4.5"/><circle cx="7" cy="9" r="2.5"/><circle cx="17" cy="9" r="2.5"/><circle cx="4" cy="13" r="2"/><circle cx="20" cy="13" r="2"/>
</svg>
<svg class="paw-print" width="24" height="24" viewBox="0 0 24 24" fill="var(--earth-brown)" style="top:38%;left:63%;transform:rotate(90deg) scale(1.05);animation:pawDrift 14s ease-in-out 6s infinite">
  <ellipse cx="12" cy="16" rx="5" ry="4.5"/><circle cx="7" cy="9" r="2.5"/><circle cx="17" cy="9" r="2.5"/><circle cx="4" cy="13" r="2"/><circle cx="20" cy="13" r="2"/>
</svg>
<svg class="paw-print" width="24" height="24" viewBox="0 0 24 24" fill="var(--earth-brown)" style="top:46%;left:10%;transform:rotate(135deg) scale(1.4);animation:pawDrift 16s ease-in-out 7.5s infinite">
  <ellipse cx="12" cy="16" rx="5" ry="4.5"/><circle cx="7" cy="9" r="2.5"/><circle cx="17" cy="9" r="2.5"/><circle cx="4" cy="13" r="2"/><circle cx="20" cy="13" r="2"/>
</svg>
<svg class="paw-print" width="24" height="24" viewBox="0 0 24 24" fill="var(--earth-brown)" style="top:54%;left:47%;transform:rotate(180deg) scale(0.7);animation:pawDrift 18s ease-in-out 9s infinite">
  <ellipse cx="12" cy="16" rx="5" ry="4.5"/><circle cx="7" cy="9" r="2.5"/><circle cx="17" cy="9" r="2.5"/><circle cx="4" cy="13" r="2"/><circle cx="20" cy="13" r="2"/>
</svg>
<svg class="paw-print" width="24" height="24" viewBox="0 0 24 24" fill="var(--earth-brown)" style="top:62%;left:84%;transform:rotate(225deg) scale(1.05);animation:pawDrift 20s ease-in-out 10.5s infinite">
  <ellipse cx="12" cy="16" rx="5" ry="4.5"/><circle cx="7" cy="9" r="2.5"/><circle cx="17" cy="9" r="2.5"/><circle cx="4" cy="13" r="2"/><circle cx="20" cy="13" r="2"/>
</svg>
<svg class="paw-print" width="24" height="24" viewBox="0 0 24 24" fill="var(--earth-brown)" style="top:70%;left:31%;transform:rotate(270deg) scale(1.4);animation:pawDrift 22s ease-in-out 12s infinite">
  <ellipse cx="12" cy="16" rx="5" ry="4.5"/><circle cx="7" cy="9" r="2.5"/><circle cx="17" cy="9" r="2.5"/><circle cx="4" cy="13" r="2"/><circle cx="20" cy="13" r="2"/>
</svg>
<svg class="paw-print" width="24" height="24" viewBox="0 0 24 24" fill="var(--earth-brown)" style="top:78%;left:68%;transform:rotate(315deg) scale(0.7);animation:pawDrift 24s ease-in-out 13.5s infinite">
  <ellipse cx="12" cy="16" rx="5" ry="4.5"/><circle cx="7" cy="9" r="2.5"/><circle cx="17" cy="9" r="2.5"/><circle cx="4" cy="13" r="2"/><circle cx="20" cy="13" r="2"/>
</svg>
<svg class="paw-print" width="24" height="24" viewBox="0 0 24 24" fill="var(--earth-brown)" style="top:86%;left:15%;transform:rotate(360deg) scale(1.05);animation:pawDrift 26s ease-in-out 15s infinite">
  <ellipse cx="12" cy="16" rx="5" ry="4.5"/><circle cx="7" cy="9" r="2.5"/><circle cx="17" cy="9" r="2.5"/><circle cx="4" cy="13" r="2"/><circle cx="20" cy="13" r="2"/>
</svg>
<svg class="paw-print" width="24" height="24" viewBox="0 0 24 24" fill="var(--earth-brown)" style="top:94%;left:52%;transform:rotate(405deg) scale(1.4);animation:pawDrift 28s ease-in-out 16.5s infinite">
  <ellipse cx="12" cy="16" rx="5" ry="4.5"/><circle cx="7" cy="9" r="2.5"/><circle cx="17" cy="9" r="2.5"/><circle cx="4" cy="13" r="2"/><circle cx="20" cy="13" r="2"/>
</svg>


<!-- ═══════════ NAV ═══════════ -->
<nav class="nav" id="mainNav">
  <a href="index.html" class="nav-logo"><span class="nav-logo-icon">🐾</span><span class="nav-logo-text">Cubix Meow</span></a>
  <div class="nav-links" id="navLinks">
    <a href="index.html">Home</a>
    <a href="about.php">Our Story</a>
    <a href="purrnia.php" class="active">World Guide</a>
    <a href="https://www.facebook.com/cubix.meow.rules" target="_blank" rel="noopener">Follow Us</a>
  </div>
  <button class="nav-mobile-toggle" id="navToggle" aria-label="Toggle menu"><span></span><span></span><span></span></button>
</nav>


<!-- ═══════════ EPIC HERO ═══════════ -->
<section class="epic-hero">
  <div class="hero-orb"></div>
  <div class="hero-rings">
    <div class="hero-ring"><div class="hero-ring-dot"></div></div>
    <div class="hero-ring"><div class="hero-ring-dot"></div></div>
    <div class="hero-ring"><div class="hero-ring-dot"></div></div>
  </div>
  <div class="hero-badge"><span>The Complete World Guide</span></div>
  <h1>Purrnia</h1>
  <p class="hero-tagline">A world that grew from the love of two small cats who chose each other and walked forward together. Every stone, every stream, every warm gust of wind is an echo of that first morning.</p>
  <p class="hero-quote">"The world hums. It has always hummed. If you are very still and very kind, you can feel it in your paws."</p>
  <div class="scroll-hint">
    <svg width="24" height="36" viewBox="0 0 24 36" fill="none">
      <rect x="1" y="1" width="22" height="34" rx="11" stroke="var(--text-muted)" stroke-width="1.5"/>
      <circle cx="12" cy="10" r="3" fill="var(--warm-orange-soft)"><animate attributeName="cy" values="10;22;10" dur="2.5s" repeatCount="indefinite"/></circle>
    </svg>
  </div>
</section>


<!-- ═══════════ TABLE OF CONTENTS ═══════════ -->
<section class="toc-section">
  <div class="toc-grid">
    <a href="#cubix-meow" class="toc-card reveal"><div class="toc-icon">🐾</div><h3>The Cubix Meow</h3><p>The living pulse, eight frameworks, how it remembers</p></a>
    <a href="#regions" class="toc-card reveal reveal-delay-1"><div class="toc-icon">🗺️</div><h3>Eight Regions</h3><p>From golden forests to walkable clouds</p></a>
    <a href="#kindren" class="toc-card reveal reveal-delay-2"><div class="toc-icon">✨</div><h3>The Purren</h3><p>Inhabitants, the Glow, character archetypes</p></a>
    <a href="#characters" class="toc-card reveal reveal-delay-3"><div class="toc-icon">🐕</div><h3>Characters</h3><p>Templeton, Maya, Tony, Garro, Brappie, Angus</p></a>
    <a href="#lore" class="toc-card reveal"><div class="toc-icon">📜</div><h3>Lore Layers</h3><p>Surface, hidden, and the heart layer</p></a>
    <a href="#themes" class="toc-card reveal reveal-delay-1"><div class="toc-icon">💛</div><h3>Seven Truths</h3><p>The philosophical DNA of the world</p></a>
    <a href="#mysteries" class="toc-card reveal reveal-delay-2"><div class="toc-icon">❓</div><h3>Quiet Mysteries</h3><p>Unanswered questions held gently</p></a>
    <a href="#dynamics" class="toc-card reveal reveal-delay-3"><div class="toc-icon">🤝</div><h3>Group Dynamic</h3><p>How the friends orbit each other</p></a>
  </div>
</section>


<!-- ═══════════ THE CUBIX MEOW ═══════════ -->
<section class="section" id="cubix-meow">
  <div class="reveal">
    <p class="section-label">The Magic</p>
    <h2 class="section-title">The Cubix Meow</h2>
    <div class="section-divider"></div>
    <p class="section-desc">The living pulse of Purrnia. A vast, decentralized web of warm energy that flows beneath the soil, through the water, across the wind, and between every living creature. It responds to kindness the way sunlight responds to open windows.</p>
  </div>

  <div class="cubix-meow-visual reveal">
    <div class="cubix-core"></div>
    <div class="cubix-orbit"><div class="cubix-orbit-dot"></div></div>
    <div class="cubix-orbit"><div class="cubix-orbit-dot"></div></div>
  </div>

  <div class="accent-block reveal">
    The entire world runs on one premise: the land is only as alive as the love that moves through it. When inhabitants act with kindness, curiosity, or care, the Cubix Meow strengthens. When they withdraw or forget one another, it quiets. Nothing is destroyed. The world simply waits, patiently, for someone to care again.
  </div>

  <div class="reveal" style="margin-top:60px">
    <p class="section-label">Eight Emotional Frequencies</p>
    <h2 class="section-title">The Frameworks</h2>
    <div class="section-divider"></div>
    <p class="section-desc">Eight ways inhabitants tap into the Cubix Meow. No one learns all eight equally. Most have a natural affinity for one or two, and spend their lives deepening that connection. These are not spells - they are relationships to be nurtured.</p>
  </div>

  <div class="fw-grid">
        <div class="fw-card reveal" style="transition-delay:0s">
      <div class="fw-glow" style="background:#6a8a6a"></div>
      <div class="fw-icon">🕯️</div>
      <div class="fw-num">I</div>
      <h4>Nostalgic Anchoring</h4>
      <div class="fw-theme" style="color:var(--archive-emerald)">Memory &amp; Comfort</div>
      <p>Pull comfort from the past into the present. A freezing room warms to a remembered summer. Demands vulnerability - you cannot summon comfort from a memory you refuse to feel.</p>
      <div class="fw-region">⟶ Glimmering Archives</div>
    </div>
        <div class="fw-card reveal" style="transition-delay:0.06s">
      <div class="fw-glow" style="background:#9a5a6a"></div>
      <div class="fw-icon">🤝</div>
      <div class="fw-num">II</div>
      <h4>Harmonic Synthesis</h4>
      <div class="fw-theme" style="color:var(--bazaar-berry)">Friendship &amp; Trust</div>
      <p>Magic that only works when shared. Requires two or more to align their feelings toward a common goal. Hidden resentments cause the resonance to fail.</p>
      <div class="fw-region">⟶ Bramble-Patch Bazaars</div>
    </div>
        <div class="fw-card reveal" style="transition-delay:0.12s">
      <div class="fw-glow" style="background:#c48a8a"></div>
      <div class="fw-icon">🔍</div>
      <div class="fw-num">III</div>
      <h4>Epistemic Unveiling</h4>
      <div class="fw-theme" style="color:var(--canyon-rose)">Curiosity &amp; Wonder</div>
      <p>The magic of genuine, selfless curiosity. Faded murals regain color. Foreign languages translate as music. Fails entirely if curiosity is driven by greed.</p>
      <div class="fw-region">⟶ Chiming Canyons</div>
    </div>
        <div class="fw-card reveal" style="transition-delay:0.18s">
      <div class="fw-glow" style="background:#a68ab8"></div>
      <div class="fw-icon">💛</div>
      <div class="fw-num">IV</div>
      <h4>Empathetic Transmutation</h4>
      <div class="fw-theme" style="color:var(--tundra-lilac)">Kindness &amp; Empathy</div>
      <p>Healing requires the healer to open themselves to a fraction of the wounded's pain. Real healing requires presence, vulnerability, and willingness to sit in darkness.</p>
      <div class="fw-region">⟶ Velvet Tundra</div>
    </div>
        <div class="fw-card reveal" style="transition-delay:0.24s">
      <div class="fw-glow" style="background:#d4883a"></div>
      <div class="fw-icon">🍞</div>
      <div class="fw-num">V</div>
      <h4>Hearth-Crafting</h4>
      <div class="fw-theme" style="color:var(--ember-amber)">Domesticity &amp; Care</div>
      <p>The sacred magic of ordinary care. Cooking, cleaning, mending - elevated into powerful practice. A soup cooked with intent cures exhaustion and instills hope.</p>
      <div class="fw-region">⟶ Emberwood Thicket</div>
    </div>
        <div class="fw-card reveal" style="transition-delay:0.3s">
      <div class="fw-glow" style="background:#c49ab0"></div>
      <div class="fw-icon">🧶</div>
      <div class="fw-num">VI</div>
      <h4>Catenary Weaving</h4>
      <div class="fw-theme" style="color:var(--canopy-pink)">Connection &amp; Play</div>
      <p>Relationships as physical threads of warm light. A gentle tug sends reassurance across any distance. Woven connections manifest as safety nets and bridges.</p>
      <div class="fw-region">⟶ Cloud-Spun Canopy</div>
    </div>
        <div class="fw-card reveal" style="transition-delay:0.36s">
      <div class="fw-glow" style="background:#7b8fb8"></div>
      <div class="fw-icon">🐾</div>
      <div class="fw-num">VII</div>
      <h4>Intuitive Wayfinding</h4>
      <div class="fw-theme" style="color:var(--lullaby-indigo)">Hope &amp; Surrender</div>
      <p>The only framework that cannot be forced. Activates when genuinely lost but refusing panic. The Meow-Lights come - tiny glowing cats of condensed starlight.</p>
      <div class="fw-region">⟶ Lullaby Lochs</div>
    </div>
        <div class="fw-card reveal" style="transition-delay:0.42s">
      <div class="fw-glow" style="background:#c9a832"></div>
      <div class="fw-icon">🌱</div>
      <div class="fw-num">VIII</div>
      <h4>Generative Cultivation</h4>
      <div class="fw-theme" style="color:var(--terrace-gold)">Stewardship &amp; Nature</div>
      <p>The magic of selfless nurturing. Seeds sprout in minutes without depleting soil. Injured wildlife recovers and bonds with the carer. Growth cannot be forced.</p>
      <div class="fw-region">⟶ Sun-Draped Terraces</div>
    </div>
      </div>

  <!-- How It Remembers -->
  <div class="reveal" style="margin-top:72px">
    <p class="section-label">Crystalline Settling</p>
    <h2 class="section-title">How the World Remembers</h2>
    <div class="section-divider"></div>
    <p class="section-desc">Every act of genuine warmth creates a resonant frequency that crystallizes into the physical bedrock of Purrnia. The ground beneath your feet is literally made of accumulated kindness.</p>
  </div>

  <div class="memory-visual">
    <div class="memory-step reveal">
      <div class="step-num">1</div>
      <div class="step-icon">💛</div>
      <h4>The Act</h4>
      <p>A genuine act of kindness creates a resonant frequency that harmonizes with the Purr.</p>
    </div>
    <div class="memory-step reveal reveal-delay-1">
      <div class="step-num">2</div>
      <div class="step-icon">🔮</div>
      <h4>The Crystal</h4>
      <p>In the Resonance Temples, meditating on a memory creates cymatic patterns that crystallize into glowing cubes.</p>
    </div>
    <div class="memory-step reveal reveal-delay-2">
      <div class="step-num">3</div>
      <div class="step-icon">🌍</div>
      <h4>The Matrix</h4>
      <p>Memory cubes accumulate in the Cubix Matrix - vast shimmering mosaics deep beneath the world. Their hum generates the Purr.</p>
    </div>
  </div>

  <div class="accent-block reveal" style="margin-top:40px">
    The Purr is the sound of every kind thing ever done in Purrnia, still echoing. Newborns are traditionally held against the ground after birth, so the first thing they feel - before they open their eyes - is the Purr welcoming them to the world.
  </div>
</section>


<!-- ═══════════ EIGHT REGIONS ═══════════ -->
<section class="section" id="regions">
  <div class="reveal">
    <p class="section-label">The World</p>
    <h2 class="section-title">The Eight Regions</h2>
    <div class="section-divider"></div>
    <p class="section-desc">Eight places where Mr. Meow and Mrs. Meow stopped, felt something, and let the feeling take root. All connected by the Threadways - ancient luminous paths, rivers with helpful currents, and warm wind-routes.</p>
  </div>

  <!-- Hearthstone Commons -->
  <div class="hearthstone-card reveal">
    <div class="hs-icon">🌳</div>
    <h3>Hearthstone Commons</h3>
    <div class="hs-sub">The Central Hub · Where All Threadways Meet</div>
    <p>A vast, sun-dappled meadow surrounding the Rootmother - the oldest living thing in Purrnia. Her roots touch the Cubix Matrix, making the Purr louder here than anywhere else. A gathering place, a market, a festival ground, and a crossroads. No one governs from the Commons. It belongs to everyone.</p>
  </div>

  <div class="region-full-grid">
        <div class="region-full-card reveal" style="transition-delay:0s">
      <div class="r-glow" style="background:#d4883a"></div>
      <div class="r-header">
        <div class="r-icon">🔥</div>
        <div class="r-titles">
          <h3>Emberwood Thicket</h3>
          <div class="r-framework" style="color:var(--ember-amber)">Hearth-Crafting</div>
        </div>
      </div>
      <div class="r-desc">A dense, ancient forest locked in perpetual golden-hour light. Trees wide enough to house multi-level dwellings with hobbit-hole doors and stained-glass leaf windows. The forest floor glows bioluminescent when stepped on.</div>
      <div class="r-details">
        <div class="r-detail"><span class="r-detail-label">✦ Magic</span><span class="r-detail-text">Every fire is empathetic and semi-sentient, burning at the exact temperature needed.</span></div>
        <div class="r-detail"><span class="r-detail-label">✦ Creatures</span><span class="r-detail-text">Tea-Cup Foxes - grapefruit-sized foxes who sleep on fresh pastries and purr like boiling kettles.</span></div>
        <div class="r-detail"><span class="r-detail-label">✦ Secret</span><span class="r-detail-text">The Root Library - journals left overnight fill with transcribed happy dreams.</span></div>
      </div>
    </div>
        <div class="region-full-card reveal" style="transition-delay:0.08s">
      <div class="r-glow" style="background:#7b8fb8"></div>
      <div class="r-header">
        <div class="r-icon">🌊</div>
        <div class="r-titles">
          <h3>Lullaby Lochs</h3>
          <div class="r-framework" style="color:var(--lullaby-indigo)">Intuitive Wayfinding</div>
        </div>
      </div>
      <div class="r-desc">Interconnected shallow lakes and gentle waterfalls under perpetual twilight. Architecture of smooth white stone pavilions and floating lily-pad platforms connected by arched bridges.</div>
      <div class="r-details">
        <div class="r-detail"><span class="r-detail-label">✦ Magic</span><span class="r-detail-text">The water hums when disturbed. Skipping a stone produces perfectly tuned musical notes.</span></div>
        <div class="r-detail"><span class="r-detail-label">✦ Creatures</span><span class="r-detail-text">Bubble-Frogs - translucent spherical amphibians that float and release bell-like chimes.</span></div>
        <div class="r-detail"><span class="r-detail-label">✦ Secret</span><span class="r-detail-text">Star-Map Shallows - rearranging glowing pebbles on the lake bed rearranges the actual constellations.</span></div>
      </div>
    </div>
        <div class="region-full-card reveal" style="transition-delay:0s">
      <div class="r-glow" style="background:#c9a832"></div>
      <div class="r-header">
        <div class="r-icon">🌻</div>
        <div class="r-titles">
          <h3>Sun-Draped Terraces</h3>
          <div class="r-framework" style="color:var(--terrace-gold)">Generative Cultivation</div>
        </div>
      </div>
      <div class="r-desc">A sprawling vertical paradise carved into rolling hills. Mediterranean architecture with whitewashed stucco, vine-covered trellises heavy with fruit. Sunlight has a tangible, liquid quality.</div>
      <div class="r-details">
        <div class="r-detail"><span class="r-detail-label">✦ Magic</span><span class="r-detail-text">Plants respond to positive vocalizations. Fruit tastes like your favorite childhood memory.</span></div>
        <div class="r-detail"><span class="r-detail-label">✦ Creatures</span><span class="r-detail-text">Silk-Weaver Bees - stinger-less, fluffy golden insects that weave sunlight into gossamer fabric.</span></div>
        <div class="r-detail"><span class="r-detail-label">✦ Secret</span><span class="r-detail-text">The Forgotten Picnic - food placed on the stone table never spoils and perfectly replicates itself daily.</span></div>
      </div>
    </div>
        <div class="region-full-card reveal" style="transition-delay:0.08s">
      <div class="r-glow" style="background:#c48a8a"></div>
      <div class="r-header">
        <div class="r-icon">🪁</div>
        <div class="r-titles">
          <h3>Chiming Canyons</h3>
          <div class="r-framework" style="color:var(--canyon-rose)">Epistemic Unveiling</div>
        </div>
      </div>
      <div class="r-desc">A vast labyrinth of smooth, wind-carved canyons in rose-quartz, dusty pink, and lavender. Massive natural geodes and crystal clusters. Thousands of hanging chimes of glass, wood, and crystal.</div>
      <div class="r-details">
        <div class="r-detail"><span class="r-detail-label">✦ Magic</span><span class="r-detail-text">Winds are semi-solid and supportive. Hold a piece of fabric and step off any ledge to float and glide.</span></div>
        <div class="r-detail"><span class="r-detail-label">✦ Creatures</span><span class="r-detail-text">Kite-Rays - miniature air-swimming manta rays with soft pink velvety skin and ribbon tails.</span></div>
        <div class="r-detail"><span class="r-detail-label">✦ Secret</span><span class="r-detail-text">The Echoing Geode - whisper a hope to convert it into a glowing orb. The ceiling holds centuries of accumulated wishes.</span></div>
      </div>
    </div>
        <div class="region-full-card reveal" style="transition-delay:0s">
      <div class="r-glow" style="background:#a68ab8"></div>
      <div class="r-header">
        <div class="r-icon">❄️</div>
        <div class="r-titles">
          <h3>Velvet Tundra</h3>
          <div class="r-framework" style="color:var(--tundra-lilac)">Empathetic Transmutation</div>
        </div>
      </div>
      <div class="r-desc">Diamond snow under eternal clear twilight painted with slow-moving auroras in mint, pink, and lilac. Rounded snow-domes insulated with glowing amber moss. Plumes of steam from hot springs.</div>
      <div class="r-details">
        <div class="r-detail"><span class="r-detail-label">✦ Magic</span><span class="r-detail-text">The snow never causes discomfort. Lying in a snowbank feels like resting on a plush mattress.</span></div>
        <div class="r-detail"><span class="r-detail-label">✦ Creatures</span><span class="r-detail-text">Woolly Moth-Cats - feline with dense alpaca fleece and soft Luna moth wings. Living, purring weighted blankets.</span></div>
        <div class="r-detail"><span class="r-detail-label">✦ Secret</span><span class="r-detail-text">The Glass Garden - ice flowers in a cavern. Strike a petal to produce a bell tone that summons warm spring.</span></div>
      </div>
    </div>
        <div class="region-full-card reveal" style="transition-delay:0.08s">
      <div class="r-glow" style="background:#6a8a6a"></div>
      <div class="r-header">
        <div class="r-icon">📜</div>
        <div class="r-titles">
          <h3>Glimmering Archives</h3>
          <div class="r-framework" style="color:var(--archive-emerald)">Nostalgic Anchoring</div>
        </div>
      </div>
      <div class="r-desc">A gothic university crossed with an endless library. Polished mahogany, rich emerald, gleaming brass, and thousands of floating paper lanterns. Towers built from stacks of petrified books.</div>
      <div class="r-details">
        <div class="r-detail"><span class="r-detail-label">✦ Magic</span><span class="r-detail-text">Blank book pages project holographic sensory illusions of recorded memories. Lanterns glow brighter based on the joy within.</span></div>
        <div class="r-detail"><span class="r-detail-label">✦ Creatures</span><span class="r-detail-text">Ink-Owls - silent, pitch-black birds whose footprints spell comforting words or answers to unspoken questions.</span></div>
        <div class="r-detail"><span class="r-detail-label">✦ Secret</span><span class="r-detail-text">The First Draft Desk - a self-animating quill draws a lifelike illustration of the person you love most.</span></div>
      </div>
    </div>
        <div class="region-full-card reveal" style="transition-delay:0s">
      <div class="r-glow" style="background:#c49ab0"></div>
      <div class="r-header">
        <div class="r-icon">☁️</div>
        <div class="r-titles">
          <h3>Cloud-Spun Canopy</h3>
          <div class="r-framework" style="color:var(--canopy-pink)">Catenary Weaving</div>
        </div>
      </div>
      <div class="r-desc">An archipelago of solid, walkable clouds thousands of feet up. Cotton-candy pink, baby blue, lavender, and blinding white. Structures woven from iridescent spun sugar. Massive solid rainbows as bridges.</div>
      <div class="r-details">
        <div class="r-detail"><span class="r-detail-label">✦ Magic</span><span class="r-detail-text">Cloud-ground can be pulled apart and shaped by hand like soft clay. Forms dissolve back naturally.</span></div>
        <div class="r-detail"><span class="r-detail-label">✦ Creatures</span><span class="r-detail-text">Aura-Sheep - weightless animals with wool of miniature thunderclouds that change color with time of day.</span></div>
        <div class="r-detail"><span class="r-detail-label">✦ Secret</span><span class="r-detail-text">The Slumbering Galleon - an abandoned ship held by silk balloons with infinite hammocks and nightmare-free sleep.</span></div>
      </div>
    </div>
        <div class="region-full-card reveal" style="transition-delay:0.08s">
      <div class="r-glow" style="background:#9a5a6a"></div>
      <div class="r-header">
        <div class="r-icon">🧵</div>
        <div class="r-titles">
          <h3>Bramble-Patch Bazaars</h3>
          <div class="r-framework" style="color:var(--bazaar-berry)">Harmonic Synthesis</div>
        </div>
      </div>
      <div class="r-desc">Dense subterranean tunnels and caverns supported by ancient roots. Patchwork tents, brass lanterns, shops in hollowed gourds. Lit by glowing bioluminescent berries like organic fairy lights.</div>
      <div class="r-details">
        <div class="r-detail"><span class="r-detail-label">✦ Magic</span><span class="r-detail-text">Broken objects autonomously repair themselves. Cracks fill with glowing golden sap - kintsugi made real.</span></div>
        <div class="r-detail"><span class="r-detail-label">✦ Creatures</span><span class="r-detail-text">Patchwork Badgers - stout, friendly with quilt-pattern fur who find lost things and guide travelers.</span></div>
        <div class="r-detail"><span class="r-detail-label">✦ Secret</span><span class="r-detail-text">Lost and Found Garden - plant a fragment of a lost item and a silver vine grows the complete missing object.</span></div>
      </div>
    </div>
      </div>

  <div class="accent-block reveal" style="margin-top:48px">
    The borders between regions are not hard lines. They are gradual, beautiful gradients - amber light cooling into cerulean twilight, golden terraces rising into rose-quartz canyon walls. Two color palettes merge, two types of magic overlap, and creatures from both regions share the same meadow.
  </div>
</section>


<!-- ═══════════ THE KINDREN ═══════════ -->
<section class="section" id="kindren">
  <div class="reveal">
    <p class="section-label">The Inhabitants</p>
    <h2 class="section-title">The Purren of Purrnia</h2>
    <div class="section-divider"></div>
  </div>

  <div class="kindren-intro reveal">
    <p>The Purren are small, soft, round-bodied creatures - unmistakably feline. Large expressive eyes, short stubby legs, thick fluffy tails. They walk upright when they choose and on all fours when the mood strikes. They have no rulers, no military, and no prisons.</p>
    <p>Every Purren is born with a faint luminescence beneath the fur of their chest - the <strong>Glow</strong>. It is not a rank. It is a compass. As a Purren discovers their natural affinity, the Glow brightens and takes its color. Young Purren who have not yet found their affinity are called <em>Flickering</em>, and this is celebrated, not questioned.</p>
  </div>

  <div class="reveal" style="margin-top:48px">
    <p class="section-label">Natural Roles</p>
    <h2 class="section-title" style="font-size:clamp(28px,4vw,40px)">Eight Archetypes</h2>
    <div class="section-divider"></div>
  </div>

  <div class="archetype-grid">
        <div class="archetype-pill reveal" style="transition-delay:0s">
      <div class="a-icon">🍞</div>
      <h5>Hearthkeepers</h5>
      <div class="a-fw">Hearth-Crafting</div>
      <div class="a-desc">Run kitchens, inns, and communal spaces. The emotional anchors who make sure everyone is fed and warm.</div>
    </div>
        <div class="archetype-pill reveal" style="transition-delay:0.05s">
      <div class="a-icon">🐾</div>
      <h5>Wayfinders</h5>
      <div class="a-fw">Intuitive Wayfinding</div>
      <div class="a-desc">Travelers, guides, and mapmakers. The first to explore Drowsy Places and wake new land.</div>
    </div>
        <div class="archetype-pill reveal" style="transition-delay:0.1s">
      <div class="a-icon">🧶</div>
      <h5>Weavers</h5>
      <div class="a-fw">Catenary Weaving</div>
      <div class="a-desc">Maintain the invisible web of relationships. The ones who notice when someone has been quiet too long.</div>
    </div>
        <div class="archetype-pill reveal" style="transition-delay:0.15s">
      <div class="a-icon">🌱</div>
      <h5>Cultivators</h5>
      <div class="a-fw">Generative Cultivation</div>
      <div class="a-desc">Gardeners, farmers, and environmental stewards. Paws always in the soil, thinking in seasons.</div>
    </div>
        <div class="archetype-pill reveal" style="transition-delay:0.2s">
      <div class="a-icon">🕯️</div>
      <h5>Archivists</h5>
      <div class="a-fw">Nostalgic Anchoring</div>
      <div class="a-desc">Tend the Resonance Temples and serve as living historians. No memory is too small to preserve.</div>
    </div>
        <div class="archetype-pill reveal" style="transition-delay:0.25s">
      <div class="a-icon">💛</div>
      <h5>Menders</h5>
      <div class="a-fw">Empathetic Transmutation</div>
      <div class="a-desc">Healers and emotional caretakers with the rarest gift - willingness to feel others' pain to ease it.</div>
    </div>
        <div class="archetype-pill reveal" style="transition-delay:0.3s">
      <div class="a-icon">🔍</div>
      <h5>Seekers</h5>
      <div class="a-fw">Epistemic Unveiling</div>
      <div class="a-desc">Scholars, explorers, and puzzle-solvers. Ask questions the way others breathe - constantly and joyfully.</div>
    </div>
        <div class="archetype-pill reveal" style="transition-delay:0.35s">
      <div class="a-icon">🤝</div>
      <h5>Harmonists</h5>
      <div class="a-fw">Harmonic Synthesis</div>
      <div class="a-desc">Community organizers and bridge-builders. Thrive in collaboration and wilt in isolation.</div>
    </div>
      </div>
</section>


<!-- ═══════════ CHARACTERS ═══════════ -->
<section class="section" id="characters">
  <div class="reveal">
    <p class="section-label">The Friends of Purrnia</p>
    <h2 class="section-title">Character Profiles</h2>
    <div class="section-divider"></div>
    <p class="section-desc">Not a formal team. Not adventurers. Just friends - real, imperfect, chosen friends who drift in and out of each other's lives, pulled together by affection.</p>
  </div>

  <div class="char-profiles">
        <div class="char-profile reveal">
      <div class="cp-glow" style="background:radial-gradient(circle at 20% 30%,rgba(122,155,109,.08) 0%,transparent 60%)"></div>
      <div class="cp-sidebar">
        <div>
          <div class="cp-emoji">🐕</div>
          <div class="cp-name">Templeton</div>
          <div class="cp-species">Golden Hound</div>
          <div class="cp-role" style="color:var(--moss-green)">Cultivator · Sun-Draped Terraces</div>
          <div class="cp-glow-badge" style="background:rgba(122,155,109,.1);color:var(--moss-green)">
            <span class="cp-glow-dot" style="background:#7a9b6d"></span>
            Loam-brown with green flecks          </div>
        </div>
      </div>
      <div class="cp-body">
        <div class="cp-desc">Tends the Tanglewood - the most productive and most chaotic garden in the Terraces. Names every plant he grows. Gives everything away except lunch for himself. His harvests appear on neighbors' doorsteps before they realize they need them.</div>
        <div class="cp-quirks">
          <div class="cp-quirk-label">Quirks</div>
                      <div class="cp-quirk">Names every plant. Thousands of names memorized. Becomes visibly distressed if he forgets one.</div>
                      <div class="cp-quirk">The Tanglewood looks like a botanical explosion because he plants based on "what feels right next to what." It somehow produces twice as much as any orderly garden.</div>
                      <div class="cp-quirk">Falls asleep in the garden constantly. Wakes up with vines growing over his legs because the plants thought he was staying.</div>
                  </div>
        <div class="cp-struggle">
          <div class="cp-struggle-label">The Gentle Struggle</div>
          <p>Gives everything away and keeps nothing for himself - not out of martyrdom, but because it genuinely does not occur to him that he might need something. His struggle is learning that receiving care is not selfish.</p>
        </div>
        <div class="cp-traits">
                      <span class="cp-trait" style="background:rgba(122,155,109,.1);color:var(--moss-green)">Patient</span>
                      <span class="cp-trait" style="background:rgba(232,148,74,.1);color:var(--warm-orange)">Generous</span>
                      <span class="cp-trait" style="background:rgba(155,188,212,.1);color:#6a96b0">Forgetful</span>
                  </div>
      </div>
    </div>
        <div class="char-profile reveal">
      <div class="cp-glow" style="background:radial-gradient(circle at 80% 30%,rgba(155,188,212,.08) 0%,transparent 60%)"></div>
      <div class="cp-sidebar">
        <div>
          <div class="cp-emoji">🐆</div>
          <div class="cp-name">Maya</div>
          <div class="cp-species">Snow Pard</div>
          <div class="cp-role" style="color:var(--sky-soft)">Seeker · Chiming Canyons</div>
          <div class="cp-glow-badge" style="background:rgba(155,188,212,.1);color:#6a96b0">
            <span class="cp-glow-dot" style="background:#9bbcd4"></span>
            Silver-blue, like moonlight on snow          </div>
        </div>
      </div>
      <div class="cp-body">
        <div class="cp-desc">High-altitude explorer and cartographer. Makes the most beautiful maps in Purrnia in precise, elegant script. Moves fast and vertically in ways most cannot follow. Her ankle bell rings softly so she stops startling people.</div>
        <div class="cp-quirks">
          <div class="cp-quirk-label">Quirks</div>
                      <div class="cp-quirk">Talks to herself while working - full conversations with counterarguments. Sounds like two people debating.</div>
                      <div class="cp-quirk">Meticulous about maps but catastrophically disorganized about everything else. Priceless crystals next to unwashed teacups.</div>
                      <div class="cp-quirk">The ankle bell - she kept accidentally appearing silently behind everyone.</div>
                  </div>
        <div class="cp-struggle">
          <div class="cp-struggle-label">The Gentle Struggle</div>
          <p>Afraid of missing things. Worries there is always one more alcove unchecked. Must learn that thoroughness is not completeness, and the world will still have wonders left for tomorrow.</p>
        </div>
        <div class="cp-traits">
                      <span class="cp-trait" style="background:rgba(155,188,212,.1);color:#6a96b0">Observant</span>
                      <span class="cp-trait" style="background:rgba(122,155,109,.1);color:var(--moss-green)">Precise</span>
                      <span class="cp-trait" style="background:rgba(228,160,160,.1);color:#c07070">Restless</span>
                  </div>
      </div>
    </div>
        <div class="char-profile reveal">
      <div class="cp-glow" style="background:radial-gradient(circle at 20% 30%,rgba(201,168,50,.08) 0%,transparent 60%)"></div>
      <div class="cp-sidebar">
        <div>
          <div class="cp-emoji">🦁</div>
          <div class="cp-name">Tony</div>
          <div class="cp-species">Mane-Cat</div>
          <div class="cp-role" style="color:var(--terrace-gold)">Keeper · Glimmering Archives</div>
          <div class="cp-glow-badge" style="background:rgba(201,168,50,.1);color:var(--terrace-gold)">
            <span class="cp-glow-dot" style="background:#c9a832"></span>
            Deep liquid amber, like honey in afternoon light          </div>
        </div>
      </div>
      <div class="cp-body">
        <div class="cp-desc">Eyes perpetually half-closed. Reads ancient memory cubes not to research, but because old memories deserve to be witnessed. In afternoons, he simply sits - radiantly present. Inhabitants drift toward his warmth without intending to.</div>
        <div class="cp-quirks">
          <div class="cp-quirk-label">Quirks</div>
                      <div class="cp-quirk">Falls asleep everywhere. A sleeping Tony in a public space is a sign the space is safe.</div>
                      <div class="cp-quirk">His mane is always slightly messy because he sleeps on it wrong and politely declines all grooming offers.</div>
                      <div class="cp-quirk">Purrs audibly when experiencing a good memory cube. Archivists gauge cube quality by Tony's purr volume.</div>
                  </div>
        <div class="cp-struggle">
          <div class="cp-struggle-label">The Gentle Struggle</div>
          <p>Worries that his stillness is actually avoidance - that by sitting and listening, he avoids harder forms of care. Must learn that stillness IS action, and the warmth he provides is a choice he makes every day.</p>
        </div>
        <div class="cp-traits">
                      <span class="cp-trait" style="background:rgba(201,168,50,.1);color:var(--terrace-gold)">Calm</span>
                      <span class="cp-trait" style="background:rgba(232,148,74,.1);color:var(--warm-orange)">Present</span>
                      <span class="cp-trait" style="background:rgba(122,155,109,.1);color:var(--moss-green)">Wise</span>
                  </div>
      </div>
    </div>
        <div class="char-profile reveal">
      <div class="cp-glow" style="background:radial-gradient(circle at 80% 30%,rgba(168,201,155,.08) 0%,transparent 60%)"></div>
      <div class="cp-sidebar">
        <div>
          <div class="cp-emoji">🦥</div>
          <div class="cp-name">Garro</div>
          <div class="cp-species">Moss Sloth</div>
          <div class="cp-role" style="color:var(--moss-light)">Mender · Tundra-Thicket Border</div>
          <div class="cp-glow-badge" style="background:rgba(168,201,155,.1);color:var(--moss-light)">
            <span class="cp-glow-dot" style="background:#a8c99b"></span>
            Soft mossy green, like sunlight through a canopy          </div>
        </div>
      </div>
      <div class="cp-body">
        <div class="cp-desc">Gives the best hugs in Purrnia - accepted fact across all eight regions. Moves through the world like warm syrup. Has an uncanny sense for where someone is hurting, and simply sits nearby until the weight is lighter.</div>
        <div class="cp-quirks">
          <div class="cp-quirk-label">Quirks</div>
                      <div class="cp-quirk">Speaks in very short sentences with very long pauses. Not because he is slow - because he considers every word.</div>
                      <div class="cp-quirk">Things grow in his fur and he does not notice. Templeton once removed a fully sprouted bean plant from behind his ear. "That is a good bean."</div>
                      <div class="cp-quirk">His hugs last exactly as long as they need to and not one second less.</div>
                  </div>
        <div class="cp-struggle">
          <div class="cp-struggle-label">The Gentle Struggle</div>
          <p>Carries a quiet tiredness behind his permanent smile. He absorbs a fraction of every pain he sits with. Must learn to let someone else be the Mender for him.</p>
        </div>
        <div class="cp-traits">
                      <span class="cp-trait" style="background:rgba(168,201,155,.1);color:var(--moss-light)">Kind</span>
                      <span class="cp-trait" style="background:rgba(155,188,212,.1);color:#6a96b0">Slow</span>
                      <span class="cp-trait" style="background:rgba(228,160,160,.1);color:#c07070">Perceptive</span>
                  </div>
      </div>
    </div>
        <div class="char-profile reveal">
      <div class="cp-glow" style="background:radial-gradient(circle at 20% 30%,rgba(123,143,184,.08) 0%,transparent 60%)"></div>
      <div class="cp-sidebar">
        <div>
          <div class="cp-emoji">🦫</div>
          <div class="cp-name">Brappie</div>
          <div class="cp-species">River Bara</div>
          <div class="cp-role" style="color:var(--lullaby-indigo)">Harmonist · Bramble-Patch Bazaars</div>
          <div class="cp-glow-badge" style="background:rgba(123,143,184,.1);color:var(--lullaby-indigo)">
            <span class="cp-glow-dot" style="background:#7b8fb8"></span>
            Warm clear river-blue, like sun-warmed shallow water          </div>
        </div>
      </div>
      <div class="cp-body">
        <div class="cp-desc">Knows every name, every tea preference, every heartache in the Bazaars. A living tuning fork for social harmony. She runs nothing, manages nothing - she simply moves through every day connecting people who need each other.</div>
        <div class="cp-quirks">
          <div class="cp-quirk-label">Quirks</div>
                      <div class="cp-quirk">Remembers the name, favorite tea, and emotional state of every single inhabitant. When asked how: "They told me?"</div>
                      <div class="cp-quirk">Completely immovable when she decides to sit somewhere. Once fell asleep in a Threadway for six hours.</div>
                      <div class="cp-quirk">Hums constantly - a low pleasant hum that makes the Purr feel stronger nearby.</div>
                  </div>
        <div class="cp-struggle">
          <div class="cp-struggle-label">The Gentle Struggle</div>
          <p>So naturally social she has never had to work at a relationship. Must learn the patience required to reach people who cannot be reached by simply walking up and being warm.</p>
        </div>
        <div class="cp-traits">
                      <span class="cp-trait" style="background:rgba(123,143,184,.1);color:var(--lullaby-indigo)">Social</span>
                      <span class="cp-trait" style="background:rgba(232,148,74,.1);color:var(--warm-orange)">Calm</span>
                      <span class="cp-trait" style="background:rgba(122,155,109,.1);color:var(--moss-green)">Grounded</span>
                  </div>
      </div>
    </div>
        <div class="char-profile reveal">
      <div class="cp-glow" style="background:radial-gradient(circle at 80% 30%,rgba(212,136,58,.08) 0%,transparent 60%)"></div>
      <div class="cp-sidebar">
        <div>
          <div class="cp-emoji">🐂</div>
          <div class="cp-name">Angus</div>
          <div class="cp-species">Highland Woolly</div>
          <div class="cp-role" style="color:var(--ember-amber)">Hearthkeeper · Emberwood Thicket</div>
          <div class="cp-glow-badge" style="background:rgba(212,136,58,.1);color:var(--ember-amber)">
            <span class="cp-glow-dot" style="background:#d4883a"></span>
            Smoldering copper-amber, like embers buried in ash          </div>
        </div>
      </div>
      <div class="cp-body">
        <div class="cp-desc">Bakes one bread - Hearthbread. Dense, dark, slightly sweet. It tastes like being forgiven for something you didn't know you were carrying. His hearth has not gone out in living memory. He has never charged for a single loaf.</div>
        <div class="cp-quirks">
          <div class="cp-quirk-label">Quirks</div>
                      <div class="cp-quirk">Cannot see through his fringe and refuses to trim it. Navigates entirely by feel, sound, smell. "I see fine." He does not see fine.</div>
                      <div class="cp-quirk">His baking is entirely non-verbal and non-measured. No recipes, no timers. "You just know when it is ready."</div>
                      <div class="cp-quirk">Hums while he works - a sub-audible drone that blends with the Purr. Visitors think the Purr is louder in his house. It is.</div>
                  </div>
        <div class="cp-struggle">
          <div class="cp-struggle-label">The Gentle Struggle</div>
          <p>Deeply, completely content - and this contentment has slowly calcified into immobility. His struggle is learning that contentment and curiosity are not opposites. That loving his home does not mean the world beyond has nothing to offer.</p>
        </div>
        <div class="cp-traits">
                      <span class="cp-trait" style="background:rgba(212,136,58,.1);color:var(--ember-amber)">Solid</span>
                      <span class="cp-trait" style="background:rgba(122,155,109,.1);color:var(--moss-green)">Traditional</span>
                      <span class="cp-trait" style="background:rgba(155,188,212,.1);color:#6a96b0">Content</span>
                  </div>
      </div>
    </div>
      </div>
</section>


<!-- ═══════════ LORE LAYERS ═══════════ -->
<section class="section" id="lore">
  <div class="reveal">
    <p class="section-label">The Depths</p>
    <h2 class="section-title">Three Layers of Truth</h2>
    <div class="section-divider"></div>
    <p class="section-desc">The world reveals itself in layers. What everyone knows, what is discovered, and the deepest emotional truth at the heart of everything.</p>
  </div>

  <div class="lore-layers">
    <div class="lore-layer reveal">
      <div class="ll-label" style="color:var(--warm-orange)">The Surface Layer - What Everyone Knows</div>
      <h3>The Purr</h3>
      <p>Every Purren grows up knowing these things: The world hums. The hum is called the Purr, and it means the world is healthy. If you are kind, the Purr grows warmer. There are eight regions, all connected by the Threadways. Travel is encouraged. Every region welcomes visitors.</p>
      <p>Everyone is born with a Glow. It tells you where your heart belongs, but not who you must be. When you are lost, be still and hopeful. The Meow-Lights will come. When something breaks, bring it to the Bazaars. It will come back more beautiful than before.</p>
    </div>
    <div class="lore-layer reveal">
      <div class="ll-label" style="color:var(--moss-green)">The Hidden Layer - What Is Discovered</div>
      <h3>The Matrix</h3>
      <p>The Cubix Matrix exists beneath the entire continent - a vast labyrinth of crystallized memory cubes, far more extensive than anyone fully understands. The Rootmother's roots form the primary distribution network, carrying resonant energy to every region.</p>
      <p>The eight frameworks correspond to eight fundamental emotional frequencies that combine to produce the Purr. When all eight are healthy, the Purr is a rich, full chord. When one is neglected, the Purr shifts - beautiful, but incomplete, like a song with a missing note.</p>
    </div>
    <div class="lore-layer reveal">
      <div class="ll-label" style="color:var(--rose-soft)">The Heart Layer - The Emotional Truth</div>
      <h3>Love</h3>
      <p>The Cubix Meow is not a mechanism. It is a memory. The entire world of Purrnia is a crystallized act of love - the resonance of two Purren who cared for each other so completely that the feeling became a place.</p>
      <p>The world does not run on magic. It runs on the same force that makes one person bring another a cup of tea without being asked. It runs on the decision to open a gate for a stranger. The Cubix Meow is just what love looks like when it has had enough time and enough space to become a world.</p>
    </div>
  </div>
</section>


<!-- ═══════════ SEVEN TRUTHS ═══════════ -->
<section class="section" id="themes">
  <div class="reveal">
    <p class="section-label">What We Believe</p>
    <h2 class="section-title">The Seven Truths of Purrnia</h2>
    <div class="section-divider"></div>
    <p class="section-desc">The philosophical DNA of the world. Every story, every character, every piece of content reinforces at least one.</p>
  </div>

  <div class="themes-grid">
        <div class="theme-card reveal" style="transition-delay:0s">
      <span class="theme-icon">✨</span>
      <div>
        <h4>The world remembers kindness.</h4>
        <p>Every genuine act of care becomes permanent architecture. The ground beneath your feet is made of every good thing anyone ever did.</p>
      </div>
    </div>
        <div class="theme-card reveal" style="transition-delay:0.07s">
      <span class="theme-icon">💛</span>
      <div>
        <h4>Vulnerability is the source of all strength.</h4>
        <p>The most powerful magic requires lowering defenses and opening your heart. The Cubix Meow rewards openness.</p>
      </div>
    </div>
        <div class="theme-card reveal" style="transition-delay:0.14s">
      <span class="theme-icon">🤝</span>
      <div>
        <h4>No one can do everything alone.</h4>
        <p>The world is structurally built to require cooperation. Asking for help is never weakness - it is how the world works.</p>
      </div>
    </div>
        <div class="theme-card reveal" style="transition-delay:0.21s">
      <span class="theme-icon">🍞</span>
      <div>
        <h4>Care is the most powerful act.</h4>
        <p>Not grand heroics. The daily work of cooking, tending, checking on friends, and keeping fires lit.</p>
      </div>
    </div>
        <div class="theme-card reveal" style="transition-delay:0.28s">
      <span class="theme-icon">🌱</span>
      <div>
        <h4>Growth cannot be forced.</h4>
        <p>Gardens bloom when spoken to gently, not shouted at. Attunement deepens through patient practice, not grinding.</p>
      </div>
    </div>
        <div class="theme-card reveal" style="transition-delay:0.35s">
      <span class="theme-icon">💫</span>
      <div>
        <h4>Nothing is ever truly broken.</h4>
        <p>Every shattered object mends with golden light. Sleeping land wakes the moment someone cares. A single honest word can restore what felt lost.</p>
      </div>
    </div>
        <div class="theme-card reveal" style="transition-delay:0.42s">
      <span class="theme-icon">🐾</span>
      <div>
        <h4>No one is ever truly lost.</h4>
        <p>The Meow-Lights come for everyone. Every Purren who wanders into the dark carries a Glow the world can always see.</p>
      </div>
    </div>
      </div>
</section>


<!-- ═══════════ QUIET MYSTERIES ═══════════ -->
<section class="section" id="mysteries">
  <div class="reveal">
    <p class="section-label">Things We Wonder About</p>
    <h2 class="section-title">The Quiet Mysteries</h2>
    <div class="section-divider"></div>
    <p class="section-desc">Unanswered questions that Purren hold gently, like a smooth stone in a pocket. Not anxious questions. The kind you wonder about on long evenings.</p>
  </div>

  <div class="mystery-grid">
        <div class="mystery-card reveal" style="transition-delay:0s">
      <h4>Are the First Wanderers still walking?</h4>
      <p>The oldest memory cubes show two figures matching the stories. No cube has ever shown them stopping.</p>
    </div>
        <div class="mystery-card reveal" style="transition-delay:0.06s">
      <h4>What is at the bottom of the Cubix Matrix?</h4>
      <p>Seekers have explored deeper than anyone thought possible and still found more cubes, more corridors, more shimmering geometry.</p>
    </div>
        <div class="mystery-card reveal" style="transition-delay:0.12s">
      <h4>Why do the Meow-Lights always look like cats?</h4>
      <p>The spirit familiars always take a feline shape. Always. Even in regions populated by foxes, frogs, and rays.</p>
    </div>
        <div class="mystery-card reveal" style="transition-delay:0.18s">
      <h4>Can a Purren&#039;s Glow change color completely?</h4>
      <p>Unverified stories - always secondhand - tell of a Glow that changed entirely. What would cause such a transformation?</p>
    </div>
        <div class="mystery-card reveal" style="transition-delay:0.24s">
      <h4>What do the Drowsy Places dream about?</h4>
      <p>The sleeping land is not dead. Cultivators at the edges say the soil feels distant, as if remembering something far away.</p>
    </div>
        <div class="mystery-card reveal" style="transition-delay:0.3s">
      <h4>Who left the first Lantern Post journal?</h4>
      <p>The oldest entries are written in a script no living Purren can read, in ink that still glows. Some believe it is Mrs. Meow's handwriting.</p>
    </div>
      </div>
</section>


<!-- ═══════════ GROUP DYNAMIC ═══════════ -->
<section class="section" id="dynamics">
  <div class="reveal">
    <p class="section-label">How They Orbit Each Other</p>
    <h2 class="section-title">The Group Dynamic</h2>
    <div class="section-divider"></div>
    <p class="section-desc">They are not a formal team. They are friends - real, imperfect, chosen friends who drift in and out of each other's lives, pulled together by affection and pulled apart by the natural rhythms of their individual lives.</p>
  </div>

  <div class="dynamic-section">
        <div class="dynamic-pair reveal" style="transition-delay:0s">
      <div class="dp-icons">🐱🌸</div>
      <div class="dp-label">Mr. &amp; Mrs. Meow</div>
      <p>The origin pair. His restlessness and her rootedness harmonized into the first catenary string - the love that became a world. He gives her a reason to walk. She gives him a reason to stop. Together, the Purr finds its full voice.</p>
    </div>
        <div class="dynamic-pair reveal" style="transition-delay:0.06s">
      <div class="dp-icons">🐕🦥</div>
      <div class="dp-label">Templeton &amp; Garro</div>
      <p>The anchor pair. Templeton works. Garro sleeps nearby. They are both perfectly happy. Garro extends his Glow through the soil, helping the garden process emotional residue.</p>
    </div>
        <div class="dynamic-pair reveal" style="transition-delay:0.12s">
      <div class="dp-icons">🐆🦁</div>
      <div class="dp-label">Maya &amp; Tony</div>
      <p>The tension pair. She moves too fast. He moves too slow. Together they arrive at the right speed. She rants about ravines. He quotes her own answer from twenty minutes ago.</p>
    </div>
        <div class="dynamic-pair reveal" style="transition-delay:0.18s">
      <div class="dp-icons">🦫🐂</div>
      <div class="dp-label">Brappie &amp; Angus</div>
      <p>The connector and the fixed point. Brappie keeps the group in contact when geography separates them. Angus anchors it all - the hearth everyone returns to. She carries the gate. He keeps the fire lit.</p>
    </div>
      </div>
</section>


<!-- ═══════════ CTA ═══════════ -->
<section class="cta-section">
  <div class="cta-card reveal">
    <div class="cta-paw">🐾</div>
    <h2>Follow the Paws</h2>
    <p>New art, comics, and stories from Purrnia every day. Join Mr. Meow and Mrs. Meow on their adventures.</p>
    <div>
      <a href="https://www.facebook.com/cubix.meow.rules" target="_blank" rel="noopener noreferrer" class="cta-btn">🐾 Follow on Facebook</a>
      <a href="index.html" class="cta-btn-secondary">← Back Home</a>
    </div>
  </div>
</section>


<!-- ═══════════ FOOTER ═══════════ -->
<footer class="footer">
  <div class="footer-logo"><span>🐾</span><span>Cubix Meow</span></div>
  <p>Two cats. One world. Endless wonder.</p>
  <p class="copyright">&copy; 2026 Cubix Meow. The world of Purrnia. Made with love for cats and travel.</p>
</footer>


<!-- ═══════════ SCRIPTS ═══════════ -->
<script>
// Nav scroll
const nav = document.getElementById('mainNav');
window.addEventListener('scroll', () => { nav.classList.toggle('scrolled', window.scrollY > 50); }, { passive: true });

// Mobile nav
const navToggle = document.getElementById('navToggle');
const navLinks = document.getElementById('navLinks');
navToggle.addEventListener('click', () => { navLinks.classList.toggle('open'); });

// Scroll reveal
const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => { if (entry.isIntersecting) entry.target.classList.add('visible'); });
}, { threshold: 0.08, rootMargin: '0px 0px -30px 0px' });
document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

// Smooth scroll for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function(e) {
    e.preventDefault();
    const target = document.querySelector(this.getAttribute('href'));
    if (target) {
      target.scrollIntoView({ behavior: 'smooth', block: 'start' });
      navLinks.classList.remove('open');
    }
  });
});
</script>

</body>
</html>