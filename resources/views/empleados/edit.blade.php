@extends('layouts.home')
@section('content')

    <div class="container h-100 mt-5">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-10 col-md-8 col-lg-6">
                <h3>Actualizar Empleado</h3>
                <form action="{{ route('empleados.update', $empleado->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $empleado->name }}" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Telefono</label>
                        <input type="number" class="form-control" id="phone" name="phone" max="9999999999" value="{{ $empleado->phone }}" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ $empleado->email }}" required>
                    </div>
                    <div class="form-group">
                        <label for="eps">Eps</label>
                        <input type="text" class="form-control" id="eps" name="eps" value="{{ $empleado->eps }}" required>
                    </div>
                    <div class="form-group">
                        <label for="stateSubsidy">Subisidio del Estado</label>
                        <input type="number" class="form-control" id="stateSubsidy" name="stateSubsidy" max="9999999999" value="{{ $empleado->stateSubsidy }}" required>
                    </div>
                    <div class="form-group">
                        <label for="confirmationDate">Confirmado</label>
                        <input type="date" name="confirmationDate" id="confirmationDate" value="{{ $empleado->confirmationDate }}" required>
                    </div>
                    <div class="form-group">
                        <label for="legalizationDate">Legal</label>
                        <input type="date" name="legalizationDate" id="legalizationDate" value="{{ $empleado->legalizationDate }}" required>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Actualizar Empleado</button>
                </form>
            </div>
        </div>
    </div>

@endsection