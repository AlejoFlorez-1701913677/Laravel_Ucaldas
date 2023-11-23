@extends('layout.index')
@section('content') {{-- @yield('content') --}}

<div class="container">

    <br>
    <br>
    

    <div>

      <form method="GET" action="{{route("Product.index")}}">
        <div class="input-group">
          <div class="col-4">
            <select name="pet_column" class="form-select">
              <option value="name">Nombre</option>
              <option value="owner">Dueño</option>
              <option value="race">Raza</option>
            </select>
          </div>
          <div class="col-6">
            <input type="search" name="pet_Search" class="form-control rounded" placeholder="Buscar Producto" aria-label="Search" aria-describedby="search-addon" />
          </div>
          <div class="col-2">
            <a href="{{ route('Product.index') }}">
              <button type="button" class="btn btn-outline-primary">Buscar</button>
          </a>
          </div>
            
        </div>
      </form>

    </div>

    <br>
    <br>
    

    <div class="row">
        @foreach ($Products as $Product)
        
        <div class="col-lg-3 mb-4 d-flex align-items-stretch">
            <div class="card">
              <img src="https://cdn-icons-png.flaticon.com/512/6462/6462524.png" class="card-img-top" alt="Card Image">
              <div class="card-body d-flex flex-column">
                <h3 class="card-title"><strong>Nombre:</strong><br> {{ $Product->name }}</h3>
                <p class="card-text"><strong>Dueño</strong> {{ $Product->owner }}</p>
                <p class="card-text"><strong>Raza</strong> {{ $Product->race }}</p>
                <p class="card-text"><strong>Medidas</strong> {{ $Product->weight }} x {{ $Product->height }} x {{ $Product->width }}</p>
                <p class="card-text"><strong>Nacimiento</strong> {{ $Product->birthday }}</p>
                <p class="card-text"><strong>Última Vacunación</strong> {{ $Product->lastVaccination ?: 'Sin fecha'}}</p>
                
                
                <a href="{{route('Product.edit', $Product)}}" class="btn btn-primary">Editar</a>
                
                <form 
                  action="{{route('Product.destroy', $Product)}}" 
                  method="post"
                  onsubmit="return confirm('¿Estás Seguro?')">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger">Eliminar <i class="fa-solid fa-trash"></i></button>
                </form>
                
              </div>
            </div>
          </div>

        @endforeach

    </div>

</div>

@endsection