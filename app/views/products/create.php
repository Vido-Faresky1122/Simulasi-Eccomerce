<div class="bg-sudi-card rounded-2xl p-7 shadow-xl w-230">
    <h1 class="text-[#F5C842] text-2xl font-semibold mb-6">
        Product Information
    </h1>
    <div class="flex items-start gap-4 mb-5">
        <label class="text-[#F5C842] text-sm font-medium w-24 shrink-0">
            Image
        </label>
        <form action="/uploadProductPhoto" method="POST" enctype="multipart/form-data">
            <input type="file" name="image" id="imageInput" hidden onchange="this.form.submit()">
            <button type="button" onclick="document.getElementById('imageInput').click()"
                class="text-yellow-300 text-sm font-bold px-5 py-2 rounded-full hover:brightness-90 transition">
                <div class="flex items-start gap-6 mb-8 top-10">
                    <div class="flex flex-col items-center gap-2">

                        <div
                            class="upload-box w-28 h-26 pb-2 border border-dashed border-yellow-300 rounded-xl flex items-center justify-center bg-transparent overflow-hidden">

                            <?php if (isset($_SESSION['image'])): ?>

                                <img src="<?= $_SESSION['image']; ?>" class="w-full h-full object-cover rounded-xl">

                            <?php else: ?>

                                <span class="text-[#F5C842] text-4xl font-light leading-none">
                                    <img src="https://placehold.co/28x28/f8f8f8/444?text=+" alt="">
                                </span>

                            <?php endif; ?>
                        </div>
                        <?php if (!isset($_SESSION['image'])): ?>

                            <span class="text-[#F5C842] text-xs">
                                Add photo
                            </span>

                        <?php endif; ?>
                    </div>
                </div>
            </button>
        </form>
    </div>
</div>
<form action="/products/create" method="POST">

    <div class="bg-sudi-card rounded-2xl p-7 shadow-xl w-230">

        <!-- Title -->



        <!-- Product Description Section -->
        <h2 class="text-[#F5C842] text-xl font-semibold mb-5">
            Product Description
        </h2>

        <!-- Product Name -->
        <div class="flex items-center gap-4 mb-5">

            <label class="text-[#F5C842] text-sm font-medium w-24 shrink-0">
                Product Name
            </label>

            <input type="text" name="name" placeholder="insert product name"
                class="flex-1 bg-transparent border border-[rgba(245,200,66,0.4)] rounded-full px-5 py-2.5 text-[#F5C842] text-sm" />

        </div>

        <!-- Description -->
        <div class="flex items-start gap-4 mb-5">

            <label class="text-[#F5C842] text-sm font-medium w-24 shrink-0 pt-3">
                Description
            </label>

            <textarea name="description" placeholder="insert product's description" rows="6"
                class="flex-1 bg-transparent border border-[rgba(245,200,66,0.4)] rounded-2xl px-5 py-3 text-[#F5C842] text-sm resize-none"></textarea>

        </div>

        <!-- Quantity -->

        <!-- Buttons -->
        <div class="flex gap-3">

            <button type="submit" class="btn-sell px-8 py-2.5 bg-yellow-300 rounded-full font-semibold text-sm">
                Sell
            </button>

            <button type="button" onclick="window.location.href='/admin/profile'"
                class="btn-cancel px-7 py-2.5 bg-red-600 rounded-full font-semibold text-sm">
                Cancel
            </button>

        </div>

    </div>

</form>