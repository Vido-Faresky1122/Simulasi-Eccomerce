<div class="w-5xl mx-auto gap-10">

  <h1 class="text-2xl text-yellow-300 font-bold mb-4">Keranjang</h1>
  <hr class="mb-6 text-yellow-300">

  <?php foreach ($cartItems as $item): ?>

    <div class="bg-[#4C128B] rounded-lg shadow p-8 flex items-center justify-between mb-4">

      <div class="flex items-center gap-4">
        <input type="checkbox" class="w-5 h-5 bg-indigo-600">

        <img src="<?= $item['image']; ?>" class="w-20 h-20 object-cover border">

        <div>
          <h2 class="font-medium text-yellow-300"><?= $item['name']; ?></h2>
          <p class="text-sm text-yellow-300">Product</p>
        </div>
      </div>

      <div class="flex items-center gap-6">

        <p class="text-sm text-yellow-300">Unit</p>

        <div class="flex items-center gap-4">

          <span class="text-yellow-300 font-bold text-l">
            <?= $item['quantity']; ?>
          </span>


        </div>

        <!-- DELETE -->
        <form method="POST" action="/cart/delete">
          <input type="hidden" name="id" value="<?= $item['id']; ?>">
          <button
            class="transition duration-150 ease-in-out hover:bg-yellow-100 hover:cursor-pointer bg-yellow-300 text-indigo-600 font-bold px-4 py-1 rounded w-22 h-8">
            Delete
          </button>
        </form>

      </div>

    </div>

  <?php endforeach; ?>

  <div class="flex items-center gap-8 mt-6">

    <button onclick="window.location.href='/checkout'"
      class="bg-purple-900 text-yellow-300 font-semibold px-6 py-2 rounded-lg shadow-md hover:bg-purple-800 transition">
      Check out
    </button>

    <span class="text-yellow-300 font-semibold">
      Total item (<?= count($cartItems); ?>)
    </span>

  </div>

</div>