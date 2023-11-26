<!--  navbar here -->
<nav id="nav_principal" class="bg-gray-100 text-gray-600 ">
    <div class="max-w-6xl mx-auto px-4">
        <div class="flex justify-between">
        
            <div class="flex items-center space-x-4">
                <!-- logo -->
                <div>
                <a href="#" class="flex py-5">
                    
                    <svg class="h-6 w-6 text-blue-200" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                    </svg>
                    
                <span class="font-bold">UpsCloud</span>
                </a>
                </div>
    
                <!-- primary nav -->
                <div class="hidden md:flex items-center space-x-3">
                <a href="{{ url('/product') }}" class="py-5 px-3 hover:text-gray-900">Productos</a>
                <a href="{{ url('/category') }}" class="py-5 px-3 hover:text-gray-900">Categorias</a>
                </div>
            </div>
        
            <!-- secondary nav -->
            <div class="hidden md:flex items-center space-x-1">
            
                @if (Route::has('login'))
                    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                        @auth
                                <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Ingresa</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Crea tu cuenta</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        
            <!-- mobile button -->
            <div class="md:hidden flex items-center">
                <button class="mobile-menu-button">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div> 
    
    <!-- mobile nav -->
    <div class="mobile-menu hidden md:hidden">
        <a href="{{ url('/Product') }}" class="py-5 px-3 hover:text-gray-900">Productos</a>
        <a href="{{ url('/ProductCategory') }}" class="py-5 px-3 hover:text-gray-900">Categorias</a>
    </div>
    
  </nav>

