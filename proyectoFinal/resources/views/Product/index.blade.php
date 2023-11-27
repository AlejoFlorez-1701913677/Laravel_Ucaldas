<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('assets/css/welcome.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/Product/index.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles

    </head>
    <body>

        @include('layouts.navbar')

        <section id="pro_container" class="px-10 w-fit mx-auto grid grid-cols-1 lg:grid-cols-4 md:grid-cols-3 sm-grid-cols-2 justify-items-center justify-center gap-y-20 gap-x-7 mt-10 mb-5">

          @foreach ($Products as $Product)
 
            <!--   ✅ Product card 1 - Starts Here 👇 -->
            <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
              
                <img src="https://images.unsplash.com/photo-1560684352-8497838a2229?q=80&w=2028&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="Product" class="h-80 w-72 object-cover rounded-t-xl" />
                <div class="px-4 py-3 w-72">
                  <span class="text-gray-400 mr-3 uppercase text-xs">Category</span>
                  <span class="pro_price">${{ $Product->price }}</span>
                  <p class="text-lg font-bold text-black truncate block capitalize">{{ $Product->title }}</p>
                  <div class="flex pt-3 pro_description">
                    <p class="text-justify text-gray-500 dark:text-gray-400 text-base">{{ $Product->description }}</p>
                  </div>
                  <div class="flex pro_options pt-6 justify-around	">

                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                      <a href="{{ route('Product.show', $Product->slug) }}">
                        <i class="fa-solid fa-eye"></i>
                      </a>
                    </button>

                    <button class="backColor89A64B text-white font-bold py-2 px-4 rounded-full">
                      <i class="fa-solid fa-cart-shopping"></i>
                    </button>

                    
                  </div>
                </div>
            </div>

          @endforeach

        </section>

        @include('layouts.footer')

    </body>
</html>
