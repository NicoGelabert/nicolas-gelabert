<?php
/** @var \Illuminate\Database\Eloquent\Collection $products */
?>

<x-app-layout>
    <?php if ($products->count() === 0): ?>
        <div class="text-center text-gray-600 py-16 text-xl">
            There are no products published
        </div>
    <?php else: ?>
        <div
            class="grid gap-y-8 gap-x-2 grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-4"
        >
            @foreach($products as $product)
                <!-- Product Item -->
                <div x-data="productItem({{ json_encode([
                        'id' => $product->id,
                        'slug' => $product->slug,
                        'image' => $product->image,
                        'title' => $product->title,
                        'price' => $product->price,
                        'addToCartUrl' => route('cart.add', $product)
                    ]) }})"
                    class="border-transparent relative rounded-lg bg-white">
                    <a href="{{ route('product.view', $product->slug) }}"
                       class="aspect-w-3 aspect-h-2 block overflow-hidden">
                        <img
                            src="{{ $product->image }}"
                            alt=""
                            class="card-image object-cover hover:scale-105 hover:rotate-1 transition-transform"
                        />
                        <div class="p-4 card-listing">
                            <h3>
                                {{$product->title}}
                            </h3>
                            <div class="price-container relative">
                                <span class="font-number-label">Price</span>
                                <h5 class="font-number">${{$product->price}}</h5>
                            </div>
                        </div>
                        <button class="btn-primary absolute" @click="addToCart()">
                            <!-- Add to Cart -->
                            <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="1"
                            >
                                <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"
                                />
                            </svg>
                        </button>
                    </a>
                </div>
                <!--/ Product Item -->
            @endforeach
        </div>
        {{$products->links()}}
    <?php endif; ?>
</x-app-layout>
