@extends('layouts.app')
@section('content')
        <div class="container mt-5">
        <br>
        <br>
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
                                Marca
                            </td>
                            <td>
                                Detalles
                            </td>
                            <td>
                                Precio
                            </td>

                        </tr>
                        </thead>  
                <tbody>
                    
                 

                    @foreach($products as $products)
                        <tr>
                        
                            <td>
                                {{$products->shipping_cost}}
                            </td>
                            <td>
                                {{$products->NAME}}
                            </td>
                            <td>
                                {{$products->brand}}
                            </td>
                            <td>
                                {{$products->details}}
                            </td>
                            <td>
                                {{$products->price}}
                            </td>
                            
                            

                        </tr>
                    @endforeach
                    </tbody>
                           
            </table>       
        </div>
        @endsection