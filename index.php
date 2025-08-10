<?php
session_cache_limiter('');
session_start();
$success = $_SESSION['success'] ?? null;
$error = $_SESSION['error'] ?? null;
unset($_SESSION['success'], $_SESSION['error']);
session_write_close();
header('Cache-Control: private, max-age=600');
header('Vary: Accept-Encoding');
?>
<!DOCTYPE html>
<html lang="sr">
<head>
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-WXPCLL1PLT"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-WXPCLL1PLT');
  </script>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <title>Moja Zemlja - Investiranje u poljoprivredu</title>
  <meta name="description" content="Platforma za investiranje u poljoprivredu: orahe, borovnice, maline, lešnike... Ulaganje u 1 hektar ili u jedno stablo.">
  <meta name='robots' content='index, follow' />
  <link rel="preconnect" href="https://mojazemlja.rs" crossorigin>
  <link rel="dns-prefetch" href="https://mojazemlja.rs">
  <meta property="og:title" content="Moja Zemlja - Investiranje u poljoprivredu. Jednostavno. Pasivno." />
  <meta property="og:description" content="Platforma za investiranje u poljoprivredu: orahe, borovnice, maline, lešnike... Ulaganje u 1 hektar ili u jedno stablo." />
  <meta property="og:image" content="https://mojazemlja.rs/img/moja-zemlja-cover.jpg" />
  <meta property="og:url" content="https://mojazemlja.rs/" />
  <meta property="og:type" content="website" />
  <meta property="og:image:width" content="1200" />
  <meta property="og:image:height" content="630" />
  <meta property="og:site_name" content="Moja Zemlja">
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Moja Zemlja - Investiranje u poljoprivredu. Jednostavno. Pasivno." />
  <meta name="twitter:description" content="Platforma za investiranje u poljoprivredu: orahe, borovnice, maline, lešnike... Ulaganje u 1 hektar ili u jedno stablo." />
  <meta name="twitter:image" content="https://mojazemlja.rs/img/moja-zemlja-cover.jpg" />
  <style>img:is([sizes="auto" i], [sizes^="auto," i]) { contain-intrinsic-size: 3000px 1500px }</style>
  <link rel="preload" href="/fonts/Herbarium.otf" as="font" type="font/otf" crossorigin>
  <link rel="preload" as="image" href="/img/moja-zemlja-bg-mobile.webp" type="image/webp" fetchpriority="high" media="(max-width: 768px)">
  <link rel="preload" as="image" href="/img/moja-zemlja-bg.webp" type="image/webp" media="(min-width: 769px)">
  <link rel="preconnect" href="https://www.googletagmanager.com" crossorigin>
  <link rel="preconnect" href="https://www.google-analytics.com" crossorigin>
  <style>
    @font-face {
      font-family: 'Herbarium';
      src: url('/fonts/Herbarium.otf') format('opentype');
      font-weight: 400;
      font-style: normal;
      font-display: swap;
    }
    :root {
      --main-bg: #fff;
      --main-color: #2C2C2C;
      --accent: #EECE38;
      --accent-hover: #EECE38;
      --font-main: 'Manrope', 'Arial', 'Helvetica', sans-serif;
      --header-height: 96px;
      --header-height-mobile: 84px;
      --menu-hover: var(--accent-hover);
      --btn-border: 2px solid var(--accent);
    }
    html, body {
      margin: 0;
      padding: 0;
      background: var(--main-bg);
      font-family: var(--font-main);
      color: #222;
      scroll-behavior: smooth;
      font-weight: 400;
      line-height: 1.75;
      overflow-x: hidden;
    }
    /* Offset in-page anchors for fixed header */
    html { scroll-padding-top: var(--header-height); }
    @media (max-width: 700px) { html { scroll-padding-top: var(--header-height-mobile); } }
    header {
      background: transparent;
      color: #fff;
      height: var(--header-height);
      min-height: var(--header-height);
      box-shadow: none;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0 0.5em;
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      z-index: 1000;
      transition: height 0.2s, background-color 0.2s, box-shadow 0.2s;
    }
    @media (min-width: 701px) {
      header.is-scrolled {
        background: #000;
        box-shadow: 0 2px 8px #0002;
      }
    }
    .logo {
      display: flex;
      align-items: center;
      padding-left: 1em;
    }
    .logo img {
      width: auto;
      height: auto;
      max-height: 66px;
      margin-right: 0.7em;
    }
    .logo span {
      font-size: 2em;
      font-weight: bold;
      letter-spacing: 1px;
    }
    nav {
      padding-right: 2em;
      display: flex;
      align-items: center;
      gap: 0.2em;
      position: relative;
      z-index: 12;
    }
    .nav-list {
      display: flex;
      align-items: center;
      gap: 0.2em;
      list-style: none;
      margin: 0;
      padding: 0;
    }
    .nav-list > li {
      position: relative;
    }
    .nav-list > li > a {
      color: #fff;
      text-decoration: none;
      font-weight: 500;
      transition: color 0.2s, background 0.2s;
      font-size: 1.05em;
      padding: 0.8em 1.2em;
      border-radius: 4px;
      display: block;
    }

    .nav-list > li:hover > a,
    .nav-list > li:focus-within > a {
      text-decoration: underline;
      text-decoration-color: var(--accent);
      text-decoration-thickness: 2px;
      text-underline-offset: 10px;
      background: transparent;
      color: inherit;
    }
    .nav-list > li .submenu {
      display: none;
      position: absolute;
      left: 0;
      top: 100%;
      background: var(--main-color);
      min-width: 220px;
      box-shadow: 0 4px 16px #0003;
      border-radius: 0 0 10px 10px;
      z-index: 11;
      flex-direction: column;
      padding: 0.3em 0;
      transition: opacity 0.2s;
    }
    .nav-list > li:hover .submenu,
    .nav-list > li:focus-within .submenu {
      display: flex;
    }
    .submenu li a {
      color: #fff;
      padding: 0.7em 1.2em;
      text-decoration: none;
      font-size: 1em;
      border-radius: 0;
      transition: background 0.2s, color 0.2s;
    }

    .submenu li a:hover,
    .submenu li a:focus {
      text-decoration: underline;
      text-decoration-color: var(--accent);
      text-decoration-thickness: 2px;
      text-underline-offset: 10px;
      background: transparent;
      color: inherit;
    }

    /* Burger styles */
    .burger {
      display: none;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      width: 44px;
      height: 44px;
      cursor: pointer;
      margin-right: 1em;
      background: none;
      border: none;
      outline: none;
      z-index: 20;
    }
    .burger span {
      display: block;
      width: 28px;
      height: 4px;
      background: #fff;
      margin: 5px 0;
      border-radius: 2px;
      transition: 0.3s;
    }
    .mobile-nav {
      display: none;
      position: absolute;
      top: var(--header-height-mobile);
      left: 0;
      width: 100%;
      background: var(--main-color);
      flex-direction: column;
      align-items: center;
      box-shadow: 0 2px 8px #0002;
      z-index: 19;
      padding-bottom: 2em;
    }
    .mobile-nav.open {
      display: flex;
    }

    body.nav-open {
      overflow: hidden;
    }
    .mobile-nav ul {
      list-style: none;
      padding: 0;
      margin: 0;
      width: 100%;
    }
    .mobile-nav li {
      width: 100%;
      text-align: center;
      position: relative;
    }
    .mobile-nav > ul > li > a {
      color: #fff;
      text-decoration: none;
      font-size: 1.2em;
      padding: 1em;
      border-bottom: 1px solid #444;
      width: 100%;
      display: block;
      transition: background 0.2s, color 0.2s;
    }

    .mobile-nav > ul > li > a:hover,
    .mobile-nav > ul > li > a:focus {
      text-decoration: underline;
      text-decoration-color: var(--accent);
      text-decoration-thickness: 2px;
      text-underline-offset: 10px;
      background: transparent;
      color: inherit;
    }
    .mobile-nav .submenu-mobile {
      display: none;
      flex-direction: column;
      background: var(--main-color);
    }
    .mobile-nav li.open .submenu-mobile {
      display: flex;
    }
    .mobile-nav .submenu-mobile li a {
      color: #fff;
      padding: 0.9em 1.2em;
      border-bottom: 1px solid #444;
      font-size: 1.1em;
      transition: background 0.2s, color 0.2s;
      text-align: left;
      width: 100%;
      display: block;
    }
    .mobile-nav .submenu-mobile li a:hover,
    .mobile-nav .submenu-mobile li a:focus {
      text-decoration: underline;
      text-decoration-color: var(--accent);
      text-decoration-thickness: 2px;
      text-underline-offset: 10px;
      background: transparent;
      color: inherit;
    }

    /* HERO SECTION */
    .hero {
      background: url('/img/moja-zemlja-bg-mobile.webp') center/cover no-repeat;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      align-items: flex-start;
      justify-content: center;
      color: #fff;
      text-shadow: 0 2px 12px #0009;
      position: relative;
      background-color: #1a1a1a;
    }
    @media (min-width: 769px) {
      .hero {
        background: url('/img/moja-zemlja-bg.webp') center/cover no-repeat;
      }
    }
    .hero::after {
      content: none;
    }
    .hero-content {
      position: relative;
      z-index: 1;
      padding-top: var(--header-height);
      text-align: left;
      max-width: 1024px;
      width: 100%;
      margin: 0 auto;
      padding: 1em;
      box-sizing: border-box;
    }
    @media (max-width: 700px) {
      .hero-content { padding-top: var(--header-height-mobile); }
    }
    .hero h2 {
      font-size: 80px;
      margin-bottom: 0.3em;
      font-family: 'Herbarium', Arial, Helvetica, sans-serif;
    }
    .hero h1.subheading {
      font-size: 36px;
      margin: 0 0 0.1em;
      font-family: 'Herbarium', Arial, Helvetica, sans-serif;
    }
    .hero p {
      font-size: 1.3em;
      margin-bottom: 1em;
    }
    .btn-main {
      background: var(--accent);
      color: #000;
      border: var(--btn-border);
      padding: 0.8em 2em;
      font-size: 1.1em;
      border-radius: 4px;
      cursor: pointer;
      box-shadow: 0 2px 8px #0002;
      transition:
        background 0.25s,
        color 0.25s,
        border 0.25s,
        transform 0.5s cubic-bezier(0.59, 0.03, 0.2, 1);
      text-decoration: none;
      margin: 0.7em auto;
      display: inline-block;
    }
    .hero .btn-main { margin: 0.7em 0; }
    .hero .btn-main + .btn-main { margin-left: 20px; }
    .btn-main:hover, .btn-main:focus {
      background: #fff;
      color: #222;
      border: 2px solid var(--accent);
      /* transform removed to prevent size change */
    }
    .btn-main.is-disabled,
    .btn-main[aria-disabled="true"] {
      pointer-events: none;
      background: #E8E2A5;
      color: #000;
      border: 2px solid #E8E2A5;
      opacity: 1;
      cursor: not-allowed;
    }
    /* Simple form alignment */
    .simple-form input[type="email"] {
      margin-bottom: 0 !important;
      height: 44px;
      font-size: 16px;
      border-radius: 6px;
      box-sizing: border-box;
    }
        .simple-form .btn-main {
       width: 100%;
       display: inline-flex;
       align-items: center;
       justify-content: center;
       margin: 0;
       padding: 12px 16px;
       font-size: 16px;
       border-radius: 6px;
       height: 44px;
       box-sizing: border-box;
     }
    .section {
      max-width: 1024px;
      margin: 2em auto;
      padding: 1em;
      background: #fff;
      border-radius: 10px;
      border: none;
      box-shadow: none;
      content-visibility: auto;
      contain-intrinsic-size: 1000px;
    }
    .section h2 {
      color: var(--main-color);
      margin-top: 0;
      font-size: 2em;
      font-family: var(--font-main);
    }
    #aktivna-ponuda h2,
    #market h2 {
      color: var(--main-color);
      font-family: 'Herbarium', Arial, Helvetica, sans-serif;
    }
    .features {
      display: flex;
      gap: 2em;
      flex-wrap: wrap;
      justify-content: center;
      margin-top: 1.5em;
    }
    .feature {
      background: #fff;
      border-radius: 10px;
      padding: 1em 1.2em;
      width: 260px;
      text-align: center;
      box-shadow: 0 1px 4px #0001;
      transition:
        box-shadow 0.2s,
        background 0.25s,
        color 0.25s,
        transform 0.5s cubic-bezier(0.59, 0.03, 0.2, 1);
      color: #222;
      font-weight: 500;
    }
    .feature:hover, .feature:focus {
      transform: none;
    }
    .feature img, .feature svg {
      width: 64px;
      height: 64px;
      margin-bottom: 0.5em;
    }
    .feature-title {
      font-weight: bold;
      color: var(--main-color);
      margin-bottom: 0.5em;
    }
    .articles {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
      gap: 1.5em;
      margin-top: 2em;
    }
    .article {
      background: #fff;
      border-radius: 10px;
      box-shadow: 0 1px 4px #0001;
      overflow: hidden;
      display: flex;
      flex-direction: column;
      transition:
        box-shadow 0.2s,
        background 0.25s,
        color 0.25s,
        transform 0.5s cubic-bezier(0.59, 0.03, 0.2, 1);
    }
    .article:hover, .article:focus {
      transform: none;
      box-shadow: 0 4px 16px #2C2C2C1a;
    }
    .article img {
      width: 100%;
      height: 160px;
      object-fit: cover;
    }
    .article-content {
      padding: 1em;
      flex: 1;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }
    .article-title {
      font-size: 1.1em;
      color: var(--main-color);
      font-weight: bold;
      margin-bottom: 0.6em;
    }
    .article-desc {
      font-size: 0.98em;
      color: #333;
      margin-bottom: 0.7em;
    }
    .article-link {
      align-self: flex-start;
      color: var(--main-color);
      text-decoration: underline;
      font-weight: 500;
      font-size: 0.98em;
    }

    .section p,
    .article .article-desc,
    .feature div:not(.feature-title) {
      font-size: 20px;
      box-sizing: border-box;
      color: #222;
      font-family: Manrope, Arial, Helvetica, sans-serif;
      font-style: normal;
      font-weight: 400;
      letter-spacing: normal;
      line-height: 37.5px;
      margin: 0;
      text-transform: none;
      word-spacing: 0px;
    }
    
          footer {
        background: var(--main-color);
        color: #fff;
        text-align: center;
        margin-top: 3em;
        font-size: 1em;
        min-height: 420px;
        padding: 3em 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 0.8em;
      }

      .footer-has-bg {
        background: url("https://mojazemlja.rs/img/moja-zemlja-footer.jpg") center center / cover no-repeat, var(--main-color);
      }

      .footer-logo {
        height: 56px;
        width: auto;
      }
      .footer-text {
        opacity: 0.95;
      }

    @media (max-width: 900px) {
      header {
        height: var(--header-height-mobile);
        min-height: var(--header-height-mobile);
      }
      .logo img {
        max-height: 50px;
      }
      .logo span {
        font-size: 1.4em;
      }
      .features { flex-direction: column; align-items: center; }
      .feature { width: 90%; }
      .section { margin: 1em; }
    }
    @media (max-width: 700px) {
      nav {
        display: none;
      }
      .burger {
        display: flex;
      }
      header {
        height: var(--header-height-mobile);
        min-height: var(--header-height-mobile);
        background: #fff;
        color: #222;
        box-shadow: 0 2px 8px #0001;
      }
      header.is-scrolled {
        background: #fff;
        color: #222;
        box-shadow: 0 2px 8px #0001;
      }
      header.is-scrolled .burger span {
        background: #222;
      }
      .mobile-nav {
        top: var(--header-height-mobile);
      }
      h1, h2, h3, h4, h5, h6 { line-height: 1; }
      .burger span {
        background: #222;
      }
    }
    @media (max-width: 600px) {
      .hero {
        padding-top: 0;
      }
      .hero h1 { font-size: 1em; }
      .hero h2 { font-size: 2em; }
      .hero h1.subheading { font-size: 1.2em; }
      .features { gap: 1em; }
      .section { padding: 1em; }
      .articles { gap: 0.7em; }
      .logo img {
        max-height: 40px;
      }
      .section p,
      .article .article-desc,
      .feature div:not(.feature-title),
      .hero p {
        line-height: 20px;
      }
      .hero .btn-main + .btn-main { margin-left: 0; margin-top: 16px; }
      
      /* Mobile styles for the footer signup box */
      #ponuda {
        margin: 0 16px 2em !important;
        padding: 24px 20px 20px !important;
      }
    }
  </style>
</head>
<body>
  <header>
         <div class="logo">
             <picture>
               <source media="(max-width: 700px)" srcset="https://mojazemlja.rs/img/logo-black.png">
               
               <img id="site-logo" src="https://mojazemlja.rs/img/moja-zemlja-logo.png" alt="Moja Zemlja" height="66" decoding="async" />
             </picture>
    </div>
    <nav>
      <ul class="nav-list">
        <li><a href="#home">Početna</a></li>
        <li><a href="#market">Kupi od drugih investitora</a></li>
        <li><a href="#aktivna-ponuda">Investiraj u novu plantažu</a></li>
      </ul>
    </nav>
    <button class="burger" id="burger" aria-label="Otvori meni" aria-expanded="false" aria-controls="mobile-nav">
      <span></span>
      <span></span>
      <span></span>
    </button>
    <div class="mobile-nav" id="mobile-nav">
      <ul>
        <li><a href="#home" onclick="closeMobileNav()">Početna</a></li>
        <li><a href="#market" onclick="closeMobileNav()">Kupi od drugih investitora</a></li>
        <li><a href="#aktivna-ponuda" onclick="closeMobileNav()">Investiraj u novu plantažu</a></li>
      </ul>
    </div>
  </header>

  <section class="hero" id="home">
    <div class="hero-content">
      <h1 style="font-size: 1.5em; margin-bottom: 0.5em;">Moja Zemlja</h1>
      <h2>Zemlja koja zarađuje</h2>
      <p>Moja Zemlja je platforma koja nudi investiranje u poljoprivredu potpuno jednostavno i pasivno.</p>
      <p>Bilo da se interesuješ za ulaganje u novu plantažu ili želiš da kupiš stabla od drugih investitora - na pravom si mestu!</p>
      <a class="btn-main" href="#market">Kupi od drugih investitora</a>
      <a class="btn-main" href="#aktivna-ponuda">Investiraj u novu plantažu</a>
    </div>
  </section>

  <section class="section" id="pozadina">
    <p>
      Partneri sa kojima sarađuje Moja Zemlja imaju iza sebe više od 90 hektara aktivnih zasada pod orahom, čime donose bogato znanje i višegodišnje iskustvo u uzgoju ove kulture. Ovi iskusni poljoprivrednici i stručnjaci iz agronomije brinu o sadnji, održavanju i berbi umesto tebe, koristeći proverene agrotehničke metode i mehanizaciju. Njihov rad i rezultati garantuju da je svako stablo zasađeno u skladu sa najvišim standardima, što investitorima donosi sigurnost i stabilan prinos. Kroz saradnju sa tim ljudima, Moja Zemlja ti omogućava da ulažeš u provereno uspešne plantaže, bez potrebe da se sam baviš poljoprivredom.
    </p>
  </section>

  <section class="section" id="aktivna-ponuda">
    <h2>Aktivna ponuda</h2>
    <h3 style="margin-top:0.5em">Uloži u plantažu oraha i ostvari preko 1.000 evra mesečno</h3>
    <p>
      Moja Zemlja je platforma koja nudi investiranje u poljoprivredu potpuno jednostavno i pasivno. Možeš uložiti u ceo hektar – zemlja postaje tvoja – ili u manji deo, recimo, samo jedno stablo određene biljke.
    </p>
    <div class="features">
      <div class="feature">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 430 361.1" style="enable-background:new 0 0 430 361.1;" xml:space="preserve">
<path d="M423,347.1h-72.4c25.2-15.7,41.5-42.4,43.7-72h23.2c3.9,0,7-3.1,7-7l0,0c0-33.6-13.8-65.8-38.2-88.9V7c0-3.9-3.1-7-7-7
	H220.6c-3.2,0-5.9,2.1-6.8,5.2L171,164.4l-54.1,9V112c0-3.9-3.1-7-7-7l0,0H99.2V87.9h10.7c3.9,0,7-3.1,7-7s-3.1-7-7-7H92.2
	c-3.9,0-7,3.1-7,7V105H74.5c-3.9,0-7,3.1-7,7l0,0v69.5l-36.1,6c-3.4,0.6-5.8,3.5-5.8,6.9v49.1c-26.8,26.9-26.7,70.5,0.3,97.2
	c2.3,2.2,4.7,4.3,7.2,6.2H7c-3.9,0-7,3.1-7,7c0,3.9,3.1,7,7,7h416c3.9,0,7-3.1,7-7C430,350.3,426.9,347.1,423,347.1L423,347.1z
	 M301.6,347.1c-43.6-0.1-78.9-35.4-79-79v-0.1c0-43.6,35.4-79,79-79s79,35.4,79,79v0.1C380.5,311.8,345.2,347.1,301.6,347.1z
	 M410.2,261.1h-15.9c-3.9-51.2-48.5-89.6-99.7-85.7c-45.8,3.4-82.3,39.9-85.7,85.7h-15.9c3.9-60,55.6-105.5,115.6-101.6
	 C363.2,163,406.7,206.5,410.2,261.1L410.2,261.1z M237,163.5h-20.3l32.4-119.4h93.1v108.1c-34.9-12.3-73.5-8.1-105,11.3
	 C237.2,163.5,237.1,163.5,237,163.5z M225.9,14h146.3v149.5h-6.3c-3.1-1.9-6.3-3.7-9.7-5.4v-121c0-3.9-3.1-7-7-7H243.8
	c-3.2,0-5.9,2.1-6.8,5.2l-34.8,128.2h-16.5L225.9,14z M81.5,119h21.4v56.6l-21.4,3.6V119z M176.3,177.7c0.6,0,1.1,0,1.7-0.1h28.4
	c0.4,0.1,0.8,0.1,1.2,0.2c0.3,0,0.6-0.1,1-0.2h10.2c-25.5,23.2-40,56.1-40,90.6c0,3.9,3.1,7,7,7h23.2c0.3,3.4,0.7,6.7,1.3,10h-67
	c-3.8-37.8-37.5-65.4-75.3-61.6c-10,1-19.6,4.2-28.3,9.3v-32.3L176.3,177.7z M19.6,292.2c0-30.4,24.6-55,55-55s55,24.6,55,55v0
	c0,30.4-24.6,55-55,55C44.2,347.1,19.6,322.5,19.6,292.2z M116,347.1c15.3-11.5,25.2-28.9,27.1-48h70.8c7.1,19.9,20.7,36.8,38.7,48
	L116,347.1z"></path>
<path d="M301.6,223.9c-24.5,0-44.3,19.8-44.3,44.3c0,24.5,19.8,44.3,44.3,44.3s44.3-19.8,44.3-44.3l0,0
	 C345.8,243.7,326,223.9,301.6,223.9z M301.6,298.4c-16.7,0-30.3-13.6-30.3-30.3s13.6-30.3,30.3-30.3c16.7,0,30.3,13.6,30.3,30.3l0,0
	 C331.8,284.9,318.3,298.4,301.6,298.4z"></path>
<path d="M74.5,258.3c-18.7,0-33.9,15.2-33.9,33.9c0,18.7,15.2,33.9,33.9,33.9c18.7,0,33.9-15.2,33.9-33.9
	 C108.4,273.5,93.2,258.3,74.5,258.3z M74.5,312c-11,0-19.9-8.9-19.9-19.9c0-11,8.9-19.9,19.9-19.9c11,0,19.9,8.9,19.9,19.9
	c0,0,0,0,0,0C94.4,303.1,85.5,312,74.5,312L74.5,312z"></path>
</svg>
        <div class="feature-title">Posedujemo svu potrebnu mehanizaciju</div>
        <div>Profesionalna oprema i tim na terenu omogućavaju kvalitetno održavanje zasada.</div>
      </div>
      <div class="feature">
        <svg version="1.1" id="awesome_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 469.3 469.3" style="enable-background:new 0 0 469.3 469.3;" xml:space="preserve">
<g>
	<g>
		<path d="M466.2,3.1C462-1,455.3-1,451.1,3.1l-18.5,18.5c-17.4-1-74-1.4-109,33.6c-34.2,34.2-25.1,78.3-19.8,95.2l-16.2,16.2
			c0.2-2.2,0.4-4.3,0.4-6.6v0c0-49.5-40.3-89.3-53.3-100.9V42.7c0-5.9-4.8-10.7-10.7-10.7s-10.7,4.8-10.7,10.7v16.4
			C200.3,70.7,160,110.5,160,160c0,7.4,0.9,14.2,2.4,20.6c-9.4-12.1-18.6-21-23.7-25.5v-16.4c0-5.9-4.8-10.7-10.7-10.7
			s-10.7,4.8-10.7,10.7v16.4C104.3,166.7,64,206.4,64,256c0,46.7,35.1,73.1,51.4,82.8L3.1,451.1c-4.2,4.2-4.2,10.9,0,15.1
			c2.1,2.1,4.8,3.1,7.5,3.1s5.5-1,7.5-3.1l112.7-112.7c9.4,16.2,35.4,51.8,82.4,51.8c0,0,0,0,0.1,0c49.5,0,89.3-40.3,100.9-53.3
			l16.4,0c5.9,0,10.7-4.8,10.7-10.7c0-5.9-4.8-10.7-10.7-10.7h0l-16.4,0c-4.6-5.1-13.5-14.4-25.6-23.9c6.4,1.6,13.3,2.5,20.7,2.5
			c0,0,0,0,0.1,0c49.5,0,89.3-40.3,100.9-53.3l16.4,0c5.9,0,10.7-4.8,10.7-10.7c0-5.9-4.8-10.7-10.7-10.7h0l-16.4,0
			c-11.6-13-51.3-53.3-100.9-53.3c-2.3,0-4.5,0.2-6.7,0.4l16.2-16.2c7.2,2.3,19.3,5.2,33.5,5.2c19.2,0,42.1-5.4,61.7-25
			c35-35,34.6-91.6,33.6-109l18.5-18.5C470.4,14,470.4,7.3,466.2,3.1z M224,78.3c13.5,12.8,42.6,44.9,42.6,81.7
			c0,20.7-9.3,36.2-19.6,47.2l-5.6,5.6c-6.7,6-13.3,10.3-17.5,12.6c-11.7-6.7-42.7-27.9-42.7-65.4C181.3,123.3,210.5,91.2,224,78.3z
			 M185.9,222.4c9.3,9.7,18.9,16.4,25.6,20.4l-19.9,19.9c0.2-2.2,0.4-4.4,0.4-6.7C192,244.1,189.6,232.9,185.9,222.4z M227.8,256.6
			c3.9,7.1,10.8,17.7,21,27.6c-11-4.1-22.9-6.8-35.5-6.8h0c-2.3,0-4.5,0.2-6.7,0.4L227.8,256.6z M128,321.5
			c-11.8-6.7-42.7-27.8-42.7-65.5c0-36.7,29.2-68.8,42.7-81.7c13.5,12.8,42.6,44.9,42.6,81.7c0,20-8.7,35.2-18.6,46.1l-7,7
			C138.5,315,132.1,319.2,128,321.5z M295,341.4c-12.8,13.5-44.9,42.6-81.7,42.6c0,0,0,0,0,0c-37.8,0-58.4-31-64.9-42.7
			c2.5-4.5,7.2-12,14.2-19.4c0.3-0.3,0.5-0.5,0.8-0.8c11-11.4,27.3-22.5,49.9-22.5h0C250.1,298.7,282.2,327.9,295,341.4z
			 M309.3,202.7c36.7,0,68.8,29.2,81.7,42.7c-12.9,13.5-45,42.6-81.7,42.6h0c0,0,0,0,0,0c-37.8,0-57.8-31.9-63.8-43.6
			C251.6,233,271.6,202.7,309.3,202.7z M399,130.6c-26.7,26.8-62.5,18.3-74.6,14.3c-3.9-12-12.3-48,14.3-74.6
			c25.9-25.9,69.2-27.8,87.9-27.6C427.1,61.3,425,104.6,399,130.6z"></path>
	</g>
</g>
</svg>
        <div class="feature-title">Preko 7 godina iskustva</div>
        <div>Tim agronoma i kooperanata sa dokazanim rezultatima na više lokacija.</div>
      </div>
      <div class="feature">
        <svg version="1.1" id="Layer_1_1_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 496 496" style="enable-background:new 0 0 496 496;" xml:space="preserve">
<g>
	<rect x="416" y="288" width="16" height="16"></rect>
	<rect x="416" y="352" width="16" height="16"></rect>
	<rect x="416" y="416" width="16" height="16"></rect>
	<path d="M480,224h-35.9c-4.1-18.7-12.9-36-25.7-50.4c-5.8-6.5-12.6-11.8-19.9-15.6c14.6-10.1,24.2-27,24.2-46v-8h-40
		c-20.4,0-38.2,11-48,27.3V112c0-17.6,14.4-32,32-32V64c-26.5,0-48,21.5-48,48v44.4c-23.7-8.6-50.3-2.2-67.3,16.8
		c-2.1,2.3-4,4.7-5.8,7.1l0.7-3.3c1.1-5.4,1.7-10.9,1.7-16.9c0-22.5-9.3-42.8-24.3-57.3l28-41.3c0.6-0.9,1.1-1.8,1.6-2.8
		c6.1-12.2,1.1-27.1-11.1-33.2l-2-1c-5.9-3-12.6-3.4-18.9-1.3S210,29.5,207,35.5c-0.4,0.9-0.8,1.7-1.1,2.6L189.6,83
		c-1.1-0.3-2.2-0.6-3.3-0.9l5.6-56.6c0.1-0.8,0.1-1.6,0.1-2.4C192,10.4,181.6,0,168.8,0h-1.5C154.4,0,144,10.4,144,23.2
		c0,0.8,0,1.6,0.1,2.3l5.7,56.6c-1.1,0.3-2.2,0.6-3.3,0.9l-16.3-44.9c-0.3-0.9-0.7-1.8-1.2-2.8c-3-5.9-8-10.3-14.3-12.4
		c-6.3-2.1-13-1.6-18.9,1.3l-2,1c-12.2,6.1-17.2,21-11.1,33.3c0.5,1,1,1.9,1.6,2.8l28.1,41.3c-15,14.6-24.4,35.1-24.4,57.9
		c0,5.5,0.6,11,1.7,16.3l9.8,47.1H88c-8.8,0-16,7.2-16,16v0.6c-2.6-0.4-5.3-0.6-8-0.6H24v8c0,19.1,9.6,35.9,24.2,46
		c-7.3,3.8-14.1,9.1-19.9,15.6C10,330.1,0,356.5,0,384c0,30.7,12.2,59.4,34.4,80.7C55.4,485,82.8,496,112,496c1.5,0,3,0,4.5-0.1
		c28.5-1.1,54.4-13.1,73.6-31.9H424c22.1,0,40-17.9,40-40V272h16c8.8,0,16-7.2,16-16v-16C496,231.2,488.8,224,480,224z M382.8,120
		h23.2c-3.7,18.2-19.9,32-39.2,32h-23.2C347.3,133.8,363.4,120,382.8,120z M263.3,183.8c13-14.5,34.6-19.3,52.4-11.6
		c1,0.4,2,0.7,3,1.1v17.1c-7.9-3-15.5-9.2-18.4-12l-11.3,11.3c1.9,1.9,18.9,18.3,37.7,18.3s35.8-16.5,37.7-18.3l-11.3-11.3
		c-2.9,2.8-10.4,9.1-18.4,12V168h32c2.7,0,5.4-0.3,8-0.6c11.2,0.8,23.1,7.1,31.8,16.9c10.2,11.5,17.4,25.1,21.2,39.8H241.8
		C245.7,209.1,253,195.4,263.3,183.8z M220.9,43.6c0.1-0.3,0.2-0.6,0.5-1c1-2.1,2.8-3.7,5.1-4.4c2.2-0.7,4.6-0.6,6.7,0.5l2,1
		c4.3,2.2,6.1,7.4,3.9,11.7c-0.2,0.4-0.4,0.7-0.6,1l-27.4,40.3c-2.2-1.4-4.4-2.7-6.6-3.8L220.9,43.6z M160,23.2c0-4,3.2-7.2,7.2-7.2
		h1.5c4,0,7.2,3.2,7.2,8l-5.6,56.2c-0.8,0-1.5-0.1-2.3-0.1s-1.6,0.1-2.3,0.1L160,23.2z M97.5,52.4c-0.2-0.3-0.4-0.7-0.6-1
		c-2.2-4.3-0.4-9.6,3.9-11.8l2-1c2.1-1,4.5-1.2,6.7-0.5c2.2,0.7,4,2.3,5.2,4.6c0.2,0.3,0.3,0.6,0.4,0.9l16.5,45.3
		c-2.3,1.2-4.5,2.5-6.6,3.8L97.5,52.4z M168,96c35.3,0,64,28.7,64,64.6c0,4.4-0.5,8.8-1.3,13.1L220.2,224h-89.1
		c5.6-4.9,12.9-8,20.9-8v-16c-15.1,0-28.6,7-37.4,18l-9.2-44.4c-0.9-4.3-1.3-8.7-1.3-13.6C104,124.7,132.7,96,168,96z M88,240h16.7
		c-0.4,2.6-0.7,5.3-0.7,8v8.9c-4.6-4.7-10-8.5-16-11.4V240z M64,256c19.3,0,35.5,13.8,39.2,32H80c-19.3,0-35.5-13.8-39.2-32H64z
		 M115.8,479.9c-26.5,1-51.4-8.5-70.4-26.7C26.5,434.9,16,410.3,16,384c0-23.5,8.6-46.2,24.2-63.8c8.7-9.8,20.6-16.1,31.8-16.9
		c2.6,0.4,5.2,0.6,8,0.6h24v22.4c-7.9-3-15.5-9.2-18.4-12l-11.3,11.3c1.9,1.9,18.9,18.3,37.7,18.3s35.8-16.5,37.7-18.3l-11.3-11.3
		c-2.9,2.8-10.4,9.1-18.4,12v-15.1c3.8-0.6,7.5-1.6,11-3.1c17.8-7.6,39.4-2.8,52.4,11.6c16.9,18.8,25.6,43.1,24.5,68.5
		C205.7,437.8,165.3,478,115.8,479.9z M223.9,384c0-16.8-3.6-33.1-10.7-48H448v48H223.9z M424,448H203.7c9.9-14,16.6-30.4,19.1-48
		H448v24C448,437.2,437.2,448,424,448z M480,256h-32v64H203.8c-2.6-3.8-5.4-7.4-8.5-10.9c-17.8-19.8-46.2-26.1-70.6-15.6
		c-1.5,0.6-3.1,1-4.7,1.4V272h312v-16H120v-8c0-2.8,0.5-5.4,1.1-8H480V256z"></path>
	<path d="M48,384H32c0,44.1,35.9,80,80,80v-16C76.7,448,48,419.3,48,384z"></path>
	<rect x="192" y="128" width="16" height="16"></rect>
	<rect x="192" y="160" width="16" height="16"></rect>
	<rect x="192" y="192" width="16" height="16"></rect>
</g>
</svg>
        <div class="feature-title">Zajedno nastupamo na tržištu</div>
        <div>Organizovana prodaja i plasman proizvoda radi stabilnog prinosa.</div>
      </div>
    </div>
    <div style="text-align:center">
      <a class="btn-main" href="#ponuda">Prijavi se za ponudu</a>
    </div>
  </section>

  <section class="section" id="market">
    <h2>Prodaja po stablu</h2>
    <h3 style="margin-top:0.5em">Kupi od drugih investitora</h3>
    <h4 style="margin-top:0.5em">Market</h4>

    <div class="articles">
      <div class="article">
                 <img src="https://mojazemlja.rs/img/malina-plantaza.jpg" alt="Malina" loading="lazy" decoding="async" fetchpriority="low" />
        <div class="article-content">
          <div class="article-title">Malina kod Užica</div>
          <div class="article-desc">
            <div>Broj stabala: -</div>
            <div>Starost: 3 godine</div>
            <div>Lokacija: Užice</div>
            <div>- % godišnji povrat</div>
            <div>- € po stablu</div>
          </div>
          <span class="btn-main is-disabled" aria-disabled="true">USKORO</span>
        </div>
      </div>

      <div class="article">
                 <img src="https://mojazemlja.rs/img/borovnica-plantaza.jpg" alt="Borovnica" loading="lazy" decoding="async" fetchpriority="low" />
        <div class="article-content">
          <div class="article-title">Borovnica, plantaža kod Užica</div>
          <div class="article-desc">
            <div>Broj stabala: -</div>
            <div>Starost: 4 godine</div>
            <div>Lokacija: Užice</div>
            <div>- % godišnji povrat</div>
            <div>- € po stablu</div>
          </div>
          <span class="btn-main is-disabled" aria-disabled="true">USKORO</span>
        </div>
      </div>

      <div class="article">
                  <img src="https://mojazemlja.rs/img/orah-plantaza.jpg" alt="Orah" loading="lazy" decoding="async" fetchpriority="low" />
        <div class="article-content">
          <div class="article-title">25 stabala oraha čendler u Malom Žamu, Vršac</div>
          <div class="article-desc">
            <div>Broj stabala: 25</div>
            <div>Starost: 7 godina</div>
            <div>Lokacija: Mali Žam, Vršac</div>
            <div>+7,63% godišnji povrat</div>
            <div>298€ po stablu</div>
          </div>
          <span class="btn-main is-disabled" aria-disabled="true">Prodato</span>
        </div>
      </div>

      <div class="article">
                  <img src="https://mojazemlja.rs/img/orah-plantaza.jpg" alt="Orah" loading="lazy" decoding="async" fetchpriority="low" />
        <div class="article-content">
          <div class="article-title">37 stabala oraha čendler u Velikom Središtu, Vršac</div>
          <div class="article-desc">
            <div>Broj stabala: 37</div>
            <div>Starost: 2 godine</div>
            <div>Lokacija: Veliko Središte, Vršac</div>
            <div>+7,2% godišnji povrat</div>
            <div>200€ po stablu</div>
          </div>
          <span class="btn-main is-disabled" aria-disabled="true">Prodato</span>
        </div>
      </div>
    </div>

    <div style="text-align:center;margin-top:1em">
      <a class="btn-main" href="#ponuda">Obavesti me kada bude novih prodaja</a>
    </div>
  </section>

  <section class="section" id="o-nama">
    <h2>Pasivno investiranje u poljoprivredu</h2>
    <p>
      Moja Zemlja je više od platforme – to je zajednica ljudi koji veruju u moć poljoprivrede, stabilna ulaganja i održivu budućnost. Kroz jednostavan model investiranja, omogućavamo ti da postaneš suvlasnik plodnih parcela širom Srbije, bez potrebe da napuštaš svoj svakodnevni posao. Bilo da želiš da uložiš u jedno stablo ili ceo hektar, Moja Zemlja ti pruža potpunu transparentnost, redovne izveštaje o napretku i pristup stručnom timu agronoma i ekonomista. Naš cilj je da zajedno gradimo dugoročnu vrednost – za tebe kao investitora, i za sela i ljude koji obrađuju tu zemlju svakoga dana.
    </p>
  </section>

  <footer>
         
    <div id="ponuda" style="max-width:1200px; padding:40px 40px 24px; text-align:center; margin-bottom:2.5em; background:#fff; color:#222; border-radius:10px; box-shadow:0 4px 16px #0003;">
      <h2>Interesuje te ulaganje u orahe ali i druge kulture?</h2>
      <p>Ostavi svoju email adresu da dobiješ više informacija o aktuelnoj ponudi.</p>
      <?php if ($success): ?>
        <div style="background-color: #d4edda; color: #155724; padding: 10px; border-radius: 5px;">
          <?= htmlspecialchars($success) ?>
        </div>
      <?php endif; ?>

      <?php if ($error): ?>
        <div style="background-color: #f8d7da; color: #721c24; padding: 10px; border-radius: 5px;">
          <?= htmlspecialchars($error) ?>
        </div>
      <?php endif; ?>
      <form action="/prijava.php" method="POST" class="simple-form" style="max-width:500px;margin:1.2em auto 0;display:flex;flex-direction:column;gap:1em;">
        <input type="email" name="email" placeholder="E-mail adresa" required style="width:100%;padding:12px;border:1px solid #f7f5ea;border-radius:6px;font-size:16px;background:#f7f5ea;border-color:#f7f5ea;">
        <input type="text" name="website" style="display:none;">
        <button type="submit" class="btn-main" style="width:100%">Pošalji</button>
      </form>
    </div>
    <img class="footer-logo" src="https://mojazemlja.rs/img/moja-zemlja-logo.png" alt="Moja Zemlja" loading="lazy" decoding="async" fetchpriority="low" height="56" />
    <div class="footer-text">2025 Moja Zemlja. Sva prava zadržana.</div>
  </footer>

  <script>
    const burger = document.getElementById('burger');
    const mobileNav = document.getElementById('mobile-nav');
    burger.addEventListener('click', function() {
      const expanded = burger.getAttribute('aria-expanded') === 'true';
      burger.setAttribute('aria-expanded', !expanded);
      mobileNav.classList.toggle('open');
      document.body.classList.toggle('nav-open');
    });
    function closeMobileNav() {
      burger.setAttribute('aria-expanded', 'false');
      mobileNav.classList.remove('open');
      document.body.classList.remove('nav-open');
    }
    document.addEventListener('click', function(e) {
      if (mobileNav.classList.contains('open') && !mobileNav.contains(e.target) && !burger.contains(e.target)) {
        closeMobileNav();
      }
    });
    document.addEventListener('keydown', function(e) {
      if (e.key === 'Escape') closeMobileNav();
    });

    // Toggle desktop header style on scroll
    const headerEl = document.querySelector('header');
    function updateHeaderStyle() {
      const isScrolled = window.scrollY > 10;
      if (isScrolled) {
        headerEl.classList.add('is-scrolled');
      } else {
        headerEl.classList.remove('is-scrolled');
      }
    }
    window.addEventListener('scroll', updateHeaderStyle, { passive: true });
    document.addEventListener('DOMContentLoaded', updateHeaderStyle);
    updateHeaderStyle();

    // Lazy-load the heavy footer background image when near viewport
    (function() {
      const footerEl = document.querySelector('footer');
      if (!footerEl) return;
      const addBg = () => footerEl.classList.add('footer-has-bg');
      if ('IntersectionObserver' in window) {
        const observer = new IntersectionObserver((entries, obs) => {
          for (const entry of entries) {
            if (entry.isIntersecting) {
              addBg();
              obs.disconnect();
              break;
            }
          }
        }, { rootMargin: '600px' });
        observer.observe(footerEl);
      } else {
        addBg();
      }
    })();
 
 
  </script>
</body>
</html>