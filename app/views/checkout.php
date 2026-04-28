<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Cart</title>
  <link rel="stylesheet" href="/css/output.css">
</head>

<body class="bg-gray-100 min-h-screen font-sans flex flex-col gap-15 bg-linear-to-b from-[#4C128B] to-[#814FBE]">

  <header class="bg-[#4C128B] shadow-sm">
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

<div class="max-w-6xl mx-auto">


  <div class="bg-[#6a1bb1]/60 rounded-2xl p-6 shadow-lg">
    <h2 class="text-yellow-400 font-semibold mb-3 border-b border-yellow-400/50 pb-2">
      Alamat
    </h2>

    <div class="flex justify-between items-center gap-8">
      <p class="text-sm text-purple-100 max-w-xl leading-relaxed">
        Apartemen Vasanta Innopark (masuk apartemen kasi ke security), 
        Cikarang Barat, Kab. Bekasi, Jawa Barat, 6281346099722
      </p>

      <button class="bg-yellow-400 text-black px-5 py-2 rounded-xl font-semibold shadow-md">
        Ganti
      </button>
    </div>
  </div>


  <div class="grid grid-cols-1 md:grid-cols-2 gap-10 mt-10">


    <div>


      <h2 class="text-yellow-400 font-semibold mb-4">Easy Gel Premium 1.0mm</h2>

      <div class="flex items-center gap-4 mb-8">
        <div class="bg-white rounded-xl p-2 shadow-md">
          <img src="/assets/penkenko.png" class="w-20">
        </div>

        <div>
          <p class="text-sm text-purple-100">Stok Tersedia 20</p>
          <h1 class="text-2xl font-bold text-yellow-300">Rp -</h1>
        </div>
      </div>

   
      <h2 class="text-yellow-400 font-semibold border-b border-yellow-400/50 pb-2 mb-4">
        Payment Methods
      </h2>

      <div id="paymentList" class="space-y-4">

    
        <div class="payment flex justify-between items-center px-5 py-4 rounded-2xl 
                    bg-linear-to-r from-[#5a189a] to-[#6a1bb1] 
                    shadow-inner cursor-pointer transition"
             data-name="VA">
          <span class="text-purple-100">VA</span>
          <div class="circle w-5 h-5 border-2 border-purple-200 rounded-full"></div>
        </div>

        <div class="payment flex justify-between items-center px-5 py-4 rounded-2xl 
                    bg-linear-to-r from-[#5a189a] to-[#6a1bb1] 
                    shadow-inner cursor-pointer"
             data-name="QRIS">
          <span class="text-purple-100">Q-Ris</span>
          <div class="circle w-5 h-5 border-2 border-purple-200 rounded-full"></div>
        </div>

        <div class="payment flex justify-between items-center px-5 py-4 rounded-2xl 
                    bg-linear-to-r from-[#5a189a] to-[#6a1bb1] 
                    shadow-inner cursor-pointer"
             data-name="ShopeePay">
          <span class="text-purple-100">Shoppe Pay</span>
          <div class="circle w-5 h-5 border-2 border-purple-200 rounded-full"></div>
        </div>

        <div class="payment flex justify-between items-center px-5 py-4 rounded-2xl 
                    bg-linear-to-r from-[#5a189a] to-[#6a1bb1] 
                    shadow-inner cursor-pointer"
             data-name="COD">
          <span class="text-purple-100">Cash on delivery</span>
          <div class="circle w-5 h-5 border-2 border-purple-200 rounded-full"></div>
        </div>

        <div class="payment flex justify-between items-center px-5 py-4 rounded-2xl 
                    bg-linear-to-r from-[#5a189a] to-[#6a1bb1] 
                    shadow-inner cursor-pointer"
             data-name="Gopay">
          <span class="text-purple-100">Gopay</span>
          <div class="circle w-5 h-5 border-2 border-purple-200 rounded-full"></div>
        </div>

      </div>
    </div>

    <div class="border-l border-yellow-400/40 pl-8">


      <h2 class="text-yellow-400 font-semibold mb-4">Cost details</h2>

      <div class="space-y-3 text-sm text-purple-100">
        <div class="flex justify-between"><span>Service fee</span><span>Rp -</span></div>
        <div class="flex justify-between"><span>Transaction fee</span><span>Rp -</span></div>
        <div class="flex justify-between"><span>Shipping fee</span><span>Rp -</span></div>
        <div class="flex justify-between"><span>Admin fee</span><span>Rp -</span></div>

        <div class="border-t border-yellow-400/40 pt-3 mt-3 flex justify-between font-semibold text-white">
          <span>Total</span><span>Rp -</span>
        </div>
      </div>

 
      <h2 class="text-yellow-400 font-semibold mt-8 mb-2 border-b border-yellow-400/50 pb-2">
        Set Payment
      </h2>

      <p class="text-sm text-purple-100">Pay in Full</p>
      <h1 class="text-xl font-bold mb-6 text-white">Rp -</h1>

      <button class="w-full bg-yellow-400 text-black py-4 rounded-xl font-bold 
                     shadow-lg hover:brightness-110 active:scale-95 transition">
        Pay
      </button>

    </div>

  </div>

</div>


<script>
  const payments = document.querySelectorAll(".payment");

  payments.forEach(item => {
    item.addEventListener("click", () => {

      payments.forEach(p => {
        p.classList.remove("ring-2","ring-yellow-400");
        const c = p.querySelector(".circle");
        c.classList.remove("bg-yellow-400","border-yellow-400");
        c.classList.add("border-purple-200");
      });

      item.classList.add("ring-2","ring-yellow-400");

      const circle = item.querySelector(".circle");
      circle.classList.remove("border-purple-200");
      circle.classList.add("bg-yellow-400","border-yellow-400");
    });
  });
</script>




  <footer class="mt-16 bg-[#4C128B] text-yellow-300 py-10 px-10">
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