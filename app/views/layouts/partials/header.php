<?php
session_start();
?>

<header class="bg-[#3a0d7a] shadow-sm fixed top-0 left-0 right-0 z-500 transition-all duration-500">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between items-center h-16">

      <div class="shrink-0">
        <a href="/" class="font-display text-3xl tracking-[.15em] text-white font-semibold">
          SUDI<span class="text-[#f5c842] font-semibold">MART</span>
        </a>
      </div>

      <?php
      if (session_status() === PHP_SESSION_NONE) {
        session_start();
      }
      ?>

      <?php if (isset($_SESSION['user_id'])): ?>

        <?php if ($_SESSION['role'] === 'admin'): ?>

          <button onclick="window.location.href='/admin/profile'" class="bg-black text-white px-4 py-2 rounded">
            Profile
          </button>

        <?php else: ?>

          <button onclick="window.location.href='/users/show/<?= $_SESSION['user_id'] ?>'"
            class="bg-black text-white px-4 py-2 rounded">
            Profile
          </button>

        <?php endif; ?>

      <?php endif; ?>

      <?php if (isset($_SESSION['user_id'])): ?>

        <button onclick="window.location.href='/logout'" class="bg-red-500 text-white px-4 py-2 rounded">
          Logout
        </button>

      <?php endif; ?>

      <div class="flex items-center gap-4">
        <button onclick="window.location.href='/products'"
          class="hidden lg:block -skew-x-12 bg-[#f5c842] text-[#08001a] font-body font-bold text-sm tracking-[.2em] uppercase px-6 py-2.5 hover:bg-white hover:scale-105 active:scale-95 transition-all duration-300 shadow-lg hover:shadow-xl">
          SHOP NOW
        </button>
      </div>
    </div>
  </div>
</header>