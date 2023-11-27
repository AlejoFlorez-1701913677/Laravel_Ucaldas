<x-app-layout>

    <x-slot name="slot">
        
        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
            <div class="container mx-auto px-6 py-8">
                <h4 class="text-gray-700 text-3xl font-medium">Dashboard</h4>

                <div class="flex justify-center	pb-4">
                    <div id="gen_logo" class="gen_bigLogo"></div>
                </div>

                <div class="mt-4">
                    <div class="flex flex-wrap -mx-6">
                        
                        <a href="{{ route('productDashboard') }}" class="w-full px-6 sm:w-1/2 xl:w-1/3">
                            <div class="flex items-center px-5 py-6 shadow-sm rounded-md bg-white">
                                <div class="p-3 rounded-full bg-indigo-600 bg-opacity-75">
                                    <img src="https://cdn-icons-png.flaticon.com/128/2276/2276931.png">
                                </div>

                                <div class="mx-5">
                                    <h4 class="text-2xl font-semibold text-gray-700">{{ $Product }}</h4>
                                    <div class="text-gray-500">Productos</div>
                                </div>
                            </div>
                        </a>

                        <a href="{{ route('categoryDashboard') }}" class="w-full mt-6 px-6 sm:w-1/2 xl:w-1/3 sm:mt-0">
                            <div class="flex items-center px-5 py-6 shadow-sm rounded-md bg-white">
                                <div class="p-3 rounded-full bg-orange-600 bg-opacity-75">
                                    <img src="https://cdn-icons-png.flaticon.com/128/4401/4401132.png">
                                </div>

                                <div class="mx-5">
                                    <h4 class="text-2xl font-semibold text-gray-700">{{ $ProductCategory }}</h4>
                                    <div class="text-gray-500">Categorias</div>
                                </div>
                            </div>
                        </a>

                        <a href="{{ route('userDashboard') }}" class="w-full mt-6 px-6 sm:w-1/2 xl:w-1/3 xl:mt-0">
                            <div class="flex items-center px-5 py-6 shadow-sm rounded-md bg-white">
                                <div class="p-3 rounded-full bg-pink-600 bg-opacity-75">
                                    <img src="https://cdn-icons-png.flaticon.com/128/1999/1999625.png">
                                </div>

                                <div class="mx-5">
                                    <h4 class="text-2xl font-semibold text-gray-700">{{ $User }}</h4>
                                    <div class="text-gray-500">Usuarios</div>
                                </div>
                            </div>
                        </a>

                    </div>
                </div>

                <div class="mt-8">

                </div>

                
            </div>
        </main>

    </x-slot>

</x-app-layout>
