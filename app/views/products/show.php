<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product Detail</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 font-sans">

  <!-- Navbar -->
  <nav class="flex justify-between items-center px-8 py-4 bg-indigo-600 text-white">
    <div class="w-8 h-8 bg-yellow-300 rounded-full flex items-center justify-center text-sm font-bold text-indigo-700">
      SM
    </div>
    <a href="#" class="hover:underline">About us</a>
  </nav>

  <!-- Product Section -->
  <section class="max-w-5xl mx-auto mt-10 bg-white rounded-2xl shadow-lg p-20 grid md:grid-cols-2 gap-6">

    <!-- Left (Image) -->
    <div>
      <img src="https://via.placeholder.com/200x250" class="mx-auto mb-4">

      <!-- Thumbnails -->
      <div class="flex gap-3 justify-center">
        <img src="https://via.placeholder.com/60" class="border p-1 rounded-md">
        <img src="https://via.placeholder.com/60" class="border p-1 rounded-md">
        <img src="https://via.placeholder.com/60" class="border p-1 rounded-md">
        <img src="https://via.placeholder.com/60" class="border p-1 rounded-md">
      </div>
    </div>

    <!-- Right (Detail) -->
    <div class="flex flex-col justify-between border-l-2 border-indigo-500 gap-20 pl-6 w-200">

      <div>
        <h2 class="text-xl font-semibold mb-2">Easy Gel Premium 1.0mm</h2>
        <p class="text-gray-500 text-sm mb-6">
          Kesayangan Gepin sayang gel
        </p>

        <!-- Quantity -->
        <div class="flex items-center gap-3 mb-6">
          <button class="w-8 h-8 border rounded-full">-</button>
          <span>1</span>
          <button class="w-8 h-8 border rounded-full">+</button>
        </div>
      </div>

      <!-- Buttons -->
      <div class="flex gap-4">
        <button class="px-4 py-2 border border-indigo-500 text-indigo-500 rounded-lg hover:bg-indigo-50">
          Beli Sekarang
        </button>
        <button class="px-4 py-2 bg-indigo-500 text-white rounded-lg hover:bg-indigo-600">
          Keranjang
        </button>
      </div>

    </div>
  </section>

  <!-- Deskripsi -->
  <section class="max-w-5xl mx-auto mt-10">
    <h3 class="text-lg font-semibold border-b-2 border-indigo-400 pb-2 mb-4">
      Deskripsi
    </h3>

    <p class="text-gray-600 mb-4">
      Kesayangan Gepin sayang gel
    </p>

    <div class="grid md:grid-cols-1 text-sm text-gray-700 gap-y-2">
      <p>Nama produk : Easy Gel Premium 1.0mm</p>
      <p>Kategori : Gel</p>
      <p>Merek : Pt. Indosat</p>
      <p>Kondisi : Baru</p>
      <p>Garansi : Sampai rusak</p>
      <p>Cara Pengiriman : Chat dulu lewat gepin</p>
      <p>Jaminan pengiriman : 1 Tahun</p>
    </div>
  </section>

  <!-- Footer -->
  <footer class="mt-16 bg-indigo-700 text-white py-10 px-10">
    <div class="max-w-5xl mx-auto grid md:grid-cols-2 gap-10">

      <!-- About -->
      <div>
        <h2 class="text-lg font-semibold mb-3">About US</h2>
        <p class="text-sm text-indigo-100">
          Sudi Mart adalah mitra andalan kebutuhan warga sekolah,
          menyediakan berbagai alat tulis, keperluan belajar,
          serta layanan pendukung sekolah yang cepat dan berkualitas.
        </p>
      </div>

      <!-- Contact -->
      <div>
        <h2 class="text-lg font-semibold mb-3">Contact Us</h2>
        <p class="text-sm text-indigo-100">
          IG : @sudi_martt <br>
          TT : sm.mart <br>
          X : sudi-M <br>
          WA : +62 812 5609 8744
        </p>
      </div>

    </div>
  </footer>

</body>
</html>