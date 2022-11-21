<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Css/bootstrap.css">
    <link rel="stylesheet" href="/Css/style.css">
    <link rel="stylesheet" href="{{asset('css/>app.css')}}">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
        integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK"
        crossorigin="anonymous"></script>

    <title>Store Online S.A</title>
</head>

<body style="background-image: url('/Assets/Image/fondo.jpg');background-attachment: fixed;">
    <header>
        @include('partials.navbar_gerente')
        <br>
        <br>
        <br>

    </header>

    <main>
        <div class="container">
            <form action="{{ route('reporte.CompraEntreFechas') }}" method="post">
                <div class="row">
                    <div class="col-12 col-md-3">
                        <span>Fecha Inicial</span>
                        <div class="form-group">
                            <input class="form-control" type="date" value="{{old('fecha_ini')}}" name="fecha_ini"
                                id="fecha_ini">
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <span>Fecha Final</span>
                        <div class="form-group">
                            <input class="form-control" type="date" value="{{old('fecha_fin')}}" name="fecha_fin"
                                id="fecha_fin">
                        </div>
                    </div>
                    <div class="col-12 col-md-3 text-center mt-4">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-sm">Consultar</button>
                        </div>
                    </div>
                </div>
            </form>

            <br>
            <br>
            <table class="table table-striped" style="background-color: white;">
                <thead>
                <tbody>
                    <tr>
                    <td>
                            Id
                        </td>
                        <td>
                            Cantidad
                        </td>
                        <td>
                            Nombre
                        </td>
                        <td>
                            Precio
                        </td>
                        <td>
                            subtotal
                        </td>
                        <td>
                            Sucursal
                        </td>
                        <td>
                            Cliente
                        </td>
                    </tr>
                </tbody>

                @foreach($products as $products)
                <tr>
                <td>
                        {{$products->id}}
                    </td>
                    <td>
                        {{$products->quantity}}
                    </td>
                    <td>
                        {{$products->name}}
                    </td>
                    <td>
                        {{$products->price}}
                    </td>
                    <td>
                        {{$products->subtotal}}
                    </td>
                    <td>
                        {{$products->Sucursal}}
                    </td>
                    <td>
                        {{$products->Cliente}}
                    </td>


                </tr>
                @endforeach
                </thead>
            </table>
        </div>
    </main>
</body>

</html>