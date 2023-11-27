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

        <section  class="text-gray-700 body-font overflow-hidden bg-[#ffe177]">

            <div class="container px-5 py-24 mx-auto">
                <div class="lg:w-4/5 mx-auto flex flex-wrap bg-white">
                    <img alt="ecommerce" class="lg:w-1/2 w-full object-cover object-center rounded border border-gray-200" src="https://cdn-icons-png.flaticon.com/512/12705/12705609.png">
                    <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                        <h2 class="text-sm title-font text-gray-700 tracking-widest">
                            {{ $Category->slug }}
                        </h2>
                        <div class="flex mb-4">
                            <span class="about-icon">
                                <i class="fas {{ $Category->icon }}"></i>
                            </span>
                        </div>
                        
                        <h1 class="text-gray-900 text-4xl title-font font-bold mb-1">
                            {{ $Category->title }}
                        </h1>

                        <p class="leading-relaxed">
                            {{ $Category->description }}    
                        </p>
                        <div class="flex border-t border-gray-300 mt-5 pt-5">
                            <button type="submit" class="bg-gray-800 duration-200 focus:outline-none focus:shadow-outline font-medium h-12 hover:bg-gray-900 inline-flex items-center justify-center px-6 text-white tracking-wide transition w-72	 btnStandardMacconndo">
                                Ver Productos
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        @include('layouts.footer')

    </body>
</html>