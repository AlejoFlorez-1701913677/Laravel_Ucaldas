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

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles

    </head>
    <body>

        @include('layouts.navbar')

        <div id="wel_slider1" class="py-20" style="background: linear-gradient(90deg, #667eea 0%, #764ba2 100%)">
            <div class="container mx-auto px-6">
                <h2 class="text-4xl font-bold mb-2 text-white">
                    En UpsCloud podrás encontrar todo lo que estas buscando
                </h2>
                <h3 class="text-2xl mb-8 text-gray-200">
                    Conectate con las personas que requieren tus productos
                </h3>
                <a href="{{ route('register') }}">
                    <button class="bg-white font-bold rounded-full py-4 px-8 shadow-lg uppercase tracking-wider">
                        Registrarse
                    </button>
                </a>
                
            </div>
        </div>

        <section class="container mx-auto px-6 p-10">
          <h2 class="text-4xl font-bold text-center text-gray-800 mb-8">
            Ventajas
          </h2>
          
          <div class="flex items-center flex-wrap mb-20">
            <div class="w-full md:w-1/2">
              <h4 class="text-3xl text-gray-800 font-bold mb-3">
                Gran cantidad de productos
              </h4>
              
              <p class="text-gray-600 mb-8">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur obcaecati quas distinctio ipsum sint adipisci reprehenderit, 
                  suscipit id, vel temporibus, aspernatur accusamus libero. Laboriosam, facilis! Illum rem adipisci magni excepturi?
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, odio molestiae cumque tenetur hic fugit, soluta voluptas dolorem accusamus corporis labore nobis repellat saepe dignissimos aspernatur ea voluptatum fugiat quas.
              </p>
            </div>
            
            <div class="w-full md:w-1/2">
              <img
                class="wel_imgBase"
                src="https://cdn-icons-png.flaticon.com/256/2674/2674505.png"
                alt="Monitoring"/>
            </div>
          </div>
          
          <div class="flex items-center flex-wrap mb-20">
            <div class="w-full md:w-1/2">
              <img
                class="wel_imgBase"
                src="https://cdn-icons-png.flaticon.com/256/2782/2782163.png"
                alt="Reporting"/>
            </div>
            
            <div class="w-full md:w-1/2 pl-10">
              <h4 class="text-3xl text-gray-800 font-bold mb-3">
                Reportes
              </h4>
              
              <p class="text-gray-600 mb-8">
                Our Smart Health Monitoring Wristwatch can generate a comprehensive
                report on your vitals depending on your settings either daily,
                weekly, monthly, quarterly or yearly.
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quae facilis provident in mollitia nam. Omnis enim consectetur possimus, fuga cumque, nostrum iste a officiis temporibus officia dignissimos magnam? Iste, odit.
              </p>
            </div>
          </div>
          
          <div class="flex items-center flex-wrap mb-20">
            <div class="w-full md:w-1/2">
              <h4 class="text-3xl text-gray-800 font-bold mb-3">
                Siempre en linea
              </h4>
              
              <p class="text-gray-600 mb-8">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Est reiciendis tenetur minima
                Lorem ipsum dolor sit amet consecteturLorem ipsum dolor sit amet consectetur tenetur minima
                Lorem ipsum dolor sit amet consectetur Lorem ipsum dolor sit amet
                Lorem ipsum dolor sit amet consectetur Lorem ipsum dolor sit amet tenetur minima
                Lorem ipsum dolor sit amet consectetur Lorem ipsum dolor sit amet consectetur
              </p>
            
            </div>
            
            <div class="w-full md:w-1/2">
              <img
                class="wel_imgBase"
                src="https://cdn-icons-png.flaticon.com/256/3649/3649281.png"
                alt="Syncing"/>
            </div>
          </div>
        </section>

        
        <div class="carousel">
            <div class="carousel-inner">
                <input class="carousel-open invisible" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="hidden" checked="checked">
                <div class="carousel-item">
                    <img src="http://fakeimg.pl/2000x800/667eea/fff/?text=Un lugar para comprar">
                </div>

                <input class="carousel-open invisible" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="true">
                <div class="carousel-item">
                    <img src="http://fakeimg.pl/2000x800/764ba2/fff/?text=Revisa lo último en opciones">
                </div>

                <input class="carousel-open invisible" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="true">
                <div class="carousel-item">
                    <img src="http://fakeimg.pl/2000x800/F90/fff/?text=UpsCloud - Ecommerce">
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
