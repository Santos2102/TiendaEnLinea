@extends('layouts.app')
@section('content')
        <div class="container mt-5">

            <table class="table table-striped">
                <thead class="table-dark">
           
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
                        </thead>  
                    <tbody>
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
                    </tbody>
                          
            </table>       
        </div>
    @endsection