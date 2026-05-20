<section class="max-w-5xl mx-auto mt-10 bg-[#4C128B] rounded-2xl shadow-lg p-20 grid md:grid-cols-2 gap-6">

  <div>
    <img src="<?= $product['image']; ?>" class="mx-auto mb-4">
  </div>

  <div class="flex flex-col justify-between border-l-2 border-indigo-500 gap-20 pl-6 w-200">

    <div>
      <h2 class="text-3xl font-semibold mb-2 text-yellow-300">
        <?= $product['name']; ?>
      </h2>
      <p class="text-yellow-300 text-xl mb-6">
        <?php
        echo strlen($product['description']) > 35
          ? substr($product['description'], 0, 35) . '...'
          : $product['description'];
        ?>
      </p>
    </div>

    <form action="/cart/add" method="POST">

      <input type="hidden" name="product_id" value="<?= $product['id']; ?>">
      <input type="hidden" name="quantity" id="qty-input" value="1">

      <div class="flex gap-7 items-center">

        <button type="button" class="bg-yellow-300 rounded-full w-8 h-8" id="btn-minus">
          -
        </button>

        <span class="text-yellow-300" id="qty-display">1</span>

        <button type="button" class="rounded-full w-8 h-8 border-2 border-yellow-300 text-yellow-300" id="btn-plus">
          +
        </button>

      </div>

      <div class="flex gap-4 mt-6">

        <button type="submit"
          class="hover:cursor-pointer px-8 py-2 border-2 border-yellow-300 text-yellow-300 rounded-lg hover:bg-yellow-100 font-bold">
          Beli Sekarang
        </button>

        <button type="submit"
          class="hover:cursor-pointer px-8 py-2 bg-yellow-300 text-indigo-600 rounded-lg hover:bg-yellow-100 w-40 font-bold">
          Keranjang
        </button>

      </div>

    </form>

  </div>
</section>

<section class="mx-auto mt-10 w-250">
  <h3 class="text-lg font-semibold border-b-2 text-yellow-300 pb-2 mb-4">
    Deskripsi
  </h3>

  <p class="text-yellow-300 mb-4">
    <?= $product['description']; ?>
  </p>
</section>

<script>
  let qty = 1;

  const qtyInput = document.getElementById("qty-input");
  const qtyDisplay = document.getElementById("qty-display");

  document.getElementById("btn-plus").addEventListener("click", function () {
    qty++;

    qtyInput.value = qty;
    qtyDisplay.textContent = qty;
  });

  document.getElementById("btn-minus").addEventListener("click", function () {

    if (qty > 1) {
      qty--;

      qtyInput.value = qty;
      qtyDisplay.textContent = qty;
    }

  });
</script>