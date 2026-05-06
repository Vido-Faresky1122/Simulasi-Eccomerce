<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SUDIMART — Setiap Peralatan Yang Anda Butuhkan</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="/js/script.js"></script>
  <link rel="stylesheet" href="/css/output.css">
  <link rel="stylesheet" href="/css/outputlanding.css">
  <link
    href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Rajdhani:wght@300;400;500;600;700&family=Barlow+Condensed:ital,wght@0,300;0,400;0,600;0,700;1,400&display=swap"
    rel="stylesheet" />
</head>

<body class="font-ui text-white">

  <!-- Progress bar -->
  <div id="progress" style="width:0%"></div>

  <!-- Custom cursor -->
  <div id="cur"></div>
  <div id="cur-r"></div>


  <nav id="navbar" class="fixed top-0 left-0 right-0 z-500 transition-all duration-500">
    <div class="flex items-center justify-between px-8 lg:px-16 py-5">

      <!-- Logo -->
      <a href="/" class="font-display text-3xl tracking-[.15em] text-white">
        SUDI<span class="text-gold">MART</span>
      </a>

      <!-- Desktop links -->
      <ul class="hidden lg:flex items-center gap-10">
        <li><a href="#tentang"
            class="nav-link font-body text-sm tracking-[.2em] uppercase text-soft hover:text-gold transition-colors">Tentang</a>
        </li>
        <li><a href="#visi-misi"
            class="nav-link font-body text-sm tracking-[.2em] uppercase text-soft hover:text-gold transition-colors">Visi
            &amp; Misi</a></li>
        <li><a href="#kategori"
            class="nav-link font-body text-sm tracking-[.2em] uppercase text-soft hover:text-gold transition-colors">Kategori</a>
        </li>
        <li><a href="#faq"
            class="nav-link font-body text-sm tracking-[.2em] uppercase text-soft hover:text-gold transition-colors">FAQ</a>
        </li>
        <li><a href="#kontak"
            class="nav-link font-body text-sm tracking-[.2em] uppercase text-soft hover:text-gold transition-colors">Kontak</a>
        </li>
      </ul>

      <!-- CTA + hamburger -->
      <div class="flex items-center gap-4">
        <button onclick="window.location.href='/products'"
          class="hidden lg:block clip-angled bg-gold text-deep font-body font-bold text-sm tracking-[.2em] uppercase px-6 py-2.5 hover:bg-white transition-colors">
          SHOP NOW
        </button>
        <button id="ham" class="lg:hidden flex flex-col gap-1.5 p-2" onclick="toggleMob()">
          <span class="w-6 h-px bg-gold block transition-transform" id="h1"></span>
          <span class="w-6 h-px bg-gold block" id="h2"></span>
          <span class="w-6 h-px bg-gold block transition-transform" id="h3"></span>
        </button>
      </div>
    </div>
  </nav>

  <!-- Mobile menu -->
  <div id="mob-menu"
    class="fixed inset-0 z-499 bg-void/95 backdrop-blur-xl flex flex-col items-center justify-center gap-8">
    <a href="#tentang" onclick="toggleMob()"
      class="font-display text-5xl text-white hover:text-gold transition-colors tracking-widest">TENTANG</a>
    <a href="#visi-misi" onclick="toggleMob()"
      class="font-display text-5xl text-white hover:text-gold transition-colors tracking-widest">VISI &amp; MISI</a>
    <a href="#kategori" onclick="toggleMob()"
      class="font-display text-5xl text-white hover:text-gold transition-colors tracking-widest">KATEGORI</a>
    <a href="#kontak" onclick="toggleMob()"
      class="font-display text-5xl text-white hover:text-gold transition-colors tracking-widest">KONTAK</a>
    <button onclick="showToast('Fitur belanja segera hadir!');toggleMob()"
      class="clip-angled bg-gold text-deep font-body font-bold text-lg tracking-[.2em] uppercase px-10 py-3 mt-4">SHOP
      NOW</button>
  </div>

  <!-- ════════════════════════════════════════════
     HERO
════════════════════════════════════════════ -->
  <section id="hero" class="relative min-h-screen flex items-center overflow-hidden clip-hero">

    <!-- BG layers -->
    <div class="absolute inset-0  "></div>
    <div class="absolute inset-0 grid-tex opacity-100"></div>
    <div class="absolute inset-0"
      style="background:radial-gradient(ellipse 90% 80% at 65% 45%,rgba(107,31,212,.3) 0%,transparent 65%)"></div>

    <!-- Glow orb -->
    <div class="glow-pulse absolute w-150 h-150 rounded-full pointer-events-none"
      style="background:radial-gradient(circle,rgba(107,31,212,.22) 0%,transparent 70%);top:50%;left:62%;transform:translate(-50%,-50%)">
    </div>


    <!-- Hero content -->
    <div class="relative z-10 px-8 lg:px-20 pt-32 pb-40 max-w-3xl">
      <p class="sr font-body text-xs tracking-[.45em] uppercase text-gold mb-5 flex items-center gap-3">
        <span class="block w-8 h-px bg-gold"></span>
        E-Commerce ATK Terpercaya di Indonesia
      </p>

      <h1 class="sr sr-d1 font-display leading-[.9] text-white">
        <span class="block text-[clamp(4.5rem,12vw,8.5rem)] tracking-[.02em]"
          style="text-shadow:0 0 80px rgba(107,31,212,.7)">SUDI</span>
        <span class="block text-[clamp(4.5rem,12vw,8.5rem)] tracking-[.02em] grad-text">MART</span>
      </h1>

      <p class="sr sr-d2 font-body text-[1.1rem] tracking-[.06em] uppercase text-soft mt-3 font-light">
        Setiap Peralatan Yang Anda <span class="text-gold font-semibold">Butuhkan</span>
      </p>

      <p class="sr sr-d3 font-ui text-base leading-relaxed text-soft/80 mt-5 max-w-lg font-light">
        Temukan berbagai alat tulis kantor lengkap, berkualitas, dan harga bersahabat dalam satu tempat.
        Belanja jadi lebih mudah, cepat, dan praktis untuk kebutuhan sekolah, kantor, maupun pribadi.
      </p>

      <div class="sr sr-d4 flex flex-wrap gap-4 mt-8">
        <button onclick="window.location.href='/products'"
          class="clip-angled bg-gold text-deep font-body font-bold text-sm tracking-[.2em] uppercase px-8 py-3 hover:bg-white transition-colors relative overflow-hidden group">
          <span class="relative z-10">SHOP NOW</span>
          <span
            class="absolute inset-0 bg-white/30 -translate-x-full skew-x-[-20deg] group-hover:translate-x-full transition-transform duration-500"></span>
        </button>
        <button onclick="document.getElementById('tentang').scrollIntoView({behavior:'smooth'})"
          class="clip-angled border border-pl/40 text-soft font-body font-semibold text-sm tracking-[.2em] uppercase px-8 py-3 hover:border-gold hover:text-gold transition-colors">
          PELAJARI LEBIH
        </button>
      </div>
    </div>

    <!-- Scroll hint -->
    <div class="absolute bottom-[5.5rem] left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 animate-bounce">
      <span class="font-body text-[.65rem] tracking-[.3em] uppercase text-soft/40">Scroll</span>
      <span class="block w-px h-10 bg-gradient-to-b from-gold/60 to-transparent"></span>
    </div>

    <!-- Stat bar -->
    <div class="absolute bottom-0 left-0 right-0 grid grid-cols-3 border-t border-pb/30 bg-void/70 backdrop-blur-md">
      <div class="flex items-center gap-4 px-6 lg:px-12 py-4 border-r border-pb/20">
        <span class="font-display text-4xl text-gold stat-num" data-target="221">0</span>
        <div>
          <p class="font-body text-gold text-xs tracking-[.1em] uppercase font-semibold">Juta+</p>
          <p class="font-body text-soft/70 text-xs tracking-[.08em] leading-tight">Pengguna Internet<br>Indonesia</p>
        </div>
      </div>
      <div class="flex items-center gap-4 px-6 lg:px-12 py-4 border-r border-pb/20">
        <span class="font-display text-4xl text-gold stat-num" data-target="5000">0</span>
        <div>
          <p class="font-body text-gold text-xs tracking-[.1em] uppercase font-semibold">Produk+</p>
          <p class="font-body text-soft/70 text-xs tracking-[.08em] leading-tight">ATK Lengkap<br>Tersedia</p>
        </div>
      </div>
      <div class="flex items-center gap-4 px-6 lg:px-12 py-4">
        <span class="font-display text-4xl text-gold stat-num" data-target="99">0</span>
        <div>
          <p class="font-body text-gold text-xs tracking-[.1em] uppercase font-semibold">%</p>
          <p class="font-body text-soft/70 text-xs tracking-[.08em] leading-tight">Kepuasan<br>Pelanggan</p>
        </div>
      </div>
    </div>
  </section>


  <!-- ════════════════════════════════════════════
     MARQUEE
════════════════════════════════════════════ -->
  <div class="relative z-10 bg-pb/20 border-y border-pb/40 py-3 overflow-hidden">
    <div class="marquee-wrap">
      <div class="marquee-inner">
        <!-- repeat twice for seamless loop -->
        <template id="mq-t">
          <span class="font-body text-xs tracking-[.35em] uppercase text-gold/60 mx-8">✦ ATK Lengkap</span>
          <span class="font-body text-xs tracking-[.35em] uppercase text-soft/50 mx-8">Pengiriman Cepat</span>
          <span class="font-body text-xs tracking-[.35em] uppercase text-gold/60 mx-8">✦ Harga Terjangkau</span>
          <span class="font-body text-xs tracking-[.35em] uppercase text-soft/50 mx-8">Belanja Praktis</span>
          <span class="font-body text-xs tracking-[.35em] uppercase text-gold/60 mx-8">✦ Layanan Terpercaya</span>
          <span class="font-body text-xs tracking-[.35em] uppercase text-soft/50 mx-8">Produk Berkualitas</span>
          <span class="font-body text-xs tracking-[.35em] uppercase text-gold/60 mx-8">✦ Sekolah, Kantor, Pribadi</span>
          <span class="font-body text-xs tracking-[.35em] uppercase text-soft/50 mx-8">Aman &amp; Terpercaya</span>
        </template>
      </div>
    </div>
  </div>


  <!-- ════════════════════════════════════════════
     ABOUT / TENTANG
════════════════════════════════════════════ -->
  <section id="tentang" class="relative py-28 lg:py-36 overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-b from-[#08001a] via-[#100230] to-[#08001a]"></div>

    <!-- Decorative circle -->
    <div
      class="absolute -right-40 top-1/2 -translate-y-1/2 w-[600px] h-[600px] rounded-full border border-pb/20 pointer-events-none">
    </div>
    <div
      class="absolute -right-52 top-1/2 -translate-y-1/2 w-[780px] h-[780px] rounded-full border border-pb/10 pointer-events-none">
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-8 lg:px-16 grid lg:grid-cols-2 gap-16 lg:gap-24 items-center">

      <!-- Left: visual card stack -->
      <div class="sr left relative h-[420px] lg:h-[500px]">

        <!-- Main card -->
        <div
          class="clip-card absolute inset-0 border border-pb/40 bg-gradient-to-br from-pm/30 to-void/80 backdrop-blur-sm overflow-hidden">
          <div class="absolute inset-0 flex flex-col justify-end p-8">
            <p class="font-display text-5xl text-white/90 tracking-widest">E-COMMERCE</p>
            <p class="font-display text-5xl grad-text tracking-widest">ATK #1</p>
            <p class="font-body text-soft/60 text-sm tracking-[.15em] uppercase mt-2">Pioneer di Indonesia</p>
          </div>
          <!-- Large background text -->
          <p
            class="absolute top-6 right-6 font-display text-[7rem] text-pb/10 leading-none tracking-widest pointer-events-none">
            ATK</p>
        </div>

        <!-- Floating stat chip -->
        <div
          class="clip-card absolute -bottom-6 -right-6 lg:-right-10 w-52 bg-gradient-to-br from-pb/70 to-pm border border-gold/40 backdrop-blur-md p-5 shadow-2xl">
          <p class="font-display text-4xl text-gold">221<span class="text-2xl">jt</span></p>
          <p class="font-body text-xs text-soft/70 tracking-[.12em] uppercase mt-1">Pertumbuhan<br>Pengguna Internet</p>
        </div>

        <!-- Small badge -->
        <div
          class="absolute -top-4 -left-4 lg:-left-8 clip-angled bg-gold/10 border border-gold/30 backdrop-blur-sm px-4 py-2">
          <p class="font-body text-gold text-xs tracking-[.2em] uppercase font-semibold">✦ Terpercaya</p>
        </div>
      </div>

      <!-- Right: text -->
      <div class="sr right">
        <p class="section-label font-body text-xs tracking-[.4em] uppercase text-gold flex items-center gap-3 mb-3">
          <span class="w-5 h-px bg-gold"></span>Tentang Kami
        </p>
        <h2 class="font-display text-[clamp(3rem,5vw,4.5rem)] leading-none tracking-wide text-white mb-6">
          PELOPOR<br><span class="grad-text">E-COMMERCE ATK</span><br>INDONESIA
        </h2>
        <div class="w-14 h-0.5 bg-gradient-to-r from-gold to-transparent mb-8"></div>
        <p class="font-ui text-base leading-[1.9] text-soft/80 font-light mb-5">
          Sudimart adalah pelopor website e-commerce ATK pertama di Indonesia yang menyediakan berbagai kebutuhan alat
          tulis kantor dan sekolah secara lengkap, praktis, dengan harga bersaing dan pelayanan yang dijamin memuaskan.
        </p>
        <p class="font-ui text-base leading-[1.9] text-soft/70 font-light">
          Kami berkomitmen menghadirkan layanan belanja online yang nyaman, cepat, aman, dan dapat diandalkan untuk
          memenuhi kepuasan pelanggan kami di seluruh Indonesia.
        </p>

        <div class="flex flex-wrap gap-6 mt-10">
          <div class="flex items-center gap-3">
            <div class="w-10 h-10 clip-card bg-pb/30 border border-pb/50 flex items-center justify-center">
              <svg class="w-5 h-5 text-gold" fill="currentColor" viewBox="0 0 20 20">
                <path
                  d="M10 2a8 8 0 100 16A8 8 0 0010 2zm3.707 6.707l-4 4a1 1 0 01-1.414 0l-2-2a1 1 0 011.414-1.414L9 10.586l3.293-3.293a1 1 0 011.414 1.414z" />
              </svg>
            </div>
            <span class="font-body text-sm tracking-[.1em] text-soft/80">Produk Berkualitas</span>
          </div>
          <div class="flex items-center gap-3">
            <div class="w-10 h-10 clip-card bg-pb/30 border border-pb/50 flex items-center justify-center">
              <svg class="w-5 h-5 text-gold" fill="currentColor" viewBox="0 0 20 20">
                <path
                  d="M10 2a8 8 0 100 16A8 8 0 0010 2zm3.707 6.707l-4 4a1 1 0 01-1.414 0l-2-2a1 1 0 011.414-1.414L9 10.586l3.293-3.293a1 1 0 011.414 1.414z" />
              </svg>
            </div>
            <span class="font-body text-sm tracking-[.1em] text-soft/80">Pengiriman Cepat</span>
          </div>
          <div class="flex items-center gap-3">
            <div class="w-10 h-10 clip-card bg-pb/30 border border-pb/50 flex items-center justify-center">
              <svg class="w-5 h-5 text-gold" fill="currentColor" viewBox="0 0 20 20">
                <path
                  d="M10 2a8 8 0 100 16A8 8 0 0010 2zm3.707 6.707l-4 4a1 1 0 01-1.414 0l-2-2a1 1 0 011.414-1.414L9 10.586l3.293-3.293a1 1 0 011.414 1.414z" />
              </svg>
            </div>
            <span class="font-body text-sm tracking-[.1em] text-soft/80">Harga Terjangkau</span>
          </div>
        </div>
      </div>

    </div>
  </section>

  <div class="sec-div"></div>


  <!-- ════════════════════════════════════════════
     TAGLINE BANNER
════════════════════════════════════════════ -->
  <section class="relative py-20 overflow-hidden text-center">
    <div class="absolute inset-0 bg-gradient-to-r from-[#08001a] via-[#1c054a] to-[#08001a]"></div>
    <div class="absolute inset-0 grid-tex opacity-40"></div>
    <!-- Giant BG text -->
    <p
      class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 font-display text-[18vw] text-pb/5 whitespace-nowrap tracking-wider pointer-events-none">
      SUDIMART</p>
    <div class="relative z-10 sr">
      <p class="font-body text-xs tracking-[.5em] uppercase text-gold/70 mb-4">Tagline Kami</p>
      <h2 class="font-display text-[clamp(2.5rem,6vw,5.5rem)] leading-tight tracking-[.06em] px-4"
        style="text-shadow:0 0 80px rgba(107,31,212,.5)">
        ATK LENGKAP,<br>
        <span class="grad-text">BELANJA PRAKTIS</span>
      </h2>
      <p class="font-display text-[clamp(3rem,8vw,7rem)] text-white/10 tracking-[.3em] mt-2">SUDIMART</p>
    </div>
  </section>

  <div class="sec-div"></div>


  <!-- ════════════════════════════════════════════
     VISI & MISI
════════════════════════════════════════════ -->
  <section id="visi-misi" class="relative py-28 lg:py-36 overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-[#08001a] via-[#130336] to-[#08001a]"></div>

    <!-- Decorative rings -->
    <div
      class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 w-[900px] h-[900px] rounded-full border border-pb/10 pointer-events-none">
    </div>
    <div
      class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] rounded-full border border-pb/15 pointer-events-none">
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-8 lg:px-16">

      <div class="text-center mb-16 sr">
        <p class="font-body text-xs tracking-[.45em] uppercase text-gold flex items-center justify-center gap-3 mb-3">
          <span class="w-5 h-px bg-gold"></span>Identitas Perusahaan<span class="w-5 h-px bg-gold"></span>
        </p>
        <h2 class="font-display text-[clamp(2.8rem,5vw,4.5rem)] leading-none tracking-wide">
          VISI <span class="text-pb">&amp;</span> MISI
        </h2>
      </div>

      <div class="grid lg:grid-cols-2 gap-8">

        <!-- VISI -->
        <div class="sr left group">
          <div
            class="clip-card h-full border border-pb/40 bg-gradient-to-br from-pb/20 via-pm/10 to-void/60 backdrop-blur-sm p-10 lg:p-14 hover:border-gold/40 transition-colors duration-500">
            <!-- Big letter -->
            <div class="mb-8 relative">
              <p class="font-display text-[6rem] lg:text-[8rem] leading-none grad-text opacity-80 tracking-wider">VISI
              </p>
              <div class="absolute bottom-2 left-0 w-24 h-0.5 bg-gradient-to-r from-gold to-transparent"></div>
            </div>

            <!-- Icon -->
            <div
              class="w-14 h-14 clip-card bg-pb/30 border border-pb/50 flex items-center justify-center mb-6 group-hover:bg-gold/20 transition-colors">
              <svg class="w-7 h-7 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
              </svg>
            </div>

            <p class="font-ui text-base leading-[1.9] text-soft/80 font-light">
              Menjadi e-commerce ATK unggulan yang <span class="text-gold font-medium">terpercaya dan inovatif</span>
              dalam menyediakan kebutuhan alat tulis kantor, sekolah, dan perlengkapan kerja secara online di seluruh
              Indonesia.
            </p>

            <div class="mt-8 flex items-center gap-3 text-gold/60">
              <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                <polygon points="10,2 12.4,7.9 18.8,8.2 14,12.4 15.8,18.6 10,15.2 4.2,18.6 6,12.4 1.2,8.2 7.6,7.9" />
              </svg>
              <span class="font-body text-xs tracking-[.2em] uppercase">Tujuan Jangka Panjang</span>
            </div>
          </div>
        </div>

        <!-- MISI -->
        <div class="sr right group">
          <div
            class="clip-card h-full border border-pb/40 bg-gradient-to-br from-pm/20 via-void/60 to-pb/10 backdrop-blur-sm p-10 lg:p-14 hover:border-gold/40 transition-colors duration-500">
            <!-- Big letter -->
            <div class="mb-8 relative">
              <p class="font-display text-[6rem] lg:text-[8rem] leading-none text-white/10 tracking-wider">MISI</p>
              <p
                class="font-display text-[3.5rem] lg:text-[5rem] leading-none grad-text tracking-wider absolute bottom-0 left-0">
                MISI</p>
              <div class="absolute bottom-2 left-0 w-24 h-0.5 bg-gradient-to-r from-gold to-transparent"></div>
            </div>

            <!-- Icon -->
            <div
              class="w-14 h-14 clip-card bg-pb/30 border border-pb/50 flex items-center justify-center mb-6 group-hover:bg-gold/20 transition-colors">
              <svg class="w-7 h-7 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
            </div>

            <ul class="space-y-4">
              <li class="flex items-start gap-3">
                <span class="w-1.5 h-1.5 rounded-full bg-gold mt-2.5 flex-shrink-0"></span>
                <p class="font-ui text-base leading-[1.8] text-soft/80 font-light">Menyediakan berbagai kebutuhan ATK
                  yang <span class="text-gold font-medium">lengkap, berkualitas, dan terjangkau</span>.</p>
              </li>
              <li class="flex items-start gap-3">
                <span class="w-1.5 h-1.5 rounded-full bg-gold mt-2.5 flex-shrink-0"></span>
                <p class="font-ui text-base leading-[1.8] text-soft/80 font-light">Memberikan layanan belanja online
                  yang <span class="text-gold font-medium">mudah, cepat, aman, dan terpercaya</span>.</p>
              </li>
              <li class="flex items-start gap-3">
                <span class="w-1.5 h-1.5 rounded-full bg-gold mt-2.5 flex-shrink-0"></span>
                <p class="font-ui text-base leading-[1.8] text-soft/80 font-light">Memenuhi kepuasan pelanggan dengan
                  standar layanan <span class="text-gold font-medium">prima dan profesional</span>.</p>
              </li>
            </ul>

            <div class="mt-8 flex items-center gap-3 text-gold/60">
              <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                <polygon points="10,2 12.4,7.9 18.8,8.2 14,12.4 15.8,18.6 10,15.2 4.2,18.6 6,12.4 1.2,8.2 7.6,7.9" />
              </svg>
              <span class="font-body text-xs tracking-[.2em] uppercase">Komitmen Kami</span>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <div class="sec-div"></div>


  <!-- ════════════════════════════════════════════
     SHOWCASE BANNER (full-width immersive)
════════════════════════════════════════════ -->
  <section class="relative h-[70vh] min-h-100 flex items-center justify-center overflow-hidden">
    <!-- Animated gradient background simulating a stationery photo -->
    <div class="absolute inset-0 bg-linear-to-br from-[#1a0445] via-[#3a0d7a] to-[#0d0025]"></div>
    <div class="absolute inset-0 grid-tex opacity-30"></div>

    <!-- Large decorative stationery scene SVG -->

    <div class="relative z-10 text-center px-8 sr scale">
      <p class="font-body text-xs tracking-[.5em] uppercase text-gold/70 mb-6 flex items-center justify-center gap-3">
        <span class="w-8 h-px bg-gold/50"></span>Koleksi Lengkap<span class="w-8 h-px bg-gold/50"></span>
      </p>
      <h2 class="font-display text-[clamp(3rem,8vw,7rem)] leading-none tracking-[.06em] text-white mb-4"
        style="text-shadow:0 0 100px rgba(107,31,212,.8)">
        SEMUA ADA<br><span class="grad-text">DI SUDIMART</span>
      </h2>
      <p class="font-ui text-lg text-soft/70 font-light max-w-xl mx-auto mt-4">
        Dari pensil hingga printer — segala kebutuhan kantor dan sekolah Anda tersedia dalam satu platform terpercaya.
      </p>
      <button onclick="showToast('Menjelajahi produk...')"
        class="mt-10 clip-angled bg-transparent border border-gold text-gold font-body font-bold text-sm tracking-[.25em] uppercase px-10 py-3 hover:bg-gold hover:text-deep transition-all">
        LIHAT SEMUA PRODUK →
      </button>
    </div>
  </section>

  <div class="sec-div"></div>


  <!-- ════════════════════════════════════════════
     KATEGORI
════════════════════════════════════════════ -->
  <section id="kategori" class="relative py-28 lg:py-36 overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-b from-[#08001a] via-[#0f0228] to-[#08001a]"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-8 lg:px-16">

      <div class="text-center mb-16 sr">
        <p class="font-body text-xs tracking-[.45em] uppercase text-gold flex items-center justify-center gap-3 mb-3">
          <span class="w-5 h-px bg-gold"></span>Jelajahi<span class="w-5 h-px bg-gold"></span>
        </p>
        <h2 class="font-display text-[clamp(2.8rem,5vw,4.5rem)] leading-none tracking-wide">
          KATEGORI <span class="grad-text">PRODUK</span>
        </h2>
      </div>

      <div class="grid grid-cols-2 lg:grid-cols-4 gap-5">

        <!-- Alat Tulis -->
        <div
          class="sr sr-d1 cat-card clip-card border border-pb/40 bg-gradient-to-br from-pb/20 to-void/80 p-8 text-center cursor-pointer group hover:border-gold/50">
          <div
            class="w-16 h-16 clip-card bg-pb/30 border border-pb/50 flex items-center justify-center mx-auto mb-5 group-hover:bg-gold/20 transition-colors">
            <svg class="w-8 h-8 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
            </svg>
          </div>
          <h3 class="font-display text-2xl tracking-wider text-white mb-2 group-hover:text-gold transition-colors">ALAT
            TULIS</h3>
          <p class="font-body text-xs text-soft/60 tracking-[.1em]">Pena, Pensil, Spidol</p>
          <div class="mt-5 w-8 h-px bg-gold/0 group-hover:bg-gold/60 transition-all duration-500 mx-auto"></div>
        </div>

        <!-- Kertas & Buku -->
        <div
          class="sr sr-d2 cat-card clip-card border border-pb/40 bg-gradient-to-br from-pm/20 to-void/80 p-8 text-center cursor-pointer group hover:border-gold/50">
          <div
            class="w-16 h-16 clip-card bg-pb/30 border border-pb/50 flex items-center justify-center mx-auto mb-5 group-hover:bg-gold/20 transition-colors">
            <svg class="w-8 h-8 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
            </svg>
          </div>
          <h3 class="font-display text-2xl tracking-wider text-white mb-2 group-hover:text-gold transition-colors">
            KERTAS & BUKU</h3>
          <p class="font-body text-xs text-soft/60 tracking-[.1em]">Buku Tulis, HVS, Notes</p>
          <div class="mt-5 w-8 h-px bg-gold/0 group-hover:bg-gold/60 transition-all duration-500 mx-auto"></div>
        </div>

        <!-- Warna & Seni -->
        <div
          class="sr sr-d3 cat-card clip-card border border-pb/40 bg-gradient-to-br from-pb/15 to-void/80 p-8 text-center cursor-pointer group hover:border-gold/50">
          <div
            class="w-16 h-16 clip-card bg-pb/30 border border-pb/50 flex items-center justify-center mx-auto mb-5 group-hover:bg-gold/20 transition-colors">
            <svg class="w-8 h-8 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
            </svg>
          </div>
          <h3 class="font-display text-2xl tracking-wider text-white mb-2 group-hover:text-gold transition-colors">WARNA
            & SENI</h3>
          <p class="font-body text-xs text-soft/60 tracking-[.1em]">Cat, Krayon, Kuas</p>
          <div class="mt-5 w-8 h-px bg-gold/0 group-hover:bg-gold/60 transition-all duration-500 mx-auto"></div>
        </div>

        <!-- Perlengkapan Kantor -->
        <div
          class="sr sr-d4 cat-card clip-card border border-pb/40 bg-gradient-to-br from-pm/15 to-void/80 p-8 text-center cursor-pointer group hover:border-gold/50">
          <div
            class="w-16 h-16 clip-card bg-pb/30 border border-pb/50 flex items-center justify-center mx-auto mb-5 group-hover:bg-gold/20 transition-colors">
            <svg class="w-8 h-8 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
            </svg>
          </div>
          <h3 class="font-display text-2xl tracking-wider text-white mb-2 group-hover:text-gold transition-colors">
            KANTOR</h3>
          <p class="font-body text-xs text-soft/60 tracking-[.1em]">Stappler, Kalkulator, Map</p>
          <div class="mt-5 w-8 h-px bg-gold/0 group-hover:bg-gold/60 transition-all duration-500 mx-auto"></div>
        </div>
      </div>

      <div class="text-center mt-12 sr">
        <button onclick="showToast('Membuka semua kategori...')"
          class="clip-angled border border-pb/50 text-soft font-body font-semibold text-sm tracking-[.2em] uppercase px-10 py-3 hover:border-gold hover:text-gold transition-colors">
          LIHAT SEMUA KATEGORI →
        </button>
      </div>
    </div>
  </section>

  <div class="sec-div"></div>


  <!-- ════════════════════════════════════════════
     KEUNGGULAN / FEATURES
════════════════════════════════════════════ -->
  <section class="relative py-24 overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-r from-[#08001a] via-[#160440] to-[#08001a]"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-8 lg:px-16">
      <div class="text-center mb-16 sr">
        <p class="font-body text-xs tracking-[.45em] uppercase text-gold flex items-center justify-center gap-3 mb-3">
          <span class="w-5 h-px bg-gold"></span>Mengapa Kami<span class="w-5 h-px bg-gold"></span>
        </p>
        <h2 class="font-display text-[clamp(2.8rem,5vw,4.5rem)] leading-none tracking-wide">
          KEUNGGULAN <span class="grad-text">SUDIMART</span>
        </h2>
      </div>

      <div class="grid md:grid-cols-3 gap-6">

        <div
          class="sr sr-d1 clip-card border border-pb/30 bg-pb/10 p-8 group hover:border-gold/40 hover:bg-pb/20 transition-all duration-500">
          <div
            class="w-12 h-12 clip-card bg-gold/10 border border-gold/30 flex items-center justify-center mb-6 group-hover:bg-gold/20 transition-colors">
            <svg class="w-6 h-6 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 13l4 4L19 7" />
            </svg>
          </div>
          <h3 class="font-display text-2xl tracking-wider text-white mb-3 group-hover:text-gold transition-colors">
            PRODUK LENGKAP</h3>
          <p class="font-ui text-sm leading-[1.8] text-soft/70 font-light">Lebih dari 5.000 produk ATK tersedia, mulai
            dari kebutuhan sekolah dasar hingga perlengkapan kantor profesional.</p>
        </div>

        <div
          class="sr sr-d2 clip-card border border-pb/30 bg-pb/10 p-8 group hover:border-gold/40 hover:bg-pb/20 transition-all duration-500">
          <div
            class="w-12 h-12 clip-card bg-gold/10 border border-gold/30 flex items-center justify-center mb-6 group-hover:bg-gold/20 transition-colors">
            <svg class="w-6 h-6 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
          </div>
          <h3 class="font-display text-2xl tracking-wider text-white mb-3 group-hover:text-gold transition-colors">
            PENGIRIMAN CEPAT</h3>
          <p class="font-ui text-sm leading-[1.8] text-soft/70 font-light">Pesanan diproses dalam 24 jam dan dikirim ke
            seluruh Indonesia dengan layanan ekspedisi terpercaya dan terjamin.</p>
        </div>

        <div
          class="sr sr-d3 clip-card border border-pb/30 bg-pb/10 p-8 group hover:border-gold/40 hover:bg-pb/20 transition-all duration-500">
          <div
            class="w-12 h-12 clip-card bg-gold/10 border border-gold/30 flex items-center justify-center mb-6 group-hover:bg-gold/20 transition-colors">
            <svg class="w-6 h-6 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
            </svg>
          </div>
          <h3 class="font-display text-2xl tracking-wider text-white mb-3 group-hover:text-gold transition-colors">
            PEMBAYARAN AMAN</h3>
          <p class="font-ui text-sm leading-[1.8] text-soft/70 font-light">Berbagai metode pembayaran tersedia dengan
            keamanan transaksi yang terjamin dan sistem enkripsi terkini.</p>
        </div>

      </div>
    </div>
  </section>

  <div class="sec-div"></div>


  <!-- ════════════════════════════════════════════
     FAQ
════════════════════════════════════════════ -->
  <section id="faq" class="relative py-28 overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-b from-[#08001a] via-[#0f0228] to-[#08001a]"></div>

    <div class="relative z-10 max-w-4xl mx-auto px-8 lg:px-16">

      <div class="text-center mb-16 sr">
        <p class="font-body text-xs tracking-[.45em] uppercase text-gold flex items-center justify-center gap-3 mb-3">
          <span class="w-5 h-px bg-gold"></span>Pertanyaan Umum<span class="w-5 h-px bg-gold"></span>
        </p>
        <h2 class="font-display text-[clamp(2.8rem,5vw,4.5rem)] leading-none tracking-wide">
          FAQ
        </h2>
      </div>

      <div class="space-y-3" id="faq-list">

        <div
          class="acc-item sr clip-card border border-pb/40 bg-pb/10 overflow-hidden hover:border-pb/60 transition-colors">
          <button class="w-full flex items-center justify-between p-6 text-left" onclick="toggleAcc(this)">
            <span class="font-ui font-semibold text-base text-white tracking-wide">Apakah Sudimart melayani pembelian
              dalam jumlah besar (grosir)?</span>
            <span class="acc-icon text-gold text-2xl font-light flex-shrink-0 ml-4">+</span>
          </button>
          <div class="acc-content px-6 pb-6">
            <p class="font-ui text-sm leading-[1.9] text-soft/70 font-light">Ya! Sudimart melayani pembelian grosir
              dengan harga spesial. Hubungi tim kami melalui WhatsApp atau email untuk mendapatkan penawaran harga
              khusus untuk pembelian dalam jumlah besar.</p>
          </div>
        </div>

        <div
          class="acc-item sr sr-d1 clip-card border border-pb/40 bg-pb/10 overflow-hidden hover:border-pb/60 transition-colors">
          <button class="w-full flex items-center justify-between p-6 text-left" onclick="toggleAcc(this)">
            <span class="font-ui font-semibold text-base text-white tracking-wide">Berapa lama waktu pengiriman ke
              seluruh Indonesia?</span>
            <span class="acc-icon text-gold text-2xl font-light flex-shrink-0 ml-4">+</span>
          </button>
          <div class="acc-content px-6 pb-6">
            <p class="font-ui text-sm leading-[1.9] text-soft/70 font-light">Pengiriman ke Pulau Jawa biasanya 1-3 hari
              kerja, sedangkan luar Jawa 3-7 hari kerja tergantung lokasi dan ekspedisi yang dipilih. Kami bekerja sama
              dengan JNE, J&T, SiCepat, dan Pos Indonesia.</p>
          </div>
        </div>

        <div
          class="acc-item sr sr-d2 clip-card border border-pb/40 bg-pb/10 overflow-hidden hover:border-pb/60 transition-colors">
          <button class="w-full flex items-center justify-between p-6 text-left" onclick="toggleAcc(this)">
            <span class="font-ui font-semibold text-base text-white tracking-wide">Apakah bisa melakukan retur atau
              pengembalian barang?</span>
            <span class="acc-icon text-gold text-2xl font-light flex-shrink-0 ml-4">+</span>
          </button>
          <div class="acc-content px-6 pb-6">
            <p class="font-ui text-sm leading-[1.9] text-soft/70 font-light">Tentu! Kami memiliki kebijakan retur selama
              7 hari setelah barang diterima untuk produk yang cacat atau tidak sesuai pesanan. Proses retur mudah dan
              dipandu oleh tim customer service kami.</p>
          </div>
        </div>

        <div
          class="acc-item sr sr-d3 clip-card border border-pb/40 bg-pb/10 overflow-hidden hover:border-pb/60 transition-colors">
          <button class="w-full flex items-center justify-between p-6 text-left" onclick="toggleAcc(this)">
            <span class="font-ui font-semibold text-base text-white tracking-wide">Metode pembayaran apa saja yang
              tersedia?</span>
            <span class="acc-icon text-gold text-2xl font-light flex-shrink-0 ml-4">+</span>
          </button>
          <div class="acc-content px-6 pb-6">
            <p class="font-ui text-sm leading-[1.9] text-soft/70 font-light">Kami menerima berbagai metode pembayaran:
              Transfer Bank (BCA, Mandiri, BNI, BRI), dompet digital (GoPay, OVO, Dana, ShopeePay), QRIS, Kartu Kredit,
              dan COD (bayar di tempat) untuk area tertentu.</p>
          </div>
        </div>

      </div>
    </div>
  </section>

  <div class="sec-div"></div>


  <!-- ════════════════════════════════════════════
     FOOTER / KONTAK
════════════════════════════════════════════ -->
  <footer id="kontak" class="relative pt-20 pb-8 overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-b from-[#08001a] to-[#04000e]"></div>
    <div class="absolute inset-0 grid-tex opacity-20"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-8 lg:px-16">

      <div class="grid lg:grid-cols-3 gap-12 pb-16 border-b border-pb/30">

        <!-- Brand -->
        <div class="sr left">
          <p class="font-display text-4xl tracking-[.15em] text-white mb-2">SUDI<span class="text-gold">MART</span></p>
          <p class="font-body text-xs tracking-[.2em] uppercase text-soft/50 mb-5">Setiap Peralatan Yang Anda Butuhkan
          </p>
          <p class="font-ui text-sm leading-[1.9] text-soft/60 font-light max-w-xs">
            Mitra andalan kebutuhan warga sekolah, menyediakan berbagai alat tulis, keperluan belajar, serta layanan
            pendukung sekolah yang cepat dan berkualitas.
          </p>
          <div class="flex gap-3 mt-6">
            <a href="https://www.instagram.com/linshaufeng?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
              class="w-9 h-9 clip-card border border-pb/50 flex items-center justify-center text-soft/60 hover:text-gold hover:border-gold/50 transition-colors">
              <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                <path
                  d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
              </svg>
            </a>
            <a href="https://www.tiktok.com/@amotmotamot?is_from_webapp=1&sender_device=pc"
              class="w-9 h-9 clip-card border border-pb/50 flex items-center justify-center text-soft/60 hover:text-gold hover:border-gold/50 transition-colors">
              <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                <path
                  d="M19.59 6.69a4.83 4.83 0 01-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 01-2.88 2.5 2.89 2.89 0 01-2.89-2.89 2.89 2.89 0 012.89-2.89c.28 0 .54.04.79.1V9.01a6.27 6.27 0 00-.79-.05 6.34 6.34 0 00-6.34 6.34 6.34 6.34 0 006.34 6.34 6.34 6.34 0 006.33-6.34V8.69a8.2 8.2 0 004.79 1.53V6.77a4.86 4.86 0 01-1.02-.08z" />
              </svg>
            </a>
            <a href="https://wa.me/6281346099722"
              class="w-9 h-9 clip-card border border-pb/50 flex items-center justify-center text-soft/60 hover:text-gold hover:border-gold/50 transition-colors">
              <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                <path
                  d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z" />
                <path
                  d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm0 22.5C6.201 22.5 1.5 17.799 1.5 12S6.201 1.5 12 1.5 22.5 6.201 22.5 12 17.799 22.5 12 22.5z" />
              </svg>
            </a>
          </div>
        </div>

        <!-- Quick links -->
        <div class="sr">
          <h4 class="font-display text-lg tracking-widest text-gold mb-6">NAVIGASI</h4>
          <ul class="space-y-3">
            <li><a href="#tentang"
                class="font-body text-sm tracking-[.12em] text-soft/60 hover:text-gold transition-colors uppercase">Tentang
                Kami</a></li>
            <li><a href="#visi-misi"
                class="font-body text-sm tracking-[.12em] text-soft/60 hover:text-gold transition-colors uppercase">Visi
                &amp; Misi</a></li>
            <li><a href="#kategori"
                class="font-body text-sm tracking-[.12em] text-soft/60 hover:text-gold transition-colors uppercase">Kategori
                Produk</a></li>
            <li><a href="#faq"
                class="font-body text-sm tracking-[.12em] text-soft/60 hover:text-gold transition-colors uppercase">FAQ</a>
            </li>
            <li><a href="#" onclick="showToast('Kebijakan privasi...')"
                class="font-body text-sm tracking-[.12em] text-soft/60 hover:text-gold transition-colors uppercase">Kebijakan
                Privasi</a></li>
          </ul>
        </div>

        <!-- Contact -->
        <div class="sr right">
          <h4 class="font-display text-lg tracking-widest text-gold mb-6">HUBUNGI KAMI</h4>
          <ul class="space-y-4">
            <li class="flex items-center gap-3">
              <svg class="w-4 h-4 text-pb flex-shrink-0" fill="currentColor" viewBox="0 0 24 24">
                <path
                  d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069z" />
              </svg>
              <span class="font-body text-sm text-soft/70 tracking-[.1em]">@sudi_martt</span>
            </li>
            <li class="flex items-center gap-3">
              <svg class="w-4 h-4 text-pb flex-shrink-0" fill="currentColor" viewBox="0 0 24 24">
                <path
                  d="M19.59 6.69a4.83 4.83 0 01-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 01-2.88 2.5 2.89 2.89 0 01-2.89-2.89 2.89 2.89 0 012.89-2.89c.28 0 .54.04.79.1V9.01a6.27 6.27 0 00-.79-.05 6.34 6.34 0 00-6.34 6.34 6.34 6.34 0 006.34 6.34 6.34 6.34 0 006.33-6.34V8.69a8.2 8.2 0 004.79 1.53V6.77a4.86 4.86 0 01-1.02-.08z" />
              </svg>
              <span class="font-body text-sm text-soft/70 tracking-[.1em]">sm.mart</span>
            </li>
            <li class="flex items-center gap-3">
              <svg class="w-4 h-4 text-pb flex-shrink-0" fill="currentColor" viewBox="0 0 24 24">
                <path
                  d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z" />
              </svg>
              <span class="font-body text-sm text-soft/70 tracking-[.1em]">+62 812 5609 8744</span>
            </li>
            <li class="flex items-center gap-3">
              <svg class="w-4 h-4 text-pb flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
              </svg>
              <span class="font-body text-sm text-soft/70 tracking-[.1em]">sudi-M</span>
            </li>
          </ul>
        </div>

      </div>

      <!-- Bottom bar -->
      <div class="pt-6 flex flex-col md:flex-row items-center justify-between gap-3">
        <p class="font-body text-xs tracking-[.15em] text-soft/30 uppercase">© 2025 Sudimart. All Rights Reserved.</p>
        <p class="font-body text-xs tracking-[.15em] text-soft/30 uppercase flex items-center gap-2">
          <span class="w-1 h-1 rounded-full bg-gold/40"></span>
          E-Commerce ATK Pertama di Indonesia
          <span class="w-1 h-1 rounded-full bg-gold/40"></span>
        </p>
      </div>
    </div>
  </footer>

  <!-- Toast -->
  <div id="toast">Sudimart ✦</div>


  <script>
    /* ─── Custom cursor ─────────────────────── */
    const cur = document.getElementById("cur");
    const curR = document.getElementById("cur-r");
    let mx = 0,
      my = 0,
      rx = 0,
      ry = 0;
    document.addEventListener("mousemove", (e) => {
      mx = e.clientX;
      my = e.clientY;
    });
    (function animCur() {
      rx += (mx - rx) * 0.18;
      ry += (my - ry) * 0.18;
      cur.style.left = mx + "px";
      cur.style.top = my + "px";
      curR.style.left = rx + "px";
      curR.style.top = ry + "px";
      requestAnimationFrame(animCur);
    })();
    document.querySelectorAll("a,button").forEach((el) => {
      el.addEventListener("mouseenter", () => {
        cur.style.width = "20px";
        cur.style.height = "20px";
        curR.style.width = "48px";
        curR.style.height = "48px";
      });
      el.addEventListener("mouseleave", () => {
        cur.style.width = "10px";
        cur.style.height = "10px";
        curR.style.width = "32px";
        curR.style.height = "32px";
      });
    });

    /* ─── Progress bar ──────────────────────── */
    const prog = document.getElementById("progress");
    window.addEventListener("scroll", () => {
      const pct =
        (window.scrollY /
          (document.documentElement.scrollHeight - window.innerHeight)) *
        100;
      prog.style.width = pct + "%";
    });

    /* ─── Navbar scroll bg ──────────────────── */
    const nb = document.getElementById("navbar");
    window.addEventListener("scroll", () => {
      if (window.scrollY > 60) {
        nb.style.background = "rgba(8,0,26,.92)";
        nb.style.backdropFilter = "blur(16px)";
        nb.style.borderBottom = "1px solid rgba(107,31,212,.25)";
      } else {
        nb.style.background = "transparent";
        nb.style.backdropFilter = "none";
        nb.style.borderBottom = "none";
      }
    });

    /* ─── Scroll reveal ─────────────────────── */
    const srEls = document.querySelectorAll(".sr");
    const io = new IntersectionObserver(
      (entries) => {
        entries.forEach((e) => {
          if (e.isIntersecting) {
            e.target.classList.add("on");
            io.unobserve(e.target);
          }
        });
      },
      { threshold: 0.12 },
    );
    srEls.forEach((el) => io.observe(el));

    /* ─── Counter animation ─────────────────── */
    function animCount(el, target, duration = 1800) {
      let start = 0;
      const step = (timestamp) => {
        if (!start) start = timestamp;
        const prog = Math.min((timestamp - start) / duration, 1);
        el.textContent = Math.floor(prog * target).toLocaleString("id-ID");
        if (prog < 1) requestAnimationFrame(step);
        else el.textContent = target.toLocaleString("id-ID");
      };
      requestAnimationFrame(step);
    }
    const statNums = document.querySelectorAll(".stat-num");
    const statIO = new IntersectionObserver(
      (entries) => {
        entries.forEach((e) => {
          if (e.isIntersecting) {
            animCount(e.target, parseInt(e.target.dataset.target));
            statIO.unobserve(e.target);
          }
        });
      },
      { threshold: 0.5 },
    );
    statNums.forEach((el) => statIO.observe(el));

    /* ─── Marquee init ──────────────────────── */
    const mqInner = document.querySelector(".marquee-inner");
    const tmpl = document.getElementById("mq-t");
    const clone1 = tmpl.content.cloneNode(true);
    const clone2 = tmpl.content.cloneNode(true);
    mqInner.appendChild(clone1);
    mqInner.appendChild(clone2);

    /* ─── Mobile menu ───────────────────────── */
    let mobOpen = false;
    function toggleMob() {
      mobOpen = !mobOpen;
      const menu = document.getElementById("mob-menu");
      menu.classList.toggle("open", mobOpen);
      document.getElementById("h1").style.transform = mobOpen
        ? "rotate(45deg) translate(4px,5px)"
        : "";
      document.getElementById("h3").style.transform = mobOpen
        ? "rotate(-45deg) translate(4px,-5px)"
        : "";
      document.getElementById("h2").style.opacity = mobOpen ? "0" : "1";
      document.body.style.overflow = mobOpen ? "hidden" : "";
    }

    /* ─── Accordion ─────────────────────────── */
    function toggleAcc(btn) {
      const item = btn.closest(".acc-item");
      const content = item.querySelector(".acc-content");
      const isOpen = item.classList.contains("active");
      document.querySelectorAll(".acc-item.active").forEach((i) => {
        i.classList.remove("active");
        i.querySelector(".acc-content").classList.remove("open");
      });
      if (!isOpen) {
        item.classList.add("active");
        content.classList.add("open");
      }
    }

    /* ─── Toast ─────────────────────────────── */
    let toastT;
    function showToast(msg) {
      const t = document.getElementById("toast");
      t.textContent = msg + " ✦";
      clearTimeout(toastT);
      t.classList.add("show");
      toastT = setTimeout(() => t.classList.remove("show"), 2800);
    }

    /* ─── Parallax on scroll ────────────────── */
    window.addEventListener("scroll", () => {
      const sy = window.scrollY;
      document.querySelectorAll(".float").forEach((el, i) => {
        el.style.transform += ` translateY(${sy * (0.03 + i * 0.01)}px)`;
      });
    });
  </script>
</body>

</html>