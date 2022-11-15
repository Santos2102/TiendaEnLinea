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
        <h5 class=" font-weight-bold">Cotizacion</h5>
        <table class="table table-bordered mt-5">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Cantidad</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Imagen</th>
                    <th>SubTotal</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cartCollection as $cartCollection)
                <tr>
                    <td>{{ $cartCollection->id }}</td>
                    <td>{{ $cartCollection->quantity }}</td>
                    <td>{{ $cartCollection->name }}</td>
                    <td>{{ $cartCollection->price }}</td>
                    <td>
                        <img src="Assets/Productos/{{$cartCollection->attributes->image}}" width="150">
                    </td>
                    <td>{{ \Cart::get($cartCollection->id)->getPriceSum() }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <label>Total: {{\Cart::getTotal()}}</label>
    </div>
</body>

</html>