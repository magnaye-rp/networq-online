<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ryan Paulo Magnaye | Official Portfolio | Backend Software Developer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;500;600;700;800&family=DM+Sans:ital,wght@0,300;0,400;0,500;1,300&display=swap" rel="stylesheet">
    <link rel="icon" href="<?= base_url('favicon-dark.ico') ?>" type="image/x-icon" id="favicon">
    <meta name="msvalidate.01" content="57C2D28715E5FCC8211B41CD62FA37C5" />
    <meta name="description" content="Ryan Paulo Magnaye – Web developer portfolio showcasing projects in CodeIgniter, OAuth, Docker, and secure web applications.">

<style>
/* ═══════════════════════════════════════════════════════════
   TOKENS & THEME
═══════════════════════════════════════════════════════════ */
:root {
    --blue-primary:    #0b3c5d;
    --blue-secondary:  #1d4ed8;
    --orange-primary:  #f97316;
    --orange-dark:     #ea580c;

    /* dark mode (default) */
    --bg-main:         #0a0f1e;
    --bg-soft:         #060d1a;
    --bg-card:         #0d1829;
    --bg-card2:        #111f33;
    --text-main:       #e8edf5;
    --text-muted:      #7a92b0;
    --text-faint:      #3d5470;
    --border-color:    #1a2e44;
    --border-glow:     rgba(249,115,22,.18);
    --shadow-card:     0 8px 32px rgba(0,0,0,.45);
    --grid-line:       rgba(255,255,255,.03);
}

body.light-mode {
    --bg-main:         #f4f6fb;
    --bg-soft:         #ffffff;
    --bg-card:         #ffffff;
    --bg-card2:        #f0f4fa;
    --text-main:       #111827;
    --text-muted:      #4b6080;
    --text-faint:      #b0bec5;
    --border-color:    #dce4ef;
    --border-glow:     rgba(249,115,22,.12);
    --shadow-card:     0 4px 20px rgba(0,0,0,.08);
    --grid-line:       rgba(0,0,0,.03);
}

/* ═══ BASE ═══════════════════════════════════════════════ */
*, *::before, *::after { box-sizing: border-box; }
html { scroll-behavior: smooth; }
body {
    font-family: 'DM Sans', sans-serif;
    background-color: var(--bg-main);
    color: var(--text-main);
    transition: background-color .35s, color .35s;
    overflow-x: hidden;
}
h1,h2,h3,h4,h5,h6,
.navbar-brand,.section-title,.hero-title,.project-title,
.certificate-title,.skill-category,.contact-title,
.process-step-title,.service-name,.uiux-section-title {
    font-family: 'Syne', sans-serif;
}
a { text-decoration: none; }
body::before {
    content: '';
    position: fixed; inset: 0;
    background-image:
        linear-gradient(var(--grid-line) 1px, transparent 1px),
        linear-gradient(90deg, var(--grid-line) 1px, transparent 1px);
    background-size: 44px 44px;
    pointer-events: none; z-index: 0;
}
.container { position: relative; z-index: 1; }

/* ═══ NAVBAR ═════════════════════════════════════════════ */
.navbar {
    padding: 1.1rem 0;
    background-color: rgba(10,15,30,.85);
    backdrop-filter: blur(16px); -webkit-backdrop-filter: blur(16px);
    border-bottom: 1px solid var(--border-color); transition: all .3s;
}
body.light-mode .navbar { background-color: rgba(244,246,251,.9); }
.navbar-brand { font-weight: 800; font-size: 1.2rem; color: var(--text-main); letter-spacing: -.02em; }
.navbar-brand span { color: var(--orange-primary); }
.nav-link {
    color: var(--text-muted); font-weight: 500; font-size: .875rem;
    margin-left: 1.75rem; letter-spacing: .04em; text-transform: uppercase;
    transition: color .25s; position: relative;
}
.nav-link::after {
    content: ''; position: absolute; bottom: -4px; left: 0;
    width: 0; height: 2px; background: var(--orange-primary);
    transition: width .3s; border-radius: 2px;
}
.nav-link:hover, .nav-link.active { color: var(--orange-primary); }
.nav-link:hover::after, .nav-link.active::after { width: 100%; }

/* ═══ HERO ═══════════════════════════════════════════════ */
.hero-section {
    min-height: 100vh; display: flex; align-items: center;
    position: relative; overflow: hidden; padding-top: 5rem;
}
.hero-section::before, .hero-section::after {
    content: ''; position: absolute; border-radius: 50%;
    filter: blur(80px); pointer-events: none;
    animation: orb-drift 12s ease-in-out infinite alternate;
}
.hero-section::before {
    width: 520px; height: 520px;
    background: radial-gradient(circle, rgba(11,60,93,.55) 0%, transparent 70%);
    top: -100px; right: -100px;
}
.hero-section::after {
    width: 380px; height: 380px;
    background: radial-gradient(circle, rgba(249,115,22,.12) 0%, transparent 70%);
    bottom: 0; left: 10%; animation-delay: -6s;
}
@keyframes orb-drift {
    from { transform: translate(0,0) scale(1); }
    to   { transform: translate(30px,40px) scale(1.1); }
}
.avatar-container {
    width: 156px; height: 156px; margin: 0 auto 2rem; border-radius: 50%;
    position: relative; display: flex; align-items: center; justify-content: center;
    background: conic-gradient(from 180deg, var(--orange-primary), #0b3c5d, var(--orange-primary));
    padding: 3px; animation: spin-ring 8s linear infinite;
}
@keyframes spin-ring { to { --angle: 360deg; } }
.avatar-inner {
    width: 100%; height: 100%; border-radius: 50%; background: var(--bg-card);
    display: flex; align-items: center; justify-content: center; font-size: 4rem; overflow: hidden;
}
.avatar-inner img { width: 100%; height: 100%; object-fit: cover; border-radius: 50%; }
.avatar-container::after {
    content: ''; position: absolute; bottom: 8px; right: 8px;
    width: 16px; height: 16px; background: #22c55e; border-radius: 50%;
    border: 3px solid var(--bg-main); animation: pulse-dot 2s ease-in-out infinite; z-index: 2;
}
@keyframes pulse-dot {
    0%,100% { box-shadow: 0 0 0 0 rgba(34,197,94,.5); }
    50%      { box-shadow: 0 0 0 8px rgba(34,197,94,0); }
}
.hero-eyebrow {
    display: inline-flex; align-items: center; gap: .5rem;
    background: var(--bg-card); border: 1px solid var(--border-color);
    color: var(--orange-primary); font-size: .78rem; font-weight: 600;
    letter-spacing: .12em; text-transform: uppercase;
    padding: .35rem .9rem; border-radius: 99px; margin-bottom: 1.1rem;
}
.hero-title { font-size: clamp(2rem,5vw,3.4rem); font-weight: 800; line-height: 1.1; letter-spacing: -.03em; margin-bottom: 1rem; }
.hero-title .name { color: var(--orange-primary); }
.hero-subtitle { font-size: clamp(1rem,2.5vw,1.3rem); color: var(--text-muted); margin-bottom: 1.25rem; font-weight: 400; }
.hero-description { font-size: 1.05rem; color: var(--text-muted); max-width: 660px; margin: 0 auto 2.5rem; line-height: 1.75; }
.hero-ctas { display: flex; gap: .875rem; justify-content: center; flex-wrap: wrap; }
.btn-primary-custom {
    background: var(--orange-primary); color: #fff; padding: .75rem 1.6rem;
    border-radius: .6rem; border: none; font-weight: 600; font-size: .9rem;
    display: inline-flex; align-items: center; gap: .4rem; transition: all .3s;
    box-shadow: 0 4px 20px rgba(249,115,22,.3); cursor: pointer;
}
.btn-primary-custom:hover { background: var(--orange-dark); transform: translateY(-2px); box-shadow: 0 8px 28px rgba(249,115,22,.4); color: #fff; }
.btn-outline-custom {
    background: transparent; color: var(--text-main); padding: .75rem 1.4rem;
    border-radius: .6rem; border: 1px solid var(--border-color); font-weight: 500;
    font-size: .9rem; display: inline-flex; align-items: center; gap: .4rem; transition: all .3s; cursor: pointer;
}
.btn-outline-custom:hover { border-color: var(--orange-primary); color: var(--orange-primary); transform: translateY(-2px); background: var(--border-glow); }
.hero-stats { display: flex; justify-content: center; gap: 2.5rem; margin-top: 3rem; padding-top: 2rem; border-top: 1px solid var(--border-color); }
.stat-item { text-align: center; }
.stat-number { font-family: 'Syne', sans-serif; font-size: 1.6rem; font-weight: 800; color: var(--orange-primary); display: block; }
.stat-label { font-size: .78rem; color: var(--text-muted); text-transform: uppercase; letter-spacing: .08em; }
.scroll-hint {
    position: absolute; bottom: 2rem; left: 50%; transform: translateX(-50%);
    display: flex; flex-direction: column; align-items: center; gap: .4rem;
    color: var(--text-faint); font-size: .75rem; letter-spacing: .1em; text-transform: uppercase;
    animation: bounce-hint 2.5s ease-in-out infinite;
}
.scroll-hint i { font-size: 1.1rem; color: var(--orange-primary); }
@keyframes bounce-hint {
    0%,100% { transform: translateX(-50%) translateY(0); }
    50%      { transform: translateX(-50%) translateY(6px); }
}

/* ═══ SECTION SHARED ═════════════════════════════════════ */
.section-wrap { padding: 6rem 0; }
.section-tag {
    display: inline-flex; align-items: center; gap: .45rem;
    background: var(--border-glow); border: 1px solid var(--border-color);
    color: var(--orange-primary); font-size: .72rem; font-weight: 700;
    letter-spacing: .15em; text-transform: uppercase;
    padding: .3rem .85rem; border-radius: 99px; margin-bottom: .85rem;
}
.section-title { font-size: clamp(1.8rem,3.5vw,2.6rem); font-weight: 800; letter-spacing: -.03em; margin-bottom: .6rem; }
.section-description { font-size: 1rem; color: var(--text-muted); margin-bottom: 3.5rem; max-width: 560px; line-height: 1.7; }
.section-title .accent { color: var(--orange-primary); }

/* ═══ PROJECT CARDS ══════════════════════════════════════ */
.projects-section { background: var(--bg-soft); }
.project-card {
    background: var(--bg-card); border-radius: 1.2rem; overflow: hidden;
    border: 1px solid var(--border-color); transition: transform .35s, box-shadow .35s, border-color .35s; height: 100%;
}
.project-card:hover { transform: translateY(-8px); box-shadow: var(--shadow-card), 0 0 0 1px var(--border-glow); border-color: var(--orange-primary); }
.project-image-container { position: relative; height: 260px; overflow: hidden; }
.project-image-container::before {
    content: ''; position: absolute; inset: 0;
    background: linear-gradient(to bottom, transparent 30%, rgba(6,13,26,.95) 100%); z-index: 1;
}
.project-image { width: 100%; height: 100%; object-fit: cover; transition: transform .5s; }
.project-card:hover .project-image { transform: scale(1.06); }
.project-content { padding: 1.75rem; }
.project-title { font-size: 1.3rem; font-weight: 700; letter-spacing: -.02em; margin-bottom: .65rem; }
.project-description { font-size: .9rem; line-height: 1.65; color: var(--text-muted); margin-bottom: 1.1rem; }
.tech-badges { display: flex; flex-wrap: wrap; gap: .45rem; margin-bottom: 1.1rem; }
.tech-badge {
    background: rgba(249,115,22,.09); color: var(--orange-primary);
    padding: .28rem .65rem; font-size: .72rem; font-weight: 600;
    border-radius: 99px; border: 1px solid rgba(249,115,22,.22); letter-spacing: .02em;
}
.project-links { display: flex; gap: .5rem; flex-wrap: wrap; }
.btn-project {
    background: transparent; color: var(--text-main); border: 1px solid var(--border-color);
    padding: .42rem .9rem; font-size: .82rem; border-radius: .5rem;
    display: inline-flex; align-items: center; gap: .3rem; transition: all .25s; cursor: pointer;
}
.btn-project:hover { background: var(--orange-primary); color: #fff; border-color: var(--orange-primary); }

/* ═══ CERTIFICATE CARDS ══════════════════════════════════ */
.certificates-section { background: var(--bg-main); }
.certificate-card {
    background: var(--bg-card); border-radius: 1.2rem; overflow: hidden;
    border: 1px solid var(--border-color); transition: transform .35s, box-shadow .35s; height: 100%;
}
.certificate-card:hover { transform: translateY(-6px); box-shadow: var(--shadow-card); }
.certificate-image-container { height: 300px; overflow: hidden; background: var(--bg-soft); display: flex; align-items: center; justify-content: center; }
.certificate-image { width: 100%; height: 100%; object-fit: contain; object-position: center; transition: transform .3s; cursor: pointer; }
.certificate-card:hover .certificate-image { transform: scale(1.04); }
.certificate-placeholder { font-size: 4rem; color: var(--text-faint); }
.certificate-content { padding: 1.6rem; }
.certificate-title { font-size: 1.15rem; font-weight: 700; letter-spacing: -.01em; margin-bottom: .6rem; }
.certificate-description { font-size: .88rem; line-height: 1.6; color: var(--text-muted); margin-bottom: 1rem; }
.date-item { display: flex; align-items: center; font-size: .82rem; color: var(--text-muted); margin-bottom: .35rem; }
.date-item i { margin-right: .5rem; color: var(--orange-primary); }
.date-label { font-weight: 600; margin-right: .4rem; color: var(--text-main); }
.certificate-status { display: inline-flex; align-items: center; gap: .3rem; padding: .22rem .75rem; font-size: .72rem; font-weight: 600; border-radius: 99px; margin-top: .5rem; }
.status-valid   { background: rgba(34,197,94,.1);  color: #22c55e; border: 1px solid rgba(34,197,94,.25); }
.status-expired { background: rgba(239,68,68,.1);  color: #ef4444; border: 1px solid rgba(239,68,68,.25); }

/* ═══ SKILLS ═════════════════════════════════════════════ */
.skills-section { background: var(--bg-soft); }
.skill-card {
    background: var(--bg-card); border-radius: 1rem; border: 1px solid var(--border-color);
    padding: 2rem; height: 100%; transition: transform .3s, box-shadow .3s, border-color .3s;
}
.skill-card:hover { transform: translateY(-4px); box-shadow: var(--shadow-card); border-color: rgba(249,115,22,.35); }
.skill-category { font-size: 1.1rem; font-weight: 700; margin-bottom: 1.4rem; text-align: center; display: flex; align-items: center; justify-content: center; gap: .5rem; }
.skill-category i { color: var(--orange-primary); }
.skill-badge {
    display: inline-block; padding: .42rem .9rem; background: var(--bg-soft);
    color: var(--text-muted); border-radius: .5rem; font-size: .85rem; font-weight: 500;
    margin: .3rem; border: 1px solid var(--border-color); transition: all .25s;
}
.skill-badge:hover { background: var(--orange-primary); color: #fff; border-color: var(--orange-primary); transform: translateY(-2px); }

/* ═══ DESIGN EXPERIENCE ══════════════════════════════════ */
.design-experience-section { background: var(--bg-main); }
.exp-card {
    background: var(--bg-card); border: 1px solid var(--border-color); border-radius: 1rem;
    padding: 1.75rem; margin-bottom: 1.25rem; border-left: 3px solid var(--orange-primary);
    transition: all .3s; position: relative; overflow: hidden;
}
.exp-card::before { content: ''; position: absolute; inset: 0; background: linear-gradient(135deg, var(--border-glow), transparent); opacity: 0; transition: opacity .3s; }
.exp-card:hover { transform: translateX(4px); box-shadow: var(--shadow-card); }
.exp-card:hover::before { opacity: 1; }
.exp-card-title { font-family: 'Syne', sans-serif; font-size: 1.05rem; font-weight: 700; margin-bottom: .25rem; }
.exp-card-org { font-size: .82rem; color: var(--text-muted); margin-bottom: .75rem; }
.exp-tags { display: flex; flex-wrap: wrap; gap: .4rem; margin-bottom: .85rem; }
.exp-tag { background: rgba(249,115,22,.08); color: var(--orange-primary); padding: .22rem .65rem; font-size: .72rem; font-weight: 600; border-radius: 99px; border: 1px solid rgba(249,115,22,.2); }
.exp-desc { font-size: .88rem; color: var(--text-muted); line-height: 1.65; }
.skill-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; margin-top: 2rem; }
.skill-grid-card { background: var(--bg-card); border: 1px solid var(--border-color); border-radius: .875rem; padding: 1.4rem; transition: all .3s; }
.skill-grid-card:hover { border-color: var(--orange-primary); box-shadow: 0 0 20px var(--border-glow); }
.skill-grid-card-title { font-family: 'Syne', sans-serif; font-size: .9rem; font-weight: 700; color: var(--orange-primary); margin-bottom: .85rem; display: flex; align-items: center; gap: .4rem; }
.skill-output-tag { display: inline-block; padding: .2rem .6rem; background: var(--bg-soft); color: var(--text-muted); font-size: .75rem; border-radius: .35rem; border: 1px solid var(--border-color); margin: .2rem; }

/* ═══ DESIGN PROCESS ═════════════════════════════════════ */
.design-process-section { background: var(--bg-soft); }
.process-timeline { position: relative; padding-left: 3rem; }
.process-timeline::before { content: ''; position: absolute; left: .9rem; top: 0; bottom: 0; width: 2px; background: linear-gradient(to bottom, var(--orange-primary), transparent); border-radius: 2px; }
.process-step { position: relative; margin-bottom: 2.5rem; opacity: 0; transform: translateX(-20px); transition: opacity .5s, transform .5s; }
.process-step.visible { opacity: 1; transform: translateX(0); }
.process-step-dot { position: absolute; left: -2.52rem; top: .3rem; width: 34px; height: 34px; border-radius: 50%; background: var(--orange-primary); display: flex; align-items: center; justify-content: center; font-family: 'Syne', sans-serif; font-size: .75rem; font-weight: 800; color: #fff; box-shadow: 0 0 0 6px var(--bg-soft), 0 0 20px rgba(249,115,22,.35); }
.process-step-body { background: var(--bg-card); border: 1px solid var(--border-color); border-radius: 1rem; padding: 1.5rem; transition: all .3s; }
.process-step-body:hover { border-color: var(--orange-primary); box-shadow: var(--shadow-card); }
.process-step-title { font-size: 1.1rem; font-weight: 700; margin-bottom: .5rem; color: var(--text-main); }
.process-step-desc { font-size: .88rem; color: var(--text-muted); line-height: 1.7; margin-bottom: 1rem; }
.process-outputs { display: flex; flex-wrap: wrap; gap: .4rem; }
.process-output { padding: .22rem .65rem; font-size: .72rem; font-weight: 600; border-radius: .35rem; border: 1px solid var(--border-color); color: var(--text-muted); background: var(--bg-soft); }

/* ═══ SERVICES ═══════════════════════════════════════════ */
.services-section { background: var(--bg-main); }
.services-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(220px, 1fr)); gap: 1.1rem; }
.service-card {
    background: var(--bg-card); border: 1px solid var(--border-color); border-radius: 1rem;
    padding: 1.6rem; transition: all .35s; cursor: default; position: relative; overflow: hidden;
}
.service-card::after { content: ''; position: absolute; bottom: 0; left: 0; right: 0; height: 3px; background: var(--orange-primary); transform: scaleX(0); transform-origin: left; transition: transform .35s; border-radius: 0 0 1rem 1rem; }
.service-card:hover { transform: translateY(-6px); box-shadow: var(--shadow-card); border-color: rgba(249,115,22,.3); }
.service-card:hover::after { transform: scaleX(1); }
.service-icon { width: 46px; height: 46px; border-radius: .75rem; background: rgba(249,115,22,.1); border: 1px solid rgba(249,115,22,.2); display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: var(--orange-primary); margin-bottom: 1rem; transition: all .3s; }
.service-card:hover .service-icon { background: var(--orange-primary); color: #fff; }
.service-name { font-size: .95rem; font-weight: 700; margin-bottom: .5rem; letter-spacing: -.01em; }
.service-desc { font-size: .8rem; color: var(--text-muted); line-height: 1.6; }

/* ═══ CONTACT ════════════════════════════════════════════ */
.contact-section { background: var(--bg-soft); }
.contact-card { background: var(--bg-card); border-radius: 1rem; border: 1px solid var(--border-color); padding: 2rem; height: 100%; }
.contact-title { font-size: 1.4rem; font-weight: 700; margin-bottom: .4rem; }
.contact-subtitle { font-size: .9rem; color: var(--text-muted); margin-bottom: 1.5rem; }
.contact-item { display: flex; align-items: center; padding: .9rem 1.2rem; background: var(--bg-soft); border: 1px solid var(--border-color); border-radius: .6rem; margin-bottom: .75rem; transition: all .25s; }
.contact-item:hover { transform: translateX(5px); border-color: var(--orange-primary); }
.contact-item i { font-size: 1.1rem; margin-right: .9rem; color: var(--orange-primary); }
.contact-item a { color: var(--text-main); font-size: .9rem; transition: color .25s; }
.contact-item a:hover { color: var(--orange-primary); }
.contact-form { background: var(--bg-card); border-radius: 1rem; border: 1px solid var(--border-color); padding: 2rem; height: 100%; }
.form-floating > .form-control, .form-floating > .form-select { background-color: var(--bg-soft); border: 1px solid var(--border-color); color: var(--text-main); border-radius: .6rem; }
.form-floating > .form-control:focus { border-color: var(--orange-primary); box-shadow: 0 0 0 .2rem rgba(249,115,22,.18); background: var(--bg-soft); color: var(--text-main); }
.form-floating > label { color: var(--text-muted); }
.form-control::placeholder { color: var(--text-muted); }
.form-control:focus { color: var(--text-main); background: var(--bg-soft); }
.btn-contact { background: var(--orange-primary); color: #fff; padding: .8rem 2rem; border-radius: .6rem; border: none; font-weight: 600; font-size: .9rem; width: 100%; margin-top: .75rem; cursor: pointer; transition: all .3s; box-shadow: 0 4px 16px rgba(249,115,22,.25); }
.btn-contact:hover { background: var(--orange-dark); transform: translateY(-2px); box-shadow: 0 8px 24px rgba(249,115,22,.35); color: #fff; }

/* ═══ SEE MORE ═══════════════════════════════════════════ */
.see-more-wrap { text-align: center; margin-top: 2rem; }
.btn-see-more { background: transparent; color: var(--orange-primary); border: 1px solid var(--orange-primary); padding: .7rem 1.6rem; border-radius: .6rem; font-weight: 600; font-size: .88rem; display: inline-flex; align-items: center; gap: .4rem; transition: all .3s; cursor: pointer; }
.btn-see-more:hover { background: var(--orange-primary); color: #fff; transform: translateY(-2px); box-shadow: 0 6px 20px rgba(249,115,22,.3); }

/* ═══ SCROLL REVEAL ══════════════════════════════════════ */
.reveal { opacity: 0; transform: translateY(28px); transition: opacity .6s ease, transform .6s ease; }
.reveal.visible { opacity: 1; transform: none; }
.reveal:nth-child(2) { transition-delay: .1s; }
.reveal:nth-child(3) { transition-delay: .2s; }
.reveal:nth-child(4) { transition-delay: .3s; }

/* ═══ FOOTER ═════════════════════════════════════════════ */
.site-footer { background: var(--bg-card); border-top: 1px solid var(--border-color); padding: 1.5rem 0; text-align: center; font-size: .82rem; color: var(--text-muted); }
.site-footer span { color: var(--orange-primary); }

/* ═══ CERTIFICATE MODAL ══════════════════════════════════ */
.certificate-modal { position: fixed; inset: 0; background: rgba(0,0,0,.92); z-index: 9999; display: none; align-items: center; justify-content: center; opacity: 0; transition: opacity .3s; }
.certificate-modal.show { display: flex; opacity: 1; }
.certificate-modal-content { max-width: 90vw; max-height: 90vh; position: relative; display: flex; align-items: center; justify-content: center; }
.certificate-modal-image { max-width: 100%; max-height: 90vh; object-fit: contain; border-radius: .5rem; box-shadow: 0 20px 60px rgba(0,0,0,.6); }
.certificate-modal-close { position: absolute; top: -44px; right: 0; background: rgba(255,255,255,.15); color: #fff; border: none; width: 38px; height: 38px; border-radius: 50%; font-size: 1.3rem; cursor: pointer; display: flex; align-items: center; justify-content: center; transition: background .25s; }
.certificate-modal-close:hover { background: var(--orange-primary); }

/* ═══ DARK MODE TOGGLE ═══════════════════════════════════ */
.help-button { position: fixed; bottom: 2rem; right: 2rem; width: 50px; height: 50px; background: var(--bg-card); color: var(--orange-primary); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; cursor: pointer; border: 1px solid var(--border-color); box-shadow: 0 4px 20px rgba(0,0,0,.3); transition: all .3s; z-index: 998; }
.help-button:hover { background: var(--orange-primary); color: #fff; border-color: var(--orange-primary); transform: scale(1.1); }

/* ═══════════════════════════════════════════════════════════
   CHATBOT WIDGET
═══════════════════════════════════════════════════════════ */

/* ── FAB trigger ── */
#chat-fab {
    position: fixed; bottom: 2rem; right: 5.5rem;
    width: 50px; height: 50px;
    background: var(--orange-primary); color: #fff;
    border-radius: 50%; display: flex; align-items: center; justify-content: center;
    font-size: 1.25rem; cursor: pointer; border: none;
    box-shadow: 0 4px 20px rgba(249,115,22,.4); transition: all .3s; z-index: 999;
}
#chat-fab:hover { background: var(--orange-dark); transform: scale(1.1); box-shadow: 0 8px 28px rgba(249,115,22,.5); }
#chat-fab .fab-badge {
    position: absolute; top: -4px; right: -4px;
    width: 14px; height: 14px; background: #22c55e;
    border-radius: 50%; border: 2px solid var(--bg-main);
    animation: pulse-dot 2s ease-in-out infinite; display: none;
}
#chat-fab .fab-badge.show { display: block; }

/* ── Chat window ── */
#chat-window {
    position: fixed; bottom: 5.5rem; right: 2rem;
    width: 370px; max-height: 560px;
    background: var(--bg-card); border: 1px solid var(--border-color);
    border-radius: 1.2rem; display: flex; flex-direction: column;
    overflow: hidden;
    box-shadow: 0 20px 60px rgba(0,0,0,.5), 0 0 0 1px rgba(249,115,22,.08);
    z-index: 1000;
    transform: scale(.92) translateY(16px); opacity: 0; pointer-events: none;
    transition: transform .3s cubic-bezier(.34,1.56,.64,1), opacity .25s;
    transform-origin: bottom right;
}
#chat-window.open { transform: scale(1) translateY(0); opacity: 1; pointer-events: all; }

/* ── Chat header ── */
.chat-header {
    display: flex; align-items: center; gap: .75rem;
    padding: .9rem 1.1rem; background: var(--bg-card2);
    border-bottom: 1px solid var(--border-color); flex-shrink: 0;
}
.chat-header-avatar {
    width: 36px; height: 36px; border-radius: 50%;
    background: conic-gradient(from 180deg, var(--orange-primary), #0b3c5d, var(--orange-primary));
    padding: 2px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;
}
.chat-header-avatar-inner {
    width: 100%; height: 100%; border-radius: 50%; background: var(--bg-card2);
    display: flex; align-items: center; justify-content: center;
    font-size: .75rem; font-family: 'Syne', sans-serif; font-weight: 700; color: var(--orange-primary);
}
.chat-header-info { flex: 1; }
.chat-header-name { font-family: 'Syne', sans-serif; font-size: .92rem; font-weight: 700; line-height: 1.2; }
.chat-header-status { display: flex; align-items: center; gap: .35rem; font-size: .72rem; color: var(--text-muted); margin-top: .1rem; }
.chat-header-status .dot { width: 7px; height: 7px; border-radius: 50%; flex-shrink: 0; }
.dot-online  { background: #22c55e; animation: pulse-dot 2s ease-in-out infinite; }
.dot-offline { background: #ef4444; }
.dot-checking { background: #f59e0b; animation: checking-pulse .8s ease-in-out infinite alternate; }
@keyframes checking-pulse { from { opacity: .4; } to { opacity: 1; } }
.chat-header-close { background: transparent; border: none; color: var(--text-muted); font-size: 1rem; cursor: pointer; padding: .2rem; border-radius: .35rem; transition: all .2s; line-height: 1; }
.chat-header-close:hover { color: var(--text-main); background: var(--border-color); }

/* ── Server status banner ── */
.server-banner {
    display: none; align-items: center; gap: .6rem;
    padding: .6rem 1rem; font-size: .78rem; font-weight: 500;
    flex-shrink: 0; border-bottom: 1px solid var(--border-color);
}
.server-banner.offline { display: flex; background: rgba(239,68,68,.08); color: #ef4444; border-bottom-color: rgba(239,68,68,.2); }
.server-banner.checking { display: flex; background: rgba(245,158,11,.08); color: #f59e0b; border-bottom-color: rgba(245,158,11,.2); }
.server-banner i { font-size: .9rem; flex-shrink: 0; }
.server-banner a { color: inherit; text-decoration: underline; cursor: pointer; }

/* ── ngrok URL input ── */
.ngrok-input-wrap { display: none; padding: .5rem 1rem .75rem; background: rgba(239,68,68,.05); border-bottom: 1px solid rgba(239,68,68,.15); flex-shrink: 0; }
.ngrok-input-wrap.show { display: block; }
.ngrok-input-wrap label { font-size: .72rem; color: var(--text-muted); margin-bottom: .35rem; display: block; letter-spacing: .06em; text-transform: uppercase; }
.ngrok-input-row { display: flex; gap: .4rem; }
.ngrok-input-row input {
    flex: 1; background: var(--bg-soft); border: 1px solid var(--border-color);
    border-radius: .45rem; padding: .4rem .7rem; font-size: .8rem;
    color: var(--text-main); outline: none; font-family: 'DM Sans', sans-serif; transition: border-color .2s;
}
.ngrok-input-row input:focus { border-color: var(--orange-primary); }
.ngrok-input-row input::placeholder { color: var(--text-faint); }
.ngrok-btn-connect { background: var(--orange-primary); color: #fff; border: none; border-radius: .45rem; padding: .4rem .8rem; font-size: .78rem; font-weight: 600; cursor: pointer; transition: background .2s; white-space: nowrap; }
.ngrok-btn-connect:hover { background: var(--orange-dark); }

/* ── Messages area ── */
.chat-messages { flex: 1; overflow-y: auto; padding: 1rem; display: flex; flex-direction: column; gap: .75rem; scroll-behavior: smooth; }
.chat-messages::-webkit-scrollbar { width: 3px; }
.chat-messages::-webkit-scrollbar-thumb { background: var(--border-color); border-radius: 99px; }

/* Welcome state */
.chat-welcome { text-align: center; padding: 1rem .5rem; }
.chat-welcome-icon { font-size: 2rem; margin-bottom: .6rem; }
.chat-welcome h4 { font-family: 'Syne', sans-serif; font-size: .95rem; font-weight: 700; margin-bottom: .35rem; }
.chat-welcome p { font-size: .8rem; color: var(--text-muted); line-height: 1.5; margin-bottom: 1rem; }
.chat-chips { display: flex; flex-wrap: wrap; gap: .4rem; justify-content: center; }
.chat-chip { background: var(--bg-card2); border: 1px solid var(--border-color); color: var(--text-muted); font-size: .75rem; padding: .3rem .7rem; border-radius: 99px; cursor: pointer; transition: all .2s; font-family: 'DM Sans', sans-serif; }
.chat-chip:hover { border-color: var(--orange-primary); color: var(--orange-primary); background: rgba(249,115,22,.06); }

/* Message bubbles */
.msg-row { display: flex; gap: .5rem; align-items: flex-end; }
.msg-row.user { flex-direction: row-reverse; }
.msg-av { width: 26px; height: 26px; border-radius: 50%; flex-shrink: 0; display: flex; align-items: center; justify-content: center; font-size: .62rem; font-weight: 700; font-family: 'Syne', sans-serif; }
.msg-av.bot  { background: rgba(249,115,22,.15); color: var(--orange-primary); border: 1px solid rgba(249,115,22,.25); }
.msg-av.user { background: var(--orange-primary); color: #fff; }
.bubble { max-width: 78%; padding: .6rem .85rem; border-radius: .85rem; font-size: .85rem; line-height: 1.55; word-break: break-word; }
.bubble.bot  { background: var(--bg-card2); border: 1px solid var(--border-color); border-bottom-left-radius: .2rem; color: var(--text-main); }
.bubble.user { background: var(--orange-primary); color: #fff; border-bottom-right-radius: .2rem; }

/* Confidence pill */
.conf-pill { display: inline-flex; align-items: center; gap: .25rem; font-size: .65rem; font-weight: 600; padding: .1rem .45rem; border-radius: 99px; margin-top: .35rem; letter-spacing: .04em; }
.conf-high { background: rgba(34,197,94,.1);  color: #22c55e; border: 1px solid rgba(34,197,94,.2); }
.conf-mid  { background: rgba(245,158,11,.1); color: #f59e0b; border: 1px solid rgba(245,158,11,.2); }
.conf-low  { background: rgba(239,68,68,.1);  color: #ef4444; border: 1px solid rgba(239,68,68,.2); }

/* Typing dots */
.typing-bubble { display: flex; align-items: center; gap: .3rem; padding: .6rem .85rem; background: var(--bg-card2); border: 1px solid var(--border-color); border-radius: .85rem; border-bottom-left-radius: .2rem; width: fit-content; }
.t-dot { width: 6px; height: 6px; border-radius: 50%; background: var(--text-faint); animation: tdot .9s ease-in-out infinite; }
.t-dot:nth-child(2) { animation-delay: .15s; }
.t-dot:nth-child(3) { animation-delay: .3s; }
@keyframes tdot {
    0%,60%,100% { transform: translateY(0); background: var(--text-faint); }
    30%          { transform: translateY(-4px); background: var(--orange-primary); }
}
.msg-row { animation: msg-in .25s ease; }
@keyframes msg-in { from { opacity: 0; transform: translateY(8px); } to { opacity: 1; transform: none; } }

/* ── Input bar ── */
.chat-input-bar { display: flex; align-items: flex-end; gap: .5rem; padding: .75rem; border-top: 1px solid var(--border-color); background: var(--bg-card); flex-shrink: 0; }
#chat-input {
    flex: 1; background: var(--bg-card2); border: 1px solid var(--border-color);
    border-radius: .7rem; padding: .5rem .8rem; font-size: .85rem;
    color: var(--text-main); outline: none; resize: none;
    font-family: 'DM Sans', sans-serif; line-height: 1.5; max-height: 90px;
    overflow-y: auto; transition: border-color .2s;
}
#chat-input:focus { border-color: var(--orange-primary); }
#chat-input::placeholder { color: var(--text-faint); }
#chat-input:disabled { opacity: .5; cursor: not-allowed; }
#chat-send { width: 36px; height: 36px; border-radius: 50%; background: var(--orange-primary); border: none; color: #fff; font-size: .9rem; cursor: pointer; display: flex; align-items: center; justify-content: center; flex-shrink: 0; transition: all .2s; }
#chat-send:hover { background: var(--orange-dark); transform: scale(1.08); }
#chat-send:disabled { opacity: .4; cursor: not-allowed; transform: none; }

/* ═══ RESPONSIVE ═════════════════════════════════════════ */
@media (max-width: 768px) {
    .hero-stats { gap: 1.5rem; }
    .skill-grid { grid-template-columns: 1fr; }
    .services-grid { grid-template-columns: 1fr 1fr; }
    .process-timeline { padding-left: 2.5rem; }
    .nav-link { margin-left: .75rem; margin-right: .75rem; }
    #chat-window { width: calc(100vw - 2rem); right: 1rem; bottom: 5rem; }
    #chat-fab { right: 1rem; bottom: 1rem; }
    .help-button { right: 4rem; bottom: 1rem; }
}
@media (max-width: 576px) {
    .hero-ctas { flex-direction: column; align-items: center; }
    .services-grid { grid-template-columns: 1fr; }
    .hero-stats { flex-wrap: wrap; gap: 1.25rem; }
    .stat-number { font-size: 1.3rem; }
}
.btn-primary-custom:disabled, .btn-outline-custom:disabled, .btn-project:disabled { opacity: .6; cursor: not-allowed; }
</style>
</head>
<body>

<!-- ═══ NAVBAR ═══════════════════════════════════════════ -->
<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#home">RP<span>.</span>Magnaye</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav" aria-controls="navbarNav"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
                <li class="nav-item"><a class="nav-link" href="#certificates">Certificates</a></li>
                <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
                <li class="nav-item"><a class="nav-link" href="#experience">Experience</a></li>
                <li class="nav-item"><a class="nav-link" href="#process">Process</a></li>
                <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- ═══ HERO ═════════════════════════════════════════════ -->
<section id="home" class="hero-section">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="avatar-container">
                    <div class="avatar-inner">
                        <?php
                        $profilePicExists = file_exists(FCPATH . 'uploads/profile-pic.jpg');
                        if ($profilePicExists): ?>
                            <img src="/uploads/profile-pic.jpg" alt="Profile Picture">
                        <?php else: ?>
                            👨‍💻
                        <?php endif; ?>
                    </div>
                </div>
                <div class="hero-eyebrow">
                    <i class="bi bi-circle-fill" style="font-size:.5rem;color:#22c55e"></i>
                    Available for opportunities
                </div>
                <h1 class="hero-title">Hi, I'm <span class="name">Ryan Paulo Magnaye</span></h1>
                <p class="hero-subtitle">Backend-Focused Software Developer & UI/UX Designer</p>
                <p class="hero-description">
                    I specialize in building scalable backend systems, clean APIs,
                    and well-structured databases — while bringing user-centered design
                    thinking to every interface I build. I thrive in collaborative
                    environments and enjoy solving real-world problems through
                    reliable, thoughtful design.
                </p>
                <div class="hero-ctas">
                    <a href="mailto:magnaye.rp@gmail.com" class="btn-primary-custom">
                        <i class="bi bi-envelope-fill"></i>Get in Touch
                    </a>
                    <a href="https://github.com/magnaye-rp" target="_blank" class="btn-outline-custom">
                        <i class="bi bi-github"></i>GitHub
                    </a>
                    <a href="https://linkedin.com/in/magnaye-rp" target="_blank" class="btn-outline-custom">
                        <i class="bi bi-linkedin"></i>LinkedIn
                    </a>
                </div>
                <div class="hero-stats">
                    <div class="stat-item"><span class="stat-number">3+</span><span class="stat-label">Years Coding</span></div>
                    <div class="stat-item"><span class="stat-number">10+</span><span class="stat-label">Projects Built</span></div>
                    <div class="stat-item"><span class="stat-number">5+</span><span class="stat-label">Certifications</span></div>
                    <div class="stat-item"><span class="stat-number">∞</span><span class="stat-label">Coffee Consumed</span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="scroll-hint"><span>Scroll</span><i class="bi bi-chevron-down"></i></div>
</section>

<!-- ═══ PROJECTS ══════════════════════════════════════════ -->
<section id="projects" class="projects-section section-wrap">
    <div class="container">
        <div class="text-center">
            <span class="section-tag"><i class="bi bi-code-slash"></i> Work</span>
            <h2 class="section-title">Featured <span class="accent">Projects</span></h2>
            <p class="section-description mx-auto">
                Selected projects highlighting my experience in backend development,
                system design, and real-world problem solving.
            </p>
        </div>
        <div class="row g-4">
            <?php foreach ($projectsLimited as $project): ?>
            <div class="col-md-6 reveal">
                <div class="project-card">
                    <div class="project-image-container">
                        <div id="carousel-<?= $project['id'] ?>" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <?php if (empty($project['images'])): ?>
                                    <div class="carousel-item active">
                                        <img src="https://via.placeholder.com/800x450?text=No+Image"
                                             class="d-block w-100 project-image"
                                             alt="<?= esc($project['project_name']) ?>">
                                    </div>
                                <?php else: ?>
                                    <?php foreach ($project['images'] as $index => $image): ?>
                                        <div class="carousel-item <?= ($index === 0) ? 'active' : '' ?>">
                                            <img src="<?= base_url(esc($image['image_path'])) ?>"
                                                 class="d-block w-100 project-image"
                                                 alt="<?= esc($project['project_name']) ?> - Image <?= $index + 1 ?>"
                                                 loading="lazy">
                                        </div>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                            <?php if (!empty($project['images']) && count($project['images']) > 1): ?>
                                <button class="carousel-control-prev" type="button"
                                        data-bs-target="#carousel-<?= $project['id'] ?>" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                        data-bs-target="#carousel-<?= $project['id'] ?>" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                                <div class="carousel-indicators">
                                    <?php foreach ($project['images'] as $index => $image): ?>
                                        <button type="button"
                                                data-bs-target="#carousel-<?= $project['id'] ?>"
                                                data-bs-slide-to="<?= $index ?>"
                                                class="<?= ($index === 0) ? 'active' : '' ?>"
                                                aria-label="Slide <?= $index + 1 ?>"></button>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="project-content">
                        <h3 class="project-title"><?= esc($project['project_name']) ?></h3>
                        <p class="project-description"><?= esc($project['description']) ?></p>
                        <div class="tech-badges">
                            <?php foreach (explode(',', $project['technology_stack']) as $tech): ?>
                                <span class="tech-badge"><?= esc(trim($tech)) ?></span>
                            <?php endforeach; ?>
                        </div>
                        <div class="project-links">
                            <a href="<?= esc($project['github_link']) ?>" target="_blank" class="btn-project">
                                <i class="bi bi-github"></i>Code
                            </a>
                            <?php if (!empty($project['live_demo_link'])): ?>
                                <a href="<?= esc($project['live_demo_link']) ?>" target="_blank" class="btn-project">
                                    <i class="bi bi-box-arrow-up-right"></i>Live Demo
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <?php if ($hasMoreProjects): ?>
        <div class="see-more-wrap">
            <button class="btn-see-more" id="seeMoreProjects">
                <i class="bi bi-eye"></i>See More Projects (<?= $totalProjects - 4 ?> more)
            </button>
        </div>
        <div id="additionalProjects" class="row g-4 mt-0" style="display:none">
            <?php foreach (array_slice($projects, 4) as $project): ?>
            <div class="col-md-6 reveal">
                <div class="project-card">
                    <div class="project-image-container">
                        <div id="carousel-<?= $project['id'] ?>" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <?php if (empty($project['images'])): ?>
                                    <div class="carousel-item active">
                                        <img src="https://via.placeholder.com/800x450?text=No+Image"
                                             class="d-block w-100 project-image"
                                             alt="<?= esc($project['project_name']) ?>">
                                    </div>
                                <?php else: ?>
                                    <?php foreach ($project['images'] as $index => $image): ?>
                                        <div class="carousel-item <?= ($index === 0) ? 'active' : '' ?>">
                                            <img src="<?= base_url(esc($image['image_path'])) ?>"
                                                 class="d-block w-100 project-image"
                                                 alt="<?= esc($project['project_name']) ?> - Image <?= $index + 1 ?>"
                                                 loading="lazy">
                                        </div>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                            <?php if (!empty($project['images']) && count($project['images']) > 1): ?>
                                <button class="carousel-control-prev" type="button"
                                        data-bs-target="#carousel-<?= $project['id'] ?>" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                        data-bs-target="#carousel-<?= $project['id'] ?>" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                                <div class="carousel-indicators">
                                    <?php foreach ($project['images'] as $index => $image): ?>
                                        <button type="button"
                                                data-bs-target="#carousel-<?= $project['id'] ?>"
                                                data-bs-slide-to="<?= $index ?>"
                                                class="<?= ($index === 0) ? 'active' : '' ?>"
                                                aria-label="Slide <?= $index + 1 ?>"></button>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="project-content">
                        <h3 class="project-title"><?= esc($project['project_name']) ?></h3>
                        <p class="project-description"><?= esc($project['description']) ?></p>
                        <div class="tech-badges">
                            <?php foreach (explode(',', $project['technology_stack']) as $tech): ?>
                                <span class="tech-badge"><?= esc(trim($tech)) ?></span>
                            <?php endforeach; ?>
                        </div>
                        <div class="project-links">
                            <a href="<?= esc($project['github_link']) ?>" target="_blank" class="btn-project">
                                <i class="bi bi-github"></i>Code
                            </a>
                            <?php if (!empty($project['live_demo_link'])): ?>
                                <a href="<?= esc($project['live_demo_link']) ?>" target="_blank" class="btn-project">
                                    <i class="bi bi-box-arrow-up-right"></i>Live Demo
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </div>
</section>

<!-- ═══ CERTIFICATES ══════════════════════════════════════ -->
<section id="certificates" class="certificates-section section-wrap">
    <div class="container">
        <div class="text-center">
            <span class="section-tag"><i class="bi bi-award"></i> Credentials</span>
            <h2 class="section-title">Professional <span class="accent">Certifications</span></h2>
            <p class="section-description mx-auto">
                Industry-recognized certifications validating my expertise and
                commitment to continuous learning.
            </p>
        </div>
        <div class="row g-4">
            <?php foreach ($certificatesLimited as $certificate): ?>
            <div class="col-md-6 reveal">
                <div class="certificate-card">
                    <div class="certificate-image-container">
                        <?php if (!empty($certificate['image_path'])): ?>
                            <img src="<?= base_url(esc($certificate['image_path'])) ?>"
                                 class="certificate-image"
                                 alt="<?= esc($certificate['name']) ?> Certificate"
                                 loading="lazy">
                        <?php else: ?>
                            <div class="certificate-placeholder"><i class="bi bi-award-fill"></i></div>
                        <?php endif; ?>
                    </div>
                    <div class="certificate-content">
                        <h3 class="certificate-title"><?= esc($certificate['name']) ?> Certificate</h3>
                        <p class="certificate-description"><?= esc($certificate['description']) ?></p>
                        <div class="date-item">
                            <i class="bi bi-calendar-check"></i>
                            <span class="date-label">Issued:</span>
                            <span><?= esc(date('F Y', strtotime($certificate['date_issued']))) ?></span>
                        </div>
                        <?php if (!empty($certificate['date_expiry'])): ?>
                            <div class="date-item">
                                <i class="bi bi-calendar-x"></i>
                                <span class="date-label">Expires:</span>
                                <span><?= esc(date('F Y', strtotime($certificate['date_expiry']))) ?></span>
                            </div>
                        <?php else: ?>
                            <div class="date-item">
                                <i class="bi bi-calendar-check"></i>
                                <span class="date-label">Expires:</span>
                                <span>No Expiry Date</span>
                            </div>
                        <?php endif; ?>
                        <div style="margin-top:.5rem;font-size:.85rem;">
                            <strong>Issuer:</strong> <?= esc($certificate['issued_by']) ?>
                        </div>
                        <?php $isExpired = !empty($certificate['date_expiry']) && strtotime($certificate['date_expiry']) < time(); ?>
                        <span class="certificate-status <?= $isExpired ? 'status-expired' : 'status-valid' ?>">
                            <?php if ($isExpired): ?>
                                <i class="bi bi-x-circle-fill"></i>Expired
                            <?php else: ?>
                                <i class="bi bi-check-circle-fill"></i>Valid
                            <?php endif; ?>
                        </span>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <?php if ($hasMoreCertificates): ?>
        <div class="see-more-wrap">
            <button class="btn-see-more" id="seeMoreCertificates">
                <i class="bi bi-eye"></i>See More Certificates (<?= $totalCertificates - 4 ?> more)
            </button>
        </div>
        <div id="additionalCertificates" class="row g-4 mt-0" style="display:none">
            <?php foreach (array_slice($certificates, 4) as $certificate): ?>
            <div class="col-md-6 reveal">
                <div class="certificate-card">
                    <div class="certificate-image-container">
                        <?php if (!empty($certificate['image_path'])): ?>
                            <img src="<?= base_url(esc($certificate['image_path'])) ?>"
                                 class="certificate-image"
                                 alt="<?= esc($certificate['name']) ?> Certificate"
                                 loading="lazy">
                        <?php else: ?>
                            <div class="certificate-placeholder"><i class="bi bi-award-fill"></i></div>
                        <?php endif; ?>
                    </div>
                    <div class="certificate-content">
                        <h3 class="certificate-title"><?= esc($certificate['name']) ?> Certificate</h3>
                        <p class="certificate-description"><?= esc($certificate['description']) ?></p>
                        <div class="date-item">
                            <i class="bi bi-calendar-check"></i>
                            <span class="date-label">Issued:</span>
                            <span><?= esc(date('F Y', strtotime($certificate['date_issued']))) ?></span>
                        </div>
                        <?php if (!empty($certificate['date_expiry'])): ?>
                            <div class="date-item">
                                <i class="bi bi-calendar-x"></i>
                                <span class="date-label">Expires:</span>
                                <span><?= esc(date('F Y', strtotime($certificate['date_expiry']))) ?></span>
                            </div>
                        <?php else: ?>
                            <div class="date-item">
                                <i class="bi bi-calendar-check"></i>
                                <span class="date-label">Expires:</span>
                                <span>No Expiry Date</span>
                            </div>
                        <?php endif; ?>
                        <div style="margin-top:.5rem;font-size:.85rem;">
                            <strong>Issuer:</strong> <?= esc($certificate['issued_by']) ?>
                        </div>
                        <?php $isExpired = !empty($certificate['date_expiry']) && strtotime($certificate['date_expiry']) < time(); ?>
                        <span class="certificate-status <?= $isExpired ? 'status-expired' : 'status-valid' ?>">
                            <?php if ($isExpired): ?>
                                <i class="bi bi-x-circle-fill"></i>Expired
                            <?php else: ?>
                                <i class="bi bi-check-circle-fill"></i>Valid
                            <?php endif; ?>
                        </span>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </div>
</section>

<!-- ═══ SKILLS ════════════════════════════════════════════ -->
<section id="skills" class="skills-section section-wrap">
    <div class="container">
        <div class="text-center">
            <span class="section-tag"><i class="bi bi-lightning-charge"></i> Capabilities</span>
            <h2 class="section-title">Technical <span class="accent">Skills</span></h2>
            <p class="section-description mx-auto">
                Technologies and tools I use to build robust backend systems
                and thoughtful user interfaces.
            </p>
        </div>
        <div class="row g-4">
            <div class="col-md-4 reveal">
                <div class="skill-card">
                    <h3 class="skill-category"><i class="bi bi-server"></i>Backend Development</h3>
                    <div class="text-center">
                        <span class="skill-badge">PHP</span>
                        <span class="skill-badge">CodeIgniter 4</span>
                        <span class="skill-badge">Python</span>
                        <span class="skill-badge">REST APIs</span>
                        <span class="skill-badge">Authentication &amp; Roles</span>
                        <span class="skill-badge">System Architecture</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 reveal">
                <div class="skill-card">
                    <h3 class="skill-category"><i class="bi bi-database"></i>Databases</h3>
                    <div class="text-center">
                        <span class="skill-badge">MySQL</span>
                        <span class="skill-badge">Relational Design</span>
                        <span class="skill-badge">Migrations</span>
                        <span class="skill-badge">Query Optimization</span>
                        <span class="skill-badge">Data Integrity</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 reveal">
                <div class="skill-card">
                    <h3 class="skill-category"><i class="bi bi-people"></i>Tools &amp; Collaboration</h3>
                    <div class="text-center">
                        <span class="skill-badge">Git</span>
                        <span class="skill-badge">GitHub</span>
                        <span class="skill-badge">Docker</span>
                        <span class="skill-badge">Linux Environments</span>
                        <span class="skill-badge">Team Collaboration</span>
                        <span class="skill-badge">Developer Community</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══ DESIGN EXPERIENCE ═════════════════════════════════ -->
<section id="experience" class="design-experience-section section-wrap">
    <div class="container">
        <div class="row g-5 align-items-start">
            <div class="col-lg-6">
                <span class="section-tag"><i class="bi bi-briefcase"></i> Background</span>
                <h2 class="section-title mb-2">Design <span class="accent">Experience</span></h2>
                <p class="section-description mb-4">
                    Roles, responsibilities, and hands-on design work
                    across personal and academic projects.
                </p>
                <div class="exp-card reveal">
                    <p class="exp-card-title">Backend Developer &amp; UI Designer</p>
                    <p class="exp-card-org"><i class="bi bi-folder2-open me-1"></i>Personal Projects &nbsp;·&nbsp; 2022 – Present</p>
                    <div class="exp-tags">
                        <span class="exp-tag">UI Design</span>
                        <span class="exp-tag">System Architecture</span>
                        <span class="exp-tag">Database Design</span>
                    </div>
                    <p class="exp-desc">
                        Designed and developed full-stack web applications from scratch,
                        owning both backend logic and front-end interfaces. Applied
                        wireframing and component-level design thinking to ensure each
                        screen served real user needs before writing code.
                    </p>
                </div>
                <div class="exp-card reveal">
                    <p class="exp-card-title">Open-Source Contributor &amp; Collaborator</p>
                    <p class="exp-card-org"><i class="bi bi-github me-1"></i>GitHub &nbsp;·&nbsp; github.com/magnaye-rp</p>
                    <div class="exp-tags">
                        <span class="exp-tag">Git Workflows</span>
                        <span class="exp-tag">Code Review</span>
                        <span class="exp-tag">Documentation</span>
                    </div>
                    <p class="exp-desc">
                        Collaborated with distributed teams via pull requests and issues,
                        writing clear documentation and readable commit histories.
                        Practiced iterative design thinking by continuously refining
                        interfaces based on peer feedback.
                    </p>
                </div>
                <div class="exp-card reveal">
                    <p class="exp-card-title">Capstone &amp; Academic Projects</p>
                    <p class="exp-card-org"><i class="bi bi-mortarboard me-1"></i>University &nbsp;·&nbsp; 2021 – 2023</p>
                    <div class="exp-tags">
                        <span class="exp-tag">Wireframing</span>
                        <span class="exp-tag">Prototyping</span>
                        <span class="exp-tag">User Research</span>
                    </div>
                    <p class="exp-desc">
                        Led interface design for team capstone projects on CodeIgniter 4
                        and MySQL. Conducted user interviews to validate design decisions,
                        produced lo-fi and hi-fi mockups, and iterated based on
                        stakeholder feedback.
                    </p>
                </div>
            </div>
            <div class="col-lg-6">
                <span class="section-tag"><i class="bi bi-grid-3x3-gap"></i> Skill Breakdown</span>
                <h2 class="section-title mb-2">Design <span class="accent">Capabilities</span></h2>
                <p class="section-description mb-4">
                    Key design disciplines I practice and the deliverables I produce.
                </p>
                <div class="skill-grid">
                    <div class="skill-grid-card reveal">
                        <p class="skill-grid-card-title"><i class="bi bi-pencil-square"></i>Wireframing</p>
                        <div>
                            <span class="skill-output-tag">Lo-fi Sketches</span>
                            <span class="skill-output-tag">Digital Wireframes</span>
                            <span class="skill-output-tag">Flow Diagrams</span>
                            <span class="skill-output-tag">Sitemaps</span>
                        </div>
                    </div>
                    <div class="skill-grid-card reveal">
                        <p class="skill-grid-card-title"><i class="bi bi-palette2"></i>UI Design</p>
                        <div>
                            <span class="skill-output-tag">Component Design</span>
                            <span class="skill-output-tag">Color Systems</span>
                            <span class="skill-output-tag">Typography</span>
                            <span class="skill-output-tag">Iconography</span>
                        </div>
                    </div>
                    <div class="skill-grid-card reveal">
                        <p class="skill-grid-card-title"><i class="bi bi-person-check"></i>UX Research</p>
                        <div>
                            <span class="skill-output-tag">User Interviews</span>
                            <span class="skill-output-tag">Personas</span>
                            <span class="skill-output-tag">Journey Maps</span>
                            <span class="skill-output-tag">Usability Tests</span>
                        </div>
                    </div>
                    <div class="skill-grid-card reveal">
                        <p class="skill-grid-card-title"><i class="bi bi-phone"></i>Prototyping</p>
                        <div>
                            <span class="skill-output-tag">Figma Prototypes</span>
                            <span class="skill-output-tag">Click-throughs</span>
                            <span class="skill-output-tag">Interactive Flows</span>
                            <span class="skill-output-tag">Dev Handoff</span>
                        </div>
                    </div>
                </div>
                <div class="mt-4 reveal">
                    <p style="font-size:.78rem;color:var(--text-muted);text-transform:uppercase;letter-spacing:.1em;font-weight:600;margin-bottom:.75rem;">Design Tools</p>
                    <div>
                        <?php foreach (['Figma','Adobe XD','Canva','draw.io','Balsamiq','Notion','Bootstrap 5','VS Code'] as $tool): ?>
                            <span class="skill-badge"><?= $tool ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══ DESIGN PROCESS ════════════════════════════════════ -->
<section id="process" class="design-process-section section-wrap">
    <div class="container">
        <div class="row g-5 align-items-start">
            <div class="col-lg-5">
                <span class="section-tag"><i class="bi bi-diagram-3"></i> Methodology</span>
                <h2 class="section-title mb-2">My Design <span class="accent">Process</span></h2>
                <p class="section-description">
                    How I approach every product — from understanding the user
                    problem to shipping a polished, tested interface.
                </p>
                <div style="display:flex;align-items:center;gap:.5rem;flex-wrap:wrap;margin-top:1.5rem;">
                    <?php
                    $flowSteps = [
                        ['num'=>'01','label'=>'Research'],
                        ['num'=>'02','label'=>'Ideate'],
                        ['num'=>'03','label'=>'Wireframe'],
                        ['num'=>'04','label'=>'Build'],
                    ];
                    foreach ($flowSteps as $i => $fs):
                    ?>
                    <div style="text-align:center;">
                        <div style="width:44px;height:44px;border-radius:50%;background:var(--orange-primary);display:flex;align-items:center;justify-content:center;font-family:'Syne',sans-serif;font-size:.7rem;font-weight:800;color:#fff;margin:0 auto .35rem;">
                            <?= $fs['num'] ?>
                        </div>
                        <span style="font-size:.7rem;color:var(--text-muted);font-weight:600;letter-spacing:.05em;"><?= $fs['label'] ?></span>
                    </div>
                    <?php if ($i < count($flowSteps)-1): ?>
                    <div style="flex:1;height:2px;background:linear-gradient(90deg,var(--orange-primary),var(--border-color));border-radius:2px;min-width:16px;margin-bottom:1.1rem;"></div>
                    <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="process-timeline">
                    <div class="process-step">
                        <div class="process-step-dot">01</div>
                        <div class="process-step-body">
                            <p class="process-step-title">User Problem</p>
                            <p class="process-step-desc">I start by asking: who is the user and what pain are they feeling? Through interviews, competitor analysis, and observing existing workflows, I define the core frustration before touching any design tool.</p>
                            <div class="process-outputs">
                                <span class="process-output">User Interviews</span>
                                <span class="process-output">Pain Point Map</span>
                                <span class="process-output">Competitor Audit</span>
                                <span class="process-output">User Personas</span>
                            </div>
                        </div>
                    </div>
                    <div class="process-step">
                        <div class="process-step-dot">02</div>
                        <div class="process-step-body">
                            <p class="process-step-title">Ideation</p>
                            <p class="process-step-desc">With the problem clearly defined, I generate ideas through sketching, crazy-eights, and collaborative brainstorming. I explore multiple directions before narrowing based on feasibility and user impact.</p>
                            <div class="process-outputs">
                                <span class="process-output">Sketches</span>
                                <span class="process-output">HMW Questions</span>
                                <span class="process-output">Feature Priority</span>
                                <span class="process-output">User Stories</span>
                            </div>
                        </div>
                    </div>
                    <div class="process-step">
                        <div class="process-step-dot">03</div>
                        <div class="process-step-body">
                            <p class="process-step-title">Wireframe</p>
                            <p class="process-step-desc">Lo-fi wireframes in Figma map out information architecture and screen flows without the distraction of color or imagery. This is where structural decisions are validated with stakeholders cheaply and quickly.</p>
                            <div class="process-outputs">
                                <span class="process-output">Lo-fi Wireframes</span>
                                <span class="process-output">IA Diagrams</span>
                                <span class="process-output">Navigation Flow</span>
                                <span class="process-output">Content Hierarchy</span>
                            </div>
                        </div>
                    </div>
                    <div class="process-step">
                        <div class="process-step-dot">04</div>
                        <div class="process-step-body">
                            <p class="process-step-title">Final Interface</p>
                            <p class="process-step-desc">Hi-fi mockups apply the design system: brand colors, typography, spacing tokens, and interactive states. I build reusable component libraries and hand off annotated specs for pixel-perfect implementation.</p>
                            <div class="process-outputs">
                                <span class="process-output">Hi-fi Mockups</span>
                                <span class="process-output">Design System</span>
                                <span class="process-output">Prototype Links</span>
                                <span class="process-output">Dev Handoff Specs</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══ SERVICES ══════════════════════════════════════════ -->
<section id="services" class="services-section section-wrap">
    <div class="container">
        <div class="text-center">
            <span class="section-tag"><i class="bi bi-stars"></i> Offerings</span>
            <h2 class="section-title">Services &amp; Skills <span class="accent">Offered</span></h2>
            <p class="section-description mx-auto">What I bring to your team or project — from pixels to production.</p>
        </div>
        <div class="services-grid">
            <?php
            $services = [
                ['icon'=>'bi-layout-text-window-reverse', 'name'=>'UI Design',       'desc'=>'Pixel-perfect interfaces built on solid design systems, responsive layouts, and strong visual hierarchy.'],
                ['icon'=>'bi-person-check',               'name'=>'UX Research',     'desc'=>'User interviews, personas, journey maps, and usability testing to ground every decision in real needs.'],
                ['icon'=>'bi-brush',                      'name'=>'Branding',        'desc'=>'Cohesive visual identities: color palettes, typography scales, iconography, and reusable style guides.'],
                ['icon'=>'bi-phone',                      'name'=>'Prototyping',     'desc'=>'Interactive Figma prototypes and click-through demos that validate ideas before a single line of code.'],
                ['icon'=>'bi-globe2',                     'name'=>'Web Design',      'desc'=>'Responsive web interfaces optimized across all screen sizes, with accessibility baked in from the start.'],
                ['icon'=>'bi-phone-flip',                 'name'=>'Mobile Design',   'desc'=>'Mobile-first UI patterns, thumb-friendly layouts, and native platform conventions for iOS and Android.'],
                ['icon'=>'bi-server',                     'name'=>'Backend Dev',     'desc'=>'Scalable PHP/Python APIs, MySQL database design, and clean CodeIgniter 4 MVC architecture.'],
                ['icon'=>'bi-box-seam',                   'name'=>'DevOps / Docker', 'desc'=>'Containerized environments, Git workflows, CI-ready project setups, and Linux server configuration.'],
            ];
            foreach ($services as $svc):
            ?>
            <div class="service-card reveal">
                <div class="service-icon"><i class="bi <?= $svc['icon'] ?>"></i></div>
                <p class="service-name"><?= $svc['name'] ?></p>
                <p class="service-desc"><?= $svc['desc'] ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ═══ CONTACT ═══════════════════════════════════════════ -->
<section id="contact" class="contact-section section-wrap">
    <div class="container">
        <div class="text-center">
            <span class="section-tag"><i class="bi bi-chat-dots"></i> Say Hello</span>
            <h2 class="section-title">Get In <span class="accent">Touch</span></h2>
            <p class="section-description mx-auto">
                I'm always open to discussing new projects, creative ideas,
                or opportunities to be part of your vision.
            </p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 d-flex">
                <div class="contact-card h-100 w-100">
                    <h3 class="contact-title">Let's Connect</h3>
                    <p class="contact-subtitle">Feel free to reach out through any of these platforms</p>
                    <div class="contact-item"><i class="bi bi-envelope-fill"></i><a href="mailto:magnaye.rp@gmail.com">magnaye.rp@gmail.com</a></div>
                    <div class="contact-item"><i class="bi bi-github"></i><a href="https://github.com/magnaye-rp" target="_blank">github.com/magnaye-rp</a></div>
                    <div class="contact-item"><i class="bi bi-linkedin"></i><a href="https://linkedin.com/in/magnaye-rp" target="_blank">linkedin.com/in/magnaye-rp</a></div>
                    <div class="contact-item"><i class="bi bi-facebook"></i><a href="https://www.facebook.com/bruhdacious" target="_blank">facebook.com/bruhdacious</a></div>
                    <div class="contact-item"><i class="bi bi-instagram"></i><a href="https://www.instagram.com/bruhdacious" target="_blank">instagram.com/bruhdacious</a></div>
                </div>
            </div>
            <div class="col-md-6 d-flex">
                <div class="contact-form h-100 w-100">
                    <h4 class="contact-title mb-1">Send Me a Message</h4>
                    <p class="contact-subtitle">I'll get back to you as soon as possible</p>
                    <form id="contactForm" action="/contact/send" method="POST">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
                            <label for="name">Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
                            <label for="email">Email Address</label>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="message" name="message" placeholder="Your Message" style="height:140px" required></textarea>
                            <label for="message">Message</label>
                        </div>
                        <button type="submit" class="btn-contact"><i class="bi bi-send-fill me-2"></i>Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══ FOOTER ════════════════════════════════════════════ -->
<footer class="site-footer">
    <div class="container">
        Designed &amp; built by <span>Ryan Paulo Magnaye</span> &nbsp;·&nbsp; <span><?= date('Y') ?></span>
    </div>
</footer>

<!-- ═══════════════════════════════════════════════════════════
     CHATBOT WIDGET
═══════════════════════════════════════════════════════════ -->

<!-- FAB -->
<button id="chat-fab" title="Chat with Ryan's AI" aria-label="Open chatbot">
    <i class="bi bi-robot"></i>
    <span class="fab-badge" id="fab-badge"></span>
</button>

<!-- Dark mode toggle -->
<button class="help-button" id="darkModeToggle" title="Toggle Dark Mode">
    <i class="bi bi-moon-stars-fill"></i>
</button>

<!-- Chat window -->
<div id="chat-window" role="dialog" aria-label="Chat with Ryan's AI">
    <div class="chat-header">
        <div class="chat-header-avatar">
            <div class="chat-header-avatar-inner">RP</div>
        </div>
        <div class="chat-header-info">
            <div class="chat-header-name">Ryan's AI Assistant</div>
            <div class="chat-header-status">
                <span class="dot dot-checking" id="status-dot"></span>
                <span id="status-text">Connecting…</span>
            </div>
        </div>
        <button class="chat-header-close" id="chat-close" title="Close"><i class="bi bi-x-lg"></i></button>
    </div>

    <div class="server-banner" id="server-banner">
        <i class="bi bi-wifi-off"></i>
        <span id="banner-text">Chatbot server is offline.</span>
        <a id="banner-retry" style="margin-left:auto;cursor:pointer">Retry</a>
    </div>

    <div class="ngrok-input-wrap" id="ngrok-wrap">
        <label>Enter your ngrok URL to connect</label>
        <div class="ngrok-input-row">
            <input type="url" id="ngrok-url" placeholder="https://xxxx-xx-xx.ngrok-free.app" autocomplete="off">
            <button class="ngrok-btn-connect" id="ngrok-connect">Connect</button>
        </div>
    </div>

    <div class="chat-messages" id="chat-messages">
        <div class="chat-welcome" id="chat-welcome">
            <div class="chat-welcome-icon">🤖</div>
            <h4>Ask me about Ryan!</h4>
            <p>I can answer questions about his skills, projects, experience, and how to get in touch.</p>
            <div class="chat-chips">
                <span class="chat-chip" data-msg="What are Ryan's skills?">💡 Skills</span>
                <span class="chat-chip" data-msg="Tell me about Ryan's projects">🚀 Projects</span>
                <span class="chat-chip" data-msg="How can I contact Ryan?">📬 Contact</span>
                <span class="chat-chip" data-msg="Is Ryan available for hire?">💼 Hire</span>
            </div>
        </div>
    </div>

    <div class="chat-input-bar">
        <textarea id="chat-input" rows="1" placeholder="Ask me anything…" disabled></textarea>
        <button id="chat-send" disabled title="Send"><i class="bi bi-send-fill"></i></button>
    </div>
</div>

<!-- Certificate Modal -->
<div class="certificate-modal" id="certificateModal">
    <div class="certificate-modal-content">
        <button class="certificate-modal-close" id="closeCertificateModal" title="Close"><i class="bi bi-x"></i></button>
        <img src="" alt="Certificate" class="certificate-modal-image" id="certificateModalImage">
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
'use strict';

/* ══════════════════════════════════════════════════════════
   CHATBOT — ngrok-aware server detection
══════════════════════════════════════════════════════════ */
const Chat = (() => {
    let serverUrl    = '';
    let serverOnline = false;
    let checking     = false;
    let checkTimer   = null;

    const fab        = document.getElementById('chat-fab');
    const fabBadge   = document.getElementById('fab-badge');
    const win        = document.getElementById('chat-window');
    const closeBtn   = document.getElementById('chat-close');
    const messages   = document.getElementById('chat-messages');
    const input      = document.getElementById('chat-input');
    const sendBtn    = document.getElementById('chat-send');
    const banner     = document.getElementById('server-banner');
    const bannerText = document.getElementById('banner-text');
    const bannerRetry= document.getElementById('banner-retry');
    const statusDot  = document.getElementById('status-dot');
    const statusText = document.getElementById('status-text');
    const ngrokWrap  = document.getElementById('ngrok-wrap');
    const ngrokInput = document.getElementById('ngrok-url');
    const ngrokBtn   = document.getElementById('ngrok-connect');
    const welcome    = document.getElementById('chat-welcome');

    const chatEndpoint   = () => serverUrl ? `${serverUrl}/chat`   : '/chat';
    const healthEndpoint = () => serverUrl ? `${serverUrl}/health` : '/health';

    function setStatus(state) {
        statusDot.className = 'dot';
        if (state === 'online') {
            statusDot.classList.add('dot-online');
            statusText.textContent = 'Online · Ready to chat';
            banner.className = 'server-banner';
            ngrokWrap.classList.remove('show');
            input.disabled = false;
            sendBtn.disabled = false;
            fabBadge.classList.add('show');
            serverOnline = true;
        } else if (state === 'offline') {
            statusDot.classList.add('dot-offline');
            statusText.textContent = 'Server offline';
            banner.className = 'server-banner offline';
            bannerText.textContent = serverUrl ? `Cannot reach ${serverUrl}.` : 'Chatbot server is offline.';
            ngrokWrap.classList.add('show');
            input.disabled = true;
            sendBtn.disabled = true;
            fabBadge.classList.remove('show');
            serverOnline = false;
        } else {
            statusDot.classList.add('dot-checking');
            statusText.textContent = 'Checking server…';
            banner.className = 'server-banner checking';
            bannerText.textContent = 'Checking server status…';
            input.disabled = true;
            sendBtn.disabled = true;
            serverOnline = false;
        }
    }

    async function checkServer() {
        if (checking) return;
        checking = true;
        setStatus('checking');
        try {
            const ctrl = new AbortController();
            const tid  = setTimeout(() => ctrl.abort(), 4000);
            const res  = await fetch(healthEndpoint(), { signal: ctrl.signal });
            clearTimeout(tid);
            if (res.ok) { setStatus('online'); scheduleCheck(30000); }
            else        { setStatus('offline'); scheduleCheck(15000); }
        } catch {
            setStatus('offline');
            scheduleCheck(15000);
        } finally {
            checking = false;
        }
    }

    function scheduleCheck(ms) {
        clearTimeout(checkTimer);
        checkTimer = setTimeout(checkServer, ms);
    }

    ngrokBtn.addEventListener('click', () => {
        let url = ngrokInput.value.trim().replace(/\/$/, '');
        if (!url) return;
        if (!/^https?:\/\//i.test(url)) url = 'https://' + url;
        serverUrl = url;
        try { localStorage.setItem('chatbot_server_url', serverUrl); } catch {}
        checkServer();
    });

    ngrokInput.addEventListener('keydown', e => { if (e.key === 'Enter') ngrokBtn.click(); });
    bannerRetry.addEventListener('click', checkServer);

    let isOpen     = false;
    let hasGreeted = false;

    fab.addEventListener('click', () => {
        isOpen = !isOpen;
        win.classList.toggle('open', isOpen);
        fab.querySelector('i').className = isOpen ? 'bi bi-x-lg' : 'bi bi-robot';
        if (isOpen) {
            fabBadge.classList.remove('show');
            input.focus();
            if (!hasGreeted && serverOnline) {
                hasGreeted = true;
                setTimeout(() => botSend('Hey there! 👋 I\'m Ryan\'s AI assistant. Ask me anything about his skills, projects, or how to get in touch!'), 600);
            }
        }
    });

    closeBtn.addEventListener('click', () => {
        isOpen = false;
        win.classList.remove('open');
        fab.querySelector('i').className = 'bi bi-robot';
    });

    document.querySelectorAll('.chat-chip').forEach(chip => {
        chip.addEventListener('click', () => {
            if (!serverOnline) return;
            sendMessage(chip.dataset.msg);
        });
    });

    input.addEventListener('input', () => {
        input.style.height = 'auto';
        input.style.height = Math.min(input.scrollHeight, 90) + 'px';
    });
    input.addEventListener('keydown', e => { if (e.key === 'Enter' && !e.shiftKey) { e.preventDefault(); sendMessage(); } });
    sendBtn.addEventListener('click', () => sendMessage());

    function appendMsg(content, role, confidence) {
        if (welcome) welcome.style.display = 'none';
        const row  = document.createElement('div');
        row.className = `msg-row ${role}`;
        const av   = document.createElement('div');
        av.className = `msg-av ${role === 'user' ? 'user' : 'bot'}`;
        av.textContent = role === 'user' ? 'You' : 'RP';
        const bWrap = document.createElement('div');
        const b    = document.createElement('div');
        b.className = `bubble ${role === 'user' ? 'user' : 'bot'}`;
        b.textContent = content;
        bWrap.appendChild(b);
        if (role === 'bot' && typeof confidence === 'number') {
            const pill = document.createElement('div');
            const pct  = Math.round(confidence * 100);
            const cls  = pct >= 70 ? 'conf-high' : pct >= 45 ? 'conf-mid' : 'conf-low';
            pill.className = `conf-pill ${cls}`;
            pill.innerHTML = `<i class="bi bi-stars"></i>${pct}% confident`;
            bWrap.appendChild(pill);
        }
        row.appendChild(av);
        row.appendChild(bWrap);
        messages.appendChild(row);
        messages.scrollTop = messages.scrollHeight;
        return row;
    }

    function showTyping() {
        const row = document.createElement('div');
        row.className = 'msg-row bot';
        row.id = 'typing-row';
        row.innerHTML = `<div class="msg-av bot">RP</div><div class="typing-bubble"><span class="t-dot"></span><span class="t-dot"></span><span class="t-dot"></span></div>`;
        messages.appendChild(row);
        messages.scrollTop = messages.scrollHeight;
    }

    function removeTyping() {
        const t = document.getElementById('typing-row');
        if (t) t.remove();
    }

    function botSend(text, confidence) { appendMsg(text, 'bot', confidence); }

    async function sendMessage(override) {
        if (!serverOnline) return;
        const text = (override || input.value).trim();
        if (!text) return;
        input.value = '';
        input.style.height = 'auto';
        input.disabled = true;
        sendBtn.disabled = true;
        appendMsg(text, 'user');
        showTyping();
        try {
            const ctrl = new AbortController();
            const tid  = setTimeout(() => ctrl.abort(), 10000);
            const res  = await fetch(chatEndpoint(), {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ message: text }),
                signal: ctrl.signal,
            });
            clearTimeout(tid);
            const data = await res.json();
            removeTyping();
            if (res.ok && data.response) { botSend(data.response, data.confidence); }
            else { botSend('Sorry, something went wrong on my end. Try again!'); }
        } catch (err) {
            removeTyping();
            const isTimeout = err.name === 'AbortError';
            botSend(isTimeout
                ? 'The server took too long to respond. It might have gone offline.'
                : 'I couldn\'t reach the server. It may have gone offline.');
            setTimeout(checkServer, 1500);
        } finally {
            if (serverOnline) { input.disabled = false; sendBtn.disabled = false; input.focus(); }
        }
    }

    function init() {
        try {
            const saved = localStorage.getItem('chatbot_server_url');
            if (saved) { serverUrl = saved; ngrokInput.value = saved; }
        } catch {}
        checkServer();
    }

    return { init };
})();

/* ══════════════════════════════════════════════════════════
   PORTFOLIO JS
══════════════════════════════════════════════════════════ */

document.querySelectorAll('a[href^="#"]').forEach(a => {
    a.addEventListener('click', e => {
        e.preventDefault();
        const target = document.querySelector(a.getAttribute('href'));
        if (target) window.scrollTo({ top: target.offsetTop - 75, behavior: 'smooth' });
    });
});

const sections = document.querySelectorAll('section[id]');
const navLinks  = document.querySelectorAll('.nav-link');
window.addEventListener('scroll', () => {
    let current = '';
    sections.forEach(s => { if (scrollY >= s.offsetTop - 140) current = s.id; });
    navLinks.forEach(l => l.classList.toggle('active', l.getAttribute('href') === `#${current}`));
}, { passive: true });

const revealObserver = new IntersectionObserver(entries => {
    entries.forEach(e => { if (e.isIntersecting) e.target.classList.add('visible'); });
}, { threshold: 0.12 });
document.querySelectorAll('.reveal').forEach(el => revealObserver.observe(el));

const stepObserver = new IntersectionObserver(entries => {
    entries.forEach((e, i) => {
        if (e.isIntersecting) setTimeout(() => e.target.classList.add('visible'), i * 120);
    });
}, { threshold: 0.1 });
document.querySelectorAll('.process-step').forEach(el => stepObserver.observe(el));

const toggle     = document.getElementById('darkModeToggle');
const toggleIcon = document.querySelector('#darkModeToggle i');
const favicon    = document.getElementById('favicon');

function updateFavicon() {
    if (!favicon) return;
    favicon.href = document.body.classList.contains('light-mode')
        ? '<?= base_url('favicon-light.ico') ?>'
        : '<?= base_url('favicon-dark.ico') ?>';
}

toggle.addEventListener('click', () => {
    document.body.classList.toggle('light-mode');
    const isLight = document.body.classList.contains('light-mode');
    toggleIcon.className = isLight ? 'bi bi-sun-fill' : 'bi bi-moon-stars-fill';
    updateFavicon();
    localStorage.setItem('theme', isLight ? 'light' : 'dark');
});
if (localStorage.getItem('theme') === 'light') {
    document.body.classList.add('light-mode');
    toggleIcon.className = 'bi bi-sun-fill';
}
updateFavicon();

document.getElementById('contactForm').addEventListener('submit', async function(e) {
    e.preventDefault();
    const btn  = this.querySelector('.btn-contact');
    const orig = btn.innerHTML;
    const data = new FormData(this);
    const name    = data.get('name').trim();
    const email   = data.get('email').trim();
    const message = data.get('message').trim();
    if (!name || !email || !message) { showNotif('Please fill in all fields.', 'error'); return; }
    if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) { showNotif('Please enter a valid email.', 'error'); return; }
    btn.disabled = true;
    btn.innerHTML = '<i class="bi bi-hourglass-split me-2"></i>Sending…';
    try {
        const res    = await fetch('/contact/send', { method: 'POST', body: data, headers: { 'X-Requested-With': 'XMLHttpRequest' } });
        const result = await res.json();
        if (result.success) { this.reset(); showNotif(result.message, 'success'); }
        else                { showNotif(result.message, 'error'); }
    } catch { showNotif('Sorry, something went wrong. Please try again.', 'error'); }
    finally   { btn.disabled = false; btn.innerHTML = orig; }
});

function showNotif(message, type) {
    document.querySelector('.form-notification')?.remove();
    const n = document.createElement('div');
    n.className = `form-notification alert alert-${type === 'success' ? 'success' : 'danger'} alert-dismissible fade show`;
    n.style.cssText = 'position:fixed;top:90px;right:20px;z-index:9999;min-width:300px;box-shadow:0 4px 20px rgba(0,0,0,.15)';
    n.innerHTML = `${message}<button type="button" class="btn-close" data-bs-dismiss="alert"></button>`;
    document.body.appendChild(n);
    setTimeout(() => n.parentNode && n.remove(), 5000);
}

function initCertModal() {
    const modal    = document.getElementById('certificateModal');
    const modalImg = document.getElementById('certificateModalImage');
    const closeM   = document.getElementById('closeCertificateModal');
    document.querySelectorAll('.certificate-image').forEach(img => {
        img.addEventListener('click', function() {
            modalImg.src = this.src; modalImg.alt = this.alt;
            modal.classList.add('show'); document.body.style.overflow = 'hidden';
        });
    });
    const closeModal = () => {
        modal.classList.remove('show'); document.body.style.overflow = '';
        setTimeout(() => { if (!modal.classList.contains('show')) modalImg.src = ''; }, 300);
    };
    closeM.addEventListener('click', closeModal);
    modal.addEventListener('click', e => { if (e.target === modal) closeModal(); });
    document.addEventListener('keydown', e => { if (e.key === 'Escape' && modal.classList.contains('show')) closeModal(); });
}

function initSeeMoreProjects() {
    const btn = document.getElementById('seeMoreProjects');
    const box = document.getElementById('additionalProjects');
    if (!btn || !box) return;
    btn.addEventListener('click', () => {
        box.style.display = 'flex'; box.style.flexWrap = 'wrap';
        btn.closest('.see-more-wrap').style.display = 'none';
        box.querySelectorAll('.reveal').forEach(el => revealObserver.observe(el));
        box.scrollIntoView({ behavior: 'smooth', block: 'start' });
    });
}

function initSeeMoreCerts() {
    const btn = document.getElementById('seeMoreCertificates');
    const box = document.getElementById('additionalCertificates');
    if (!btn || !box) return;
    btn.addEventListener('click', () => {
        box.style.display = 'flex'; box.style.flexWrap = 'wrap';
        btn.closest('.see-more-wrap').style.display = 'none';
        setTimeout(initCertModal, 100);
        box.querySelectorAll('.reveal').forEach(el => revealObserver.observe(el));
        box.scrollIntoView({ behavior: 'smooth', block: 'start' });
    });
}

document.addEventListener('DOMContentLoaded', () => {
    initCertModal();
    initSeeMoreProjects();
    initSeeMoreCerts();
    Chat.init();
});
</script>

<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Person",
    "name": "Ryan Paulo Magnaye",
    "url": "https://rpmagnaye.networq.online",
    "sameAs": [
        "https://github.com/magnaye-rp",
        "https://www.linkedin.com/in/magnaye-rp",
        "https://www.facebook.com/bruhdacious",
        "https://www.instagram.com/bruhdacious"
    ],
    "jobTitle": "Backend Software Developer & UI/UX Designer"
}
</script>

</body>
</html>