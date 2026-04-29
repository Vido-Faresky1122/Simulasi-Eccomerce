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