<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Empleado</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <div class="container-fluid">
            <a class="navbar-brand h1" href={{ route('empleados.index') }}>CRUD Empleados</a>
            <div class="justify-end ">
                <div class="col ">
                    <a class="btn btn-sm btn-success" href={{ route('empleados.create') }}>Agregar Empleado</a>
                </div>
            </div>
    </nav>
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
</body>

</html>