@extends('layouts.home')
@section('content')
    
<div class="container h-100 mt-5">
        <div class="row h-100 justify-content-center align-items-center">

            <div class="card">
                <div class="card-header">
                    <h5 class="card-title"><strong>Nombre:</strong>{{ $empleado->name }}</h5>
                    <p class="card-text"><strong>Email:</strong>{{ $empleado->email }}</p>
                    <p class="card-text"><strong>Telefono:</strong>{{ $empleado->phone }}</p>
                    <p class="card-text"><strong>Eps:</strong>{{ $empleado->eps }}</p>
                    <p class="card-text"><strong>Subsidio Estatal:</strong>{{ $empleado->stateSubsidy }}</p>
                    <p class="card-text"><strong>Fecha de Legalización:</strong>{{ $empleado->confirmationDate }}</p>
                    <p class="card-text"><strong>Fecha de Confirmación:</strong>{{ $empleado->legalizationDate }}</p>
                </div>
                
                <div class="card-footer">
                    <a href="{{ route('empleados.edit', $empleado->id) }}" class="btn btn-primary btn-sm">Editar</a>
                    <form action="{{ route('empleados.destroy', $empleado->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection