@extends('layout.base')
@section('content') {{-- @yield('content') --}}
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="alert alert-info text-center">Editar a {{ $mascota->name }}</h1>
        </div>
        <div class="col-8">
            <form action="{{ route('Mascota.update', $mascota) }}" method="post" class="row">
                @csrf
                @method('PUT')
                <div class="col-12">
                    <label for="name" class="form-label">Nombre</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Nombre" value="{{old('name',$mascota->name)}}">
                </div>
                <div class="col-12">
                    <label for="owner" class="form-label">Dueño</label>
                    <input type="text" class="form-control" id="owner" name="owner" placeholder="Dueño" value="{{old('owner',$mascota->owner)}}">
                </div>
                <div class="col-12">
                    <label for="race" class="form-label">Raza</label>
                    <input type="text" class="form-control @error('race') is-invalid @enderror" id="race" name="race" placeholder="Raza" value="{{old('race', $mascota->race)}}" required>
                </div>
                <div class="col-12">
                    <label for="weight" class="form-label">Peso</label>
                    <div class="input-group">
                        <input type="number" class="form-control" id="weight" name="weight" placeholder="Peso" value="{{old('weight',$mascota->weight)}}" required>
                        <span class="input-group-text @error('weight') is-invalid @enderror" id="basic-addon2">KG</span>
                    </div>
                </div>
                <div class="col-12">
                    <label for="height" class="form-label">Altura</label>
                    <div class="input-group">
                        <input type="number" class="form-control @error('height') is-invalid @enderror" id="height" name="height" placeholder="Altura" value="{{old('height',$mascota->height)}}" required>
                        <span class="input-group-text @error('height') is-invalid @enderror" id="basic-addon2">CM</span>
                    </div>
                </div>
                <div class="col-12">
                    <label for="width" class="form-label">Anchura</label>
                    <div class="input-group">
                        <input type="number" class="form-control @error('width') is-invalid @enderror" id="width" name="width" placeholder="Anchura" value="{{old('width',$mascota->width)}}" required>
                        <span class="input-group-text @error('width') is-invalid @enderror" id="basic-addon2">CM</span>
                    </div>
                </div>
                
                <div class="col-12">
                    <label for="birthday" class="form-label">Fecha de Nacimiento</label>
                    <input type="date" class="form-control  @error('birthday') is-invalid @enderror" id="birthday" name="birthday" placeholder="Cumpleaños" value="{{old('birthday',$mascota->birthday)}}" required>
                </div>

                <div class="col-12">
                    <label for="lastVaccination" class="form-label">Fecha de última Vacunación</label>
                    <input type="date" class="form-control" id="lastVaccination" name="lastVaccination" placeholder="Cumpleaños" value="{{old('lastVaccination',$mascota->lastVaccination)}}">
                </div>
                
                
                @if ($errors->any())
                    <div class="alert alert-danger col-12 mt-4">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="col-12 my-4">
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">Editar</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-8">
            <div class="d-grid gap-2">
                <a href="{{route('Mascota.index')}}" class="btn btn-danger">Volver</a>
            </div>
        </div>
    </div>
</div>
@endsection