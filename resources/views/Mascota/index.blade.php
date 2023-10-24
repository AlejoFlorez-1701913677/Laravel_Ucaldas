@extends('layout.base')
@section('content') {{-- @yield('content') --}}

<div class="container">

    <br>
    <br>
    

    <div class="">

        <div class="input-group">
            <input type="search" class="form-control rounded" placeholder="Buscar Mascota" aria-label="Search" aria-describedby="search-addon" />
            <a href="{{ route('Mascota.index') }}">
                <button type="button" class="btn btn-outline-primary">Buscar</button>
            </a>
        </div>

    </div>

    <br>
    <br>
    

    <div class="row">
        @foreach ($mascotas as $mascota)
        
        <div class="col-lg-3 mb-4 d-flex align-items-stretch">
            <div class="card">
              <img src="https://cdn-icons-png.flaticon.com/512/6462/6462524.png" class="card-img-top" alt="Card Image">
              <div class="card-body d-flex flex-column">
                <h3 class="card-title"><strong>Nombre:</strong><br> {{ $mascota->name }}</h3>
                <p class="card-text"><strong>Dueño</strong> {{ $mascota->owner }}</p>
                <p class="card-text"><strong>Raza</strong> {{ $mascota->race }}</p>
                <p class="card-text"><strong>Medidas</strong> {{ $mascota->weight }} x {{ $mascota->height }} x {{ $mascota->width }}</p>
                <p class="card-text"><strong>Nacimiento</strong> {{ $mascota->birthday }}</p>
                <p class="card-text"><strong>Última Vacunación</strong> {{ $mascota->lastVaccination ?: 'Sin fecha'}}</p>
                
                
                <a href="{{route('Mascota.edit', $mascota)}}" class="btn btn-primary">Editar</a>
                
                <form 
                  action="{{route('Mascota.destroy', $mascota)}}" 
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