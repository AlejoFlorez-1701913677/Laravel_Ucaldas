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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles

    </head>
    <body>

        @include('layouts.navbar')

        <div id="wel_slider1" class="py-20" style="background: linear-gradient(90deg, #2BA8D9 0%, #89A64B 100%)">
            <div class="container mx-auto px-6">
                <h2 class="text-4xl font-bold mb-2 text-white">
                    En Macconndo podrás encontrar todo lo que estas buscando
                </h2>
                <h3 class="text-2xl mb-8 text-gray-200">
                    Disfruta de nuestros especiales y todos nuestros productos a ún modico precio
                </h3>
                <a href="{{ route('product') }}">
                    <button class="bg-white font-bold rounded-full py-4 px-8 shadow-lg uppercase tracking-wider btnStandardMacconndo">
                        Ver Productos
                    </button>
                </a>
                
            </div>
        </div>

        <section id="about">
          <div>
            <h2 class="title-text">Categorias</h2>
          </div>

          <div class="about-center">

            @foreach ($ProductCategory as $Product)
                <!---Single item-->
                <article class="about">
                    <a href="{{ url('/product') }}">
                        <div class="about-icon"><i class="fas {{ $Product->icon }}"></i></div>
                        <div class="about-text">
                            <h2 class="about-subtitle">{{ $Product->title }}</h2>
                            <p class="about-info">
                                {{ $Product->description }}
                            </p>
                        </div>
                    </a>
                </article>

            @endforeach
           
            
          </div>   
        </section>

        <section class="menu" id="menu">
          <article class="menu-image"></article>
          <article class="menu-text">
              <div class="menu-text-center">
                  <h1>Nuestros Productos</h1>
                  <p>Lorem ipsum dolor, sit amet consectetur adipisicing 
                   elit. Aut omnis nam iusto praesentium inventore vitae 
                   esse tempora repellendus.</p>
                   <a href="{{ url('/product') }}">Ver Productos</a>
              </div>
          </article>
      </section>

        
        
        <div class="carousel">
            <div class="carousel-inner">
                <input class="carousel-open invisible" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="hidden" checked="checked">
                <div class="carousel-item">
                    <img src="http://fakeimg.pl/2000x800/2BA8D9/fff/?text=Un lugar para comer">
                </div>

                <input class="carousel-open invisible" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="true">
                <div class="carousel-item">
                    <img src="http://fakeimg.pl/2000x800/89A64B/fff/?text=Disfruta lo último en gastronomia">
                </div>

                <input class="carousel-open invisible" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="true">
                <div class="carousel-item">
                    <img src="http://fakeimg.pl/2000x800/D90B1C/fff/?text=Un lugar para compartir">
                </div>

                <label for="carousel-3" class="carousel-control prev control-1">‹</label>
                <label for="carousel-2" class="carousel-control next control-1">›</label>
                <label for="carousel-1" class="carousel-control prev control-2">‹</label>
                <label for="carousel-3" class="carousel-control next control-2">›</label>
                <label for="carousel-2" class="carousel-control prev control-3">‹</label>
                <label for="carousel-1" class="carousel-control next control-3">›</label>
                <ol class="carousel-indicators">
                    <li>
                        <label for="carousel-1" class="carousel-bullet">•</label>
                    </li>
                    <li>
                        <label for="carousel-2" class="carousel-bullet">•</label>
                    </li>
                    <li>
                        <label for="carousel-3" class="carousel-bullet">•</label>
                    </li>
                </ol>
            </div>
        </div>

        @include('layouts.footer')

    </body>
</html>
