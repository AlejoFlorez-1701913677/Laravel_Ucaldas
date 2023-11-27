<x-app-layout>

    <x-slot name="slot">


        <div class="min-w-screen min-h-screen bg-gray-900 flex items-center jistify-center px-5 py-5">
            <div class="bg-gray-100 text-gray-500 rounded-3xl shadow-xl w-full overflow-hidden">
              <div class="md:flex w-full">
                <div class="hidden md:block bg-indigo-500 w-1/2 py-10 px-10 backColor89A64B">
                    @if ($errors->any())
                    <div class="alert alert-danger col-12 mt-4">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li class="text-white">{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                </div>
                <div class="w-full md:w-1/2 py-10 px-5 md:px-10">
                  <header class="text-center mb-10">
                    <h1 class="font-bold text-3xl text-gray-900">Crear nuevo Usuario</h1>
                    <p>Completa la siguiente información</p>
                  </header>
                  <form method="POST" action="{{ route('register') }}">
                    @csrf
        
                    <div>
                        <x-label for="name" value="{{ __('Nombre') }}" />
                        <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    </div>
        
                    <div class="mt-4">
                        <x-label for="email" value="{{ __('Email') }}" />
                        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                    </div>
        
                    <div class="mt-4">
                        <x-label for="password" value="{{ __('Contraseña') }}" />
                        <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                    </div>
        
                    <div class="mt-4">
                        <x-label for="password_confirmation" value="{{ __('Confirmar Contraseña') }}" />
                        <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                    </div>
        
                    <div class="flex items-center justify-end mt-4">
                       
        
                        <x-button class="ms-4">
                            {{ __('Registrar') }}
                        </x-button>
                    </div>
                </form>
                </div>
              </div>
            </div>
          </div>

    </x-slot>

</x-app-layout>