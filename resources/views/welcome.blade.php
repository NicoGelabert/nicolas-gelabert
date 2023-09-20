<?php
    /** @var \Illuminate\Database\Eloquent\Collection $products */
    ?>
    <x-app-layout>
    <div class="relative isolate px-6 pt-14 lg:px-8">
        <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
            <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
            </div>
        </div>
        <div class="mx-auto max-w-2xl py-4">
            <div class="hidden sm:mb-8 sm:flex sm:justify-center">
                <div class="relative rounded-full px-3 py-1 text-sm leading-6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
                {{__('Site design and developed by')}} Nicolás Gelabert 
                    <a href="/" class="font-semibold text-indigo-600">
                        <span class="absolute inset-0" aria-hidden="true"></span>{{__('Back to CV')}} <span aria-hidden="true">&rarr;</span>
                    </a>
                </div>
            </div>
            <div class="text-center">
                <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">E-Commerce demo</h1>
                <p class="mt-6 text-lg leading-8 text-gray-600">{{__('E-Commerce site development carried out with Laravel, Vue Js and Tailwind.')}}</p>
                <div class="mt-10 flex items-center justify-center gap-x-6">
                    <a href="{{ route('product.index') }}" class="btn-primary">{{__('See products')}}</a>
                    <a href="{{ route('cart.index') }}" class="text-sm font-semibold leading-6 text-gray-900">{{__('Go to cart')}}<span aria-hidden="true">→</span></a>
                </div>
            </div>
        </div>
    </div>

    <section id="image-carousel" class="splide my-16 md:mx-16" aria-label="Beautiful Images">
        <div class="mb-8 text-center">
            <h2 class="text-2xl font-bold text-3xl">{{__('Latest products')}}
        </div>
        <div class="splide__track mx-8">
            <ul class="splide__list">
                @foreach($products as $product)
                <li class="splide__slide border-transparent rounded-lg bg-white">
                    <a href="{{ route('product.view', $product->slug) }}"
                       class="aspect-w-3 aspect-h-2 block overflow-hidden">
                        <img src="{{ $product->image }}" alt="{{$product->title}}"
                        class="card-image object-cover hover:scale-105 hover:rotate-1 transition-transform p-4">
                        <div class="p-4 card-listing">
                            <div>
                                <h3 class="underline-hover w-fit">
                                    {{$product->title}}
                                </h3>
                            </div>
                            <div class="price-container relative flex justify-between">
                                <h5 class="font-number pl-4 text-lg md:text-xl lg:text-2xl">${{$product->price}}</h5>
                            </div>
                        </div>
                    </a>
                </li>
                @endforeach
            </ul>
        </div>

</x-app-layout>