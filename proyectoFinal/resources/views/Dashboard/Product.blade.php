<x-app-layout>

    <x-slot name="slot">


        <div class="flex flex-col mt-8">

            <a href="{{ route('Product.create') }}">
                <input type="button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-60" value="Agregar nuevo producto">
            </a>
            <br>

            <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                <div class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
                    <table class="min-w-full">
                        <thead>
                            <tr>
                                <th
                                    class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                    Titulo</th>
                                <th
                                    class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                    Descripción</th>
                                <th
                                    class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                    Slug</th>
                                
                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50">
                                    Opciones
                                </th>
                            </tr>
                        </thead>

                        <tbody class="bg-white">
                            @foreach ($Products as $Product)
                                <tr>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10">
                                                <img class="h-10 w-10 rounded-full"
                                                    src="https://cdn-icons-png.flaticon.com/512/3183/3183463.png"
                                                    alt="">
                                            </div>

                                            <div class="ml-4">
                                                <div class="text-sm leading-5 font-medium text-gray-900">
                                                    {{ $Product->title }}
                                                </div>
                                                <div class="text-sm leading-5 text-gray-500">{{ $Product->price }}</div>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                        <div class="text-sm leading-5 text-gray-900">
                                            {{ $Product->description }}
                                        </div>
                                    </td>

                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">
                                        <span
                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">{{ $Product->slug }}
                                        </span>
                                    </td>

                                    <td class="px-3 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium flex justify-between" style="min-height: 20vh;padding-top: 10vh;">
                                        
                                        <a href="{{ route('Product.show', $Product->slug) }}" target="_blanck" class="text-green-600 hover:text-indigo-900 fas fa-eye"></a>
                                        <a href="{{ route('Product.edit', $Product) }}" class="text-blue-600 hover:text-indigo-900 fas fa-edit"></a>
                                        
                                        <form 
                                            action="{{route('Product.destroy', $Product)}}" 
                                            method="post"
                                            onsubmit="return confirm('¿Estás Seguro?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-rose-600 hover:text-indigo-900">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                        
                                    </td>
                                </tr>

                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </x-slot>

</x-app-layout>