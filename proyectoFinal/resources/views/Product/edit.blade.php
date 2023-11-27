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
                    <h1 class="font-bold text-3xl text-gray-900">Editar producto existente</h1>
                    <p>Completa la siguiente información</p>
                  </header>
                  <form action="{{ route('Product.update', $Product) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="flex -mx-3">
                      <div class="w-1/2 px-3 mb-5">
                        <label for="title-input" class="text-xs font-semibold px-1">Titulo</label>
                        <div class="flex">
                          <div class="w-10 z-10 pl-1 text-center poniter-events-none flex items-center justify-center">
                            <i class="mdi mdi-account-outline text-gray-400 text-lg"></i>
                          </div>
                          <input id="title-input" required name="title" value="{{old('title', $Product->title)}}" type="text" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" placeholder="Macconndo">
                        </div>
                      </div>
                      <div class="w-1/2 px-3 mb-5">
                        <label for="price-input" class="text-xs font-semibold px-1">Precio</label>
                        <div class="flex">
                          <div class="w-10 z-10 pl-1 text-center poniter-events-none flex items-center justify-center">
                            <i class="mdi mdi-account-outline text-gray-400 text-lg"></i>
                          </div>
                          <input id="price-input" name="price" value="{{old('price',$Product->price)}}" type="number" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" min="1" max="999999" placeholder="50000" required>
                        </div>
                      </div>
                    </div> 
                    <div class="flex -mx-3">
                        <div class="w-full px-3 mb-5">
                            <label for="description-input" class="text-semibold px-1">Descripción</label>
                            <div class="flex">
                            <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center">
                                <i class="mdi mdi-email-outline text-gray-400 text-lg"></i>
                            </div>
                            <textarea required id="description-input" name="description" value="{{old('description')}}"  class="w-full -ml-10 pl-3 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" placeholder="Lorem Impsu">
                                {{$Product->description}}
                            </textarea>
                            </div>
                        </div>
                    </div> 

                    <div class="flex -mx-3">
                        <div class="w-1/2 px-3 mb-5">
                        
                            <label for="available-input" class="text-xs font-semibold px-1">Disponible</label>
                            <div class="flex">
                            <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center">
                                <i class="mdi mdi-lock-outline text-gray-400 text-lg"></i>
                            </div>
                            <input required id="available-input" value="{{old('available',$Product->available)}}" type="checkbox" name="available" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" checked>
                            </div>
                        
                        </div> 

                        <div class="w-1/2 px-3 mb-5">
                            <label for="slug-input" class="text-xs font-semibold px-1">Slug</label>
                            <div class="flex">
                            <div class="w-10 z-10 pl-1 text-center poniter-events-none flex items-center justify-center">
                                <i class="mdi mdi-account-outline text-gray-400 text-lg"></i>
                            </div>
                            <input id="slug-input" required value="{{old('slug',$Product->slug)}}" name="slug" type="text" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" required placeholder="slug">
                            </div>
                        </div>
                    </div>

                    <div class="flex -mx-3">
                        <div class="w-full px-3 mb-5">
                            <label for="category-input" class="text-semibold px-1">Categoria</label>
                            <div class="flex">
                                
                                <select required id="category-input" name="category_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected>Elige una opción</option>
                                    @foreach ($ProductCategory as $Category)
                                        <option value="{{ $Category->id }}">{{ $Category->title }}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="flex -mx-3">
                        <div class="w-full px-3 mb-5">
                          <label for="image-input" class="text-semibold px-1">Agregar imagen</label>
                          <div class="flex">
                            <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center">
                              <i class="mdi mdi-lock-outline text-gray-400 text-lg"></i>
                            </div>
                            <input class="w-full -ml-10 pl-3 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" id="file_input" accept="image/png, image/gif, image/jpeg"  type="file">

                          </div>
                        </div>
                      </div> 

                    <div class="flex -mx-3">
                      <div class="w-full px-3 mb-5">
                        <button class="block w-full max-w-xs mx-auto bg-indigo-500 hover:bg-indigo-700 focus:bg-indigo-700 text-white rounded-lg px-3 py-3 font-semibold backColor89A64B">Editar</button>
                      </div>
                    </div> 
                  </form>
                </div>
              </div>
            </div>
          </div>

    </x-slot>

</x-app-layout>