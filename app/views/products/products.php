<div class="flex flex-wrap items-start justify-center gap-10">
    <div class="w-5xl mx-auto gap-10">
        <h1 class="text-2xl text-yellow-300 font-bold mb-4">Product</h1>
        <hr class="text-yellow-300">
    </div>

    <div class="grid grid-cols-4 gap-8 justify-center">

        <?php foreach ($products as $product): ?>
            <a href="/products/1">
                <div class="w-65 bg-linear-to-b from-purple-700 to-purple-900 rounded-2xl shadow-xl overflow-hidden">


                    <div class="bg-gray-200 rounded-t-2xl p-5">
                        <img src="<?= $product['image']; ?>" class="mx-auto h-40 object-contain">
                    </div>

                    <div class="p-4 text-white">

                        <h2 class="text-yellow-400 text-sm font-semibold mb-3 leading-snug">
                            <?= $product['name']; ?>
                        </h2>

                        <div class="flex items-center gap-2 text-xs mb-1">
                            <span class="text-yellow-400">⭐</span>
                            <span>5.0</span>
                            <span>•</span>
                            <span>100K terjual</span>
                        </div>

                        <div class="flex items-center gap-2 text-xs text-purple-200">
                            <span>📍</span>
                            <span>Kalbar, Pontianak</span>
                        </div>

                    </div>

                </div>
            </a>
        <?php endforeach; ?>

    </div>
</div>