<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <link href="/css/output.css" rel="stylesheet">
</head>

<body class="bg-gray-100 min-h-screen flex flex-col bg-linear-to-b from-[#4C128B] to-[#814FBE]">

  <header class="bg-[#4C128B] shadow-sm z-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between items-center h-16">

        <div class="shrink-0">
          <a href="/" class="text-2xl font-bold text-yellow-300">Sudi Mart</a>
        </div>

        <div class="flex items-center space-x-4">
          <a href="#" class="hover:underline text-m text-yellow-300">About us</a>
        </div>
      </div>
    </div>
  </header>

 <main class="flex-1 px-6 py-6 max-w-4xl mx-auto w-full space-y-5">
 
    <!-- My Profile Card -->
    <div class="text-yellow-300 rounded-2xl p-7 shadow-xl">
      <h2 class="text-sudi-yellow font-bold text-lg">My Profile</h2>
      <p class="text-yellow-300 text-sm mb-3">Manage your account</p>
      <hr class="text-yellow-300 mb-6"/>
 
      <div class="flex gap-8 items-start">
        <!-- Avatar + Button -->
        <div class="flex flex-col items-center gap-4 min-w-[140px]">
          <img
            src="https://i.pravatar.cc/100?img=12"
            alt="Profile Photo"
            class="w-32 h-32 rounded-full object-cover border-[3px] border-black shadow-lg"
          />
          <button class="text-yellow-300 text-black text-sm font-bold px-5 py-2 rounded-full hover:brightness-90 transition">
            Change Photo
          </button>
        </div>
 
        <!-- Info -->
        <div class="flex-1 space-y-4 text-base pt-2">
          <div class="flex">
            <span class="text-yellow-300 w-40 shrink-0">Name</span>
            <span class="text-yellow-300 font-semibold">: Arianto Widodo Putri</span>
          </div>
          <div class="flex">
            <span class="text-yellow-300 w-40 shrink-0">Email</span>
            <span class="text-yellow-300 font-semibold">: Ari*****@gmail.com</span>
          </div>
          <div class="flex">
            <span class="text-yellow-300 w-40 shrink-0">Gender</span>
            <span class="text-yellow-300 font-semibold">: Male</span>
          </div>
          <div class="flex">
            <span class="text-yellow-300 w-40 shrink-0">Tanggal Lahir</span>
            <span class="text-yellow-300 font-semibold">: 17 Agustus 1945</span>
          </div>
        </div>
      </div>
    </div>
 
    <!-- History Card -->
    <div class="bg-sudi-card rounded-2xl p-7 shadow-xl">
      <h2 class="text-yellow-300 font-bold text-lg">History</h2>
      <p class="text-yellow-300 text-sm mb-3">Manage your history</p>
      <hr class="text-yellow-300 mb-4"/>
 
      <!-- Item 1 -->
      <div class="flex items-center gap-4 py-3">
        <input type="checkbox" checked class="w-5 h-5 accent-sudi-yellow shrink-0 cursor-pointer rounded"/>
        <div class="w-20 h-20 rounded-xl bg-white overflow-hidden shrink-0 border border-purple-300 flex items-center justify-center">
          <img src="https://placehold.co/80x80/f8f8f8/444?text=Gel" alt="Easy Gel" class="w-full h-full object-cover"/>
        </div>
        <div class="flex-1 min-w-0">
          <p class="text-yellow-300 text-sm font-semibold">Easy Gel Premium 1.0mm</p>
          <p class="text-yellow-300 text-sm mt-1">27/02/26</p>
        </div>
        <div class="text-right shrink-0">
          <p class="text-yellow-300 text-sm">unit</p>
          <p class="text-yellow-300 font-bold text-base">1</p>
        </div>
      </div>
 
      <div class="border-t text-yellow-300 my-1"></div>
 
      <!-- Item 2 -->
      <div class="flex items-center gap-4 py-3">
        <input type="checkbox" class="w-5 h-5 accent-sudi-yellow shrink-0 cursor-pointer rounded"/>
        <div class="w-20 h-20 rounded-xl bg-white overflow-hidden shrink-0 border border-purple-300 flex items-center justify-center">
          <img src="https://placehold.co/80x80/f8f8f8/444?text=Pen" alt="Correction Pen" class="w-full h-full object-cover"/>
        </div>
        <div class="flex-1 min-w-0">
          <p class="text-yellow-300 text-sm font-semibold">CORRECTION PEN KE-01</p>
          <p class="text-yellow-300 text-sm mt-1">25/02/26</p>
        </div>
        <div class="text-right shrink-0">
          <p class="text-yellow-300 text-sm">unit</p>
          <p class="text-yellow-300 font-bold text-base">1</p>
        </div>
      </div>
 
      <!-- See more -->
      <div class="text-right mt-3 mb-4">
        <a href="#" class="text-yellow-300 text-sm font-medium hover:underline">see more</a>
      </div>
 
      <!-- Bottom Actions -->
      <div class="flex justify-between items-center pt-3 border-t border-purple-600">
        <label class="flex items-center gap-2 text-yellow-300 text-sm cursor-pointer select-none">
          <input type="checkbox" class="w-5 h-5 rounded accent-sudi-yellow"/>
          Pilih Semua
        </label>
        <button class="text-yellow-300 text-black text-sm font-bold px-7 py-2.5 rounded-full hover:brightness-90 transition">
          Delete (1)
        </button>
      </div>
    </div>
 
  </main>

  <footer class="mt-16 bg-[#4C128B] text-yellow-300 py-10 px-10 z-10">
    <div class="max-w-5xl mx-auto grid md:grid-cols-2 gap-10">

      <div>
        <h2 class="text-lg font-semibold mb-3">About US</h2>
        <p class="text-sm text-yellow-300">
          Sudi Mart adalah mitra andalan kebutuhan warga sekolah,
          menyediakan berbagai alat tulis, keperluan belajar,
          serta layanan pendukung sekolah yang cepat dan berkualitas.
        </p>
      </div>

      <div>
        <h2 class="text-lg font-semibold mb-3">Contact Us</h2>
        <p class="text-sm text-yellow-300">
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