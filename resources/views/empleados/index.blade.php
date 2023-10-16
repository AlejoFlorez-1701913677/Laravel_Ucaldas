@extends('layouts.home')
@section('content') 
        
        <div class="container mt-5">
            <div class="row">
                @foreach ($empleados as $empleado)
                    <div class="col-sm">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">{{ $empleado->name }}</h5>
                            </div>
                            <div class="card-body">
                                <p class="card-text"><strong>Email</strong>: {{ $empleado->email }}</p>
                                <p class="card-text"><strong>Telefono</strong>: {{ $empleado->phone }}</p>
                                
                            </div>
                            
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <a href="{{ route('empleados.edit', $empleado->id) }}" class="btn btn-primary btn-sm">Editar</a>
                                    </div>
                                    <div class="col-sm-3">
                                        <form action="{{ route('empleados.destroy', $empleado->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                        </form>
                                    </div>
                                    <div class="col-sm-3">
                                        <a href="{{ route('empleados.show', $empleado->id) }}" class="btn btn-primary btn-sm">Ver</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

@endsection