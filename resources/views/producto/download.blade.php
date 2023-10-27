<!doctype html>
<html lang="en">

<head>
    <title>Laravel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        table {
            font-size: 12px;
        }
    </style>
</head>

<body>
    <div class="container py-5">
        <h5 class=" font-weight-bold">Factura</h5>
        <h5 class=" font-weight-bold">Cliente: {{ $cliente }}</h5>
        <h5 class=" font-weight-bold">Fecha: {{ Carbon\Carbon::parse($fecha)->format('d-m-Y') }}</h5>
        <table class="table table-bordered mt-5">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Cantidad</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>SubTotal</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $control = 1;
                @endphp
                @for($i = 0; $i < Count($cantidad); $i++)
                <tr>
                    <td>{{ $control }}</td>
                    <td>{{ $cantidad[$i] }}</td>
                    <td>{{ $nombre[$i] }}</td>
                    <td>{{ $precio[$i]}}</td>
                    <td>{{ $subtotal[$i] }}</td>
                </tr>
                @php
                    $control++;
                @endphp
                @endfor
            </tbody>
        </table>
        <label>Total: {{\Cart::getTotal()}}</label>
    </div>
</body>

</html>