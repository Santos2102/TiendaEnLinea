@extends('layouts.app')
@section('content')
        <div class="container mt-5">
            <table class="table table-striped">
                <thead class="table-dark">
                <tr>
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
                                Subtotal
                            </td>
                            <td>
                                Sucursal
                            </td>
                            <td>
                                Cliente
                            </td>
                        </tr>
                </thead>   
                <tbody>
      
                 

                    @foreach($products as $products)
                        <tr>
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
                    </tbody>      
            </table>       
        </div>
        @endsection