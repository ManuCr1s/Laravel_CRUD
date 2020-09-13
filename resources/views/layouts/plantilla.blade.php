<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Empleado</title>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/datatables.min.css')}}">
</head>
<body>
    <div id="cabecera">
        <nav class="navbar navbar-light bg-dark mb-5">
            <h3 class="text-white">CRUD DE EMPLEADOS</h3>
            <ul class="navbar-nav d-flex justify-content-end">
                    <li class="nav-item active">
                        @yield("cabecera")
                    </li>
                </ul>   
        </nav>
    </div>
    <div id="contenido">
        <div class="container">
        @yield("contenido")
        </div>
    </div>
    <div id="js">
        <script src="{{asset('assets/js/jquery.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.js')}}"></script>
    </div>
</body>
</html>
