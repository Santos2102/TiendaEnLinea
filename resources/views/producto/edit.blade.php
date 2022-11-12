<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="short icon" href=" /Assets/Image/logo.png">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel ="stylesheet" href="/css/estilos.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    
   <!--  <link rel="stylesheet" href="{{asset('css/>app.css')}}"> -->
    <!-- CSS only -->

    <title>Store Online S.A.</title>
</head>

<body class="fondo">
    <header>


    <h1 class="titulo">Edición de Productos</h1>
    <br> <br>

    <img class="ima" src="/Assets/Image/logo.png" alt="" width="25%">
    </header>

    <main>
        <div class="container">
            <form action="{{route('producto.update',$producto->id)}}" method="post">
                @method('PUT')
                @include('dashboard.partials._form')
            </form>   
        </div>
    </main>
    
</body>
</html>