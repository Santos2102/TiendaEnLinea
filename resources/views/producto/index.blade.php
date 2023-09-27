@extends('layouts.app')
@section('content')
    <main>
        <div class="container">
        <a class="btn btn-primary" href="{{route('producto.create')}}">Crear</a>
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
    @endsection