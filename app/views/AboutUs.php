<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sudimart – About Us</title>

  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=DM+Sans:wght@400;500;600&display=swap" rel="stylesheet" />
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            brand: {
              purple: '#4B0082',
              violet: '#6A0DAD',
              gold:   '#F5C518',
              cream:  '#FFF8E7',
            }
          },
          fontFamily: {
            display: ['"Playfair Display"', 'serif'],
            body:    ['"DM Sans"', 'sans-serif'],
          },
          keyframes: {
            fadeUp: {
              '0%':   { opacity: '0', transform: 'translateY(28px)' },
              '100%': { opacity: '1', transform: 'translateY(0)' },
            },
            scaleIn: {
              '0%':   { opacity: '0', transform: 'scale(0.88)' },
              '100%': { opacity: '1', transform: 'scale(1)' },
            },
          },
          animation: {
            fadeUp:  'fadeUp 0.7s ease both',
            scaleIn: 'scaleIn 0.6s ease both',
          },
        }
      }
    }
  </script>
  <style>
    body { font-family: 'DM Sans', sans-serif; }
    .delay-100 { animation-delay: .10s }
    .delay-200 { animation-delay: .20s }
    .delay-300 { animation-delay: .30s }
    .delay-400 { animation-delay: .40s }
    .delay-500 { animation-delay: .50s }
    .pencil-bg {
      background-image: url('https://images.unsplash.com/photo-1513542789411-b6a5d4f31634?w=900&auto=format&fit=crop');
      background-size: cover;
      background-position: center;
    }
    .bookshelf-bg {
      background-image: url('https://images.unsplash.com/photo-1507842217343-583bb7270b66?w=900&auto=format&fit=crop');
      background-size: cover;
      background-position: center;
    }
  </style>
</head>
<body>
 
  <!-- ── NAV ── -->
  <nav class="flex justify-between items-center px-8 py-4 bg-brand-purple/90 backdrop-blur sticky top-0 z-50 border-b border-white/10">
    <span class="font-display text-xl font-bold tracking-wide text-brand-gold">Sudimart</span>
    <a href="#" class="text-sm font-body font-medium text-white/80 hover:text-brand-gold transition-colors">About us</a>
  </nav>
 
  <!-- ── HERO ── -->
  <section class="text-center py-20 px-6 bg-linear-to-b from-brand-purple to-brand-violet">
    <p class="text-xs uppercase tracking-[.35em] text-yellow-300 font-body font-semibold mb-3 animate-fadeUp">About Us</p>
    <h1 class="font-display text-4xl md:text-5xl font-black leading-tight text-yellow-300 animate-fadeUp delay-100">
      ATK LENGKAP,<br/>BELANJA PRAKTIS
    </h1>
 
    <!-- badge -->
    <div class="inline-block mt-6 px-6 py-2 border-2 border-yellow-300 rounded-full animate-scaleIn delay-200">
      <span class="font-display font-bold text-yellow-300 tracking-widest text-sm">SUDIMART</span>
    </div>
 
    <!-- description -->
    <p class="mt-8 max-w-md mx-auto text-white text-sm leading-relaxed font-body animate-fadeUp delay-300">
      Sudimart hadir dengan lebih dari 2+ produk ATK pilihan, telah dipercaya oleh 100K+ pelanggan, memiliki tingkat kepuasan pelanggan hingga 98%, serta mampu memproses pesanan dengan cepat dalam waktu kurang dari 24 jam.
    </p>
 
    <!-- stats -->
    <div class="mt-12 grid grid-cols-2 md:grid-cols-4 gap-6 max-w-2xl mx-auto animate-fadeUp delay-400">
      <div class="bg-white/10 backdrop-blur rounded-2xl py-6 px-4 border border-yellow-300 hover:border-brand-gold transition-colors">
        <p class="font-display text-3xl font-black text-yellow-300">100K+</p>
        <p class="text-xs text-yellow-300 mt-1 font-body">Users</p>
      </div>
      <div class="bg-white/10 backdrop-blur rounded-2xl py-6 px-4 border border-yellow-300 hover:border-brand-gold transition-colors">
        <p class="font-display text-3xl font-black text-yellow-300">2+</p>
        <p class="text-xs text-yellow-300 mt-1 font-body">Products</p>
      </div>
      <div class="bg-white/10 backdrop-blur rounded-2xl py-6 px-4 border border-yellow-300 hover:border-brand-gold transition-colors">
        <p class="font-display text-3xl font-black text-yellow-300">98%</p>
        <p class="text-xs text-yellow-300 mt-1 font-body">Customer's Satisfaction</p>
      </div>
      <div class="bg-white/10 backdrop-blur rounded-2xl py-6 px-4 border border-yellow-300 hover:border-brand-gold transition-colors">
        <p class="font-display text-3xl font-black text-yellow-300">&lt; 24h</p>
        <p class="text-xs text-yellow-300 mt-1 font-body">Delivery</p>
      </div>
    </div>
  </section>
 
  <!-- ── MEET OUR WORKERS ── -->
  <section class="bg-brand-cream py-16 px-6 text-yellow-300">
    <h2 class="font-display text-3xl font-black text-center mb-10">Meet our Workers</h2>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6 max-w-3xl mx-auto">
 
      <!-- Worker Card -->
      <div class="flex flex-col items-center text-center group">
        <div class="w-24 h-24 rounded-2xl overflow-hidden border-4 border-brand-purple/20 group-hover:border-brand-gold transition-colors shadow-lg bg-gray-200">
          <img src="" alt="Amos" class="w-full h-full object-cover" />
        </div>
        <p class="mt-3 text-sm font-body text-yellow-300">Amos Mikhael</p>
        <p class="font-display font-bold text-white text-base">DESIGNER</p>
      </div>
 
      <div class="flex flex-col items-center text-center group">
        <div class="w-24 h-24 rounded-2xl overflow-hidden border-4 border-brand-purple/20 group-hover:border-brand-gold transition-colors shadow-lg bg-gray-200">
          <img src="" alt="Gavin" class="w-full h-full object-cover" />
        </div>
        <p class="mt-3 text-sm font-body text-yellow-300">Gavin Lionel</p>
        <p class="font-display font-bold text-white text-base">DESIGNER</p>
      </div>
 
      <div class="flex flex-col items-center text-center group">
        <div class="w-24 h-24 rounded-2xl overflow-hidden border-4 border-brand-purple/20 group-hover:border-brand-gold transition-colors shadow-lg bg-gray-200">
          <img src="" alt="Vido" class="w-full h-full object-cover" />
        </div>
        <p class="mt-3 text-sm font-body text-yellow-300">Vido Faresky</p>
        <p class="font-display font-bold text-white text-base">DEVELOPER</p>
      </div>
 
      <div class="flex flex-col items-center text-center group">
        <div class="w-24 h-24 rounded-2xl overflow-hidden border-4 border-brand-purple/20 group-hover:border-brand-gold transition-colors shadow-lg bg-gray-200">
          <img src="" alt="Davin" class="w-full h-full object-cover" />
        </div>
        <p class="mt-3 text-sm font-body text-yellow-300">Davin Aurelio</p>
        <p class="font-display font-bold text-white text-base">DEVELOPER</p>
      </div>
 
    </div>
  </section>
 
  <!-- ── BACKGROUND ── -->
  <section class="relative overflow-hidden">
    <!-- pencil bg left -->
    <div class="pencil-bg absolute inset-0 opacity-30"></div>
    <div class="absolute inset-0 from-brand-purple/95 via-brand-purple/80 to-brand-purple/40"></div>
 
    <div class="relative z-10 max-w-5xl mx-auto px-8 py-20 flex flex-col md:flex-row gap-10 items-center">
      <!-- text right side -->
      <div class="md:w-1/2 md:ml-auto bg-white/95 text-brand-purple rounded-3xl p-8 shadow-2xl">
        <h2 class="font-display text-3xl font-black mb-4">Background</h2>
        <p class="font-body text-sm leading-relaxed text-gray-700">
          Sudimart hadir sebagai solusi modern untuk memenuhi kebutuhan alat tulis kantor (ATK), perlengkapan sekolah, dan kebutuhan kerja sehari-hari secara online. Dengan perkembangan teknologi digital yang semakin pesat, Sudimart dibangun untuk memberikan kemudahan, kecepatan, dan kenyamanan dalam berbelanja tanpa harus datang langsung ke toko. Melalui platform ini, pelanggan dapat menemukan berbagai produk ATK yang lengkap, berkualitas, dan terjangkau dalam satu tempat.
        </p>
      </div>
    </div>
  </section>
 
  <!-- ── WHY CHOOSE US ── -->
  <section class="relative overflow-hidden">
    <div class="bookshelf-bg absolute inset-0 opacity-25"></div>
    <div class="absolute inset-0 bg-brand-violet/90"></div>
 
    <div class="relative z-10 max-w-5xl mx-auto px-8 py-20 flex flex-col md:flex-row gap-10 items-center">
      <!-- text left -->
      <div class="md:w-1/2 bg-white/95 text-brand-purple rounded-3xl p-8 shadow-2xl">
        <p class="font-body text-sm leading-relaxed text-gray-700">
          Sudimart memiliki berbagai keunggulan yang menjadikannya pilihan tepat untuk memenuhi kebutuhan ATK. Kami menyediakan produk yang lengkap dan berkualitas, harga yang terjangkau dan kompetitif, proses pemesanan yang mudah dan cepat, serta layanan yang aman dan terpercaya. Dengan tampilan website yang sederhana dan nyaman digunakan, Sudimart hadir untuk memberikan pengalaman belanja online yang lebih praktis bagi pelajar, mahasiswa, maupun kebutuhan kantor.
        </p>
      </div>
      <!-- heading right -->
      <div class="md:w-1/2 text-center md:text-left">
        <h2 class="font-display text-4xl md:text-5xl font-black text-white leading-tight">Why<br/>Choose<br/><span class="text-brand-gold">Us</span></h2>
      </div>
    </div>
  </section>
 
  <!-- ── PARTNER ── -->
  <section class="bg-brand-gold py-12 text-center">
    <p class="font-body text-brand-purple font-semibold text-sm tracking-widest uppercase mb-4">We partner with the best</p>
    <div class="inline-flex items-center gap-1">
      <span class="font-display text-5xl font-black text-brand-purple tracking-tight">KENKO</span>
      <span class="text-brand-purple font-display text-2xl font-black align-super">®</span>
    </div>
  </section>
 
  <!-- ── FOOTER ── -->
  <footer class="bg-brand-purple border-t border-white/10 py-6 text-center">
    <p class="text-xs text-white/30 font-body">© 2026 Sudimart. All rights reserved.</p>
  </footer>
 
</body>
</html>