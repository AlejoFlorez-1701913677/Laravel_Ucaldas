<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
        <title>empleados</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-warning">
            <div class="container-fluid">
                <a class="navbar-brand h1" href={{ route('empleados.index') }}>CRUD Empleado</a>
                <div class="justify-end ">
                    <div class="col ">
                        <a class="btn btn-sm btn-success" href={{ route('empleados.create') }}>Agregar Empleado</a>
                    </div>
                </div>
            </div>
        </nav>
        
        <div class="container h-100 mt-5">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-10 col-md-8 col-lg-6">
                    <h3>Agregar un Empleado</h3>
                    <form action="{{ route('empleados.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Telefono</label>
                            <input type="number" class="form-control" id="phone" name="phone" max="9999999999" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="eps">Eps</label>
                            <input type="text" class="form-control" id="eps" name="eps" required>
                        </div>
                        <div class="form-group">
                            <label for="stateSubsidy">Subisidio del Estado</label>
                            <input type="number" class="form-control" id="stateSubsidy" name="stateSubsidy" max="9999999999" required>
                        </div>
                        <div class="form-group">
                            <label for="confirmationDate">Confirmado</label>
                            <input type="date" name="confirmationDate" id="confirmationDate" required>
                        </div>
                        <div class="form-group">
                            <label for="legalizationDate">Legal</label>
                            <input type="date" name="legalizationDate" id="legalizationDate" required>
                        </div>
                        
                        <br>
                        <button type="submit" class="btn btn-primary">Crear Empleado</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>