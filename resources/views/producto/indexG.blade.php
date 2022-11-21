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
    @include('partials.navbar_gerente')
    <br>
    <br>
    <br>
</head>
<body style="background-image: url('/Assets/Image/fondo.jpg');background-attachment: fixed;">
    <header >
   
    <br>
    <br>
    <br>
        
    </header>    

    <main>
        <div class="container">
        <a class="btn btn-primary" href="{{route('gerente.create')}}">Crear</a>
        <br>
        <br>
            <table class="table table-striped" style="background-color: white;">
                <thead>
                <tbody>
                        <tr>
                            <td>
                                ID
                            </td>
                            <td>
                                Nombre
                            </td>
                            <td>
                                Enlace
                            </td>
                            <td>
                                Detalles
                            </td>
                            <td>
                                Precio
                            </td>
                            <td>
                                Existencias
                            </td>
                            <td>
                                Descripcion
                            </td>
                            <td>
                                Categoria
                            </td>
                            <td>
                                Marca
                            </td>
                            <td>
                                Imagen
                            </td>
                            <td>
                                Creacion
                            </td>
                            <td>
                                Actualizado
                            </td>
                            <td>
                                Acciones
                            </td>
                        </tr>
                    </tbody>

                    @foreach($producto as $producto)
                        <tr>
                            <td>
                                {{$producto->id}}
                            </td>
                            <td>
                                {{$producto->name}}
                            </td>
                            <td>
                                {{$producto->slug}}
                            </td>
                            <td>
                                {{$producto->details}}
                            </td>
                            <td>
                                {{$producto->price}}
                            </td>
                            <td>
                                {{$producto->shipping_cost}}
                            </td>
                            <td>
                                {{$producto->description}}
                            </td>
                            <td>
                                {{$producto->category}}
                            </td>
                            <td>
                                {{$producto->brand}}
                            </td>
                            <td>
                                <img src="Assets/Productos/{{$producto->image_path}}" width="150">
                            </td>
                            <td>
                                {{$producto->created_at->format('d-m-Y')}}
                            </td>
                            <td>
                                {{$producto->updated_at->format('d-m-Y')}}
                            </td>

                            <td>
                                <a href="{{route('producto.show',$producto->id)}}" class="btn btn-success">Ver</a>
                                <a href="{{route('producto.edit',$producto->id)}}" class="btn btn-warning">Editar</a>
                                <form method="post" action="{{route('producto.destroy',$producto->id)}}">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger" type="submit">Borrar</button>
                                </form>
                            </td>

                        </tr>
                    @endforeach
                </thead>                
            </table>       
        </div>
    </main>
</body>
</html>