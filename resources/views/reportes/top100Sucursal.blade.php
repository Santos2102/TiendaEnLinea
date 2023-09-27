@extends('layouts.app')
@section('content')
        <div class="container">

            <table class="table table-striped" style="background-color: white;">
                <thead>
                <tbody>
                        <tr>
                            
                            <td>
                                Nombre
                            </td>
                            <td>
                                Cantidad
                            </td>
                            <td>
                                Sucursal
                            </td>
                        </tr>
                    </tbody>

                    @foreach($products as $products)
                        <tr>
                           
                            <td>
                                {{$products->NAME}}
                            </td>
                            <td>
                                {{$products->Cantidad}}
                            </td>
                            <td>
                                {{$products->Sucursal}}
                            </td>
                            

                        </tr>
                    @endforeach
                </thead>                
            </table>       
        </div>
        @endsection