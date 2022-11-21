<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Css/bootstrap.css">
    <link rel="stylesheet" href="/Css/style.css">
    <link rel="stylesheet" href="{{asset('css/>app.css')}}">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>

    <title>Store Online S.A</title>
</head>
<body style="background-image: url('/Assets/Image/fondo.jpg');background-attachment: fixed;">
    <header >
    @include('partials.navbar_gerente')
    <br>
    <br>
    <br>
        
    </header>    

    <main>
        <div class="container">
        <br>
        <br>
            <table class="table table-striped" style="background-color: white;">
                <thead>
                <tbody>
                        <tr>
                            
                            <td>
                                Nombre
                            </td>
                            <td>
                                Mes
                            </td>
                            <td>
                                Cantidad
                            </td>
                        </tr>
                    </tbody>

                    @foreach($products as $products)
                        <tr>
                           
                            <td>
                                {{$products->NAME}}
                            </td>
                            <td>
                                {{$products->Mes}}
                            </td>
                            <td>
                                {{$products->Cantidad}}
                            </td>
                            

                        </tr>
                    @endforeach
                </thead>                
            </table>       
        </div>
    </main>
</body>
</html>