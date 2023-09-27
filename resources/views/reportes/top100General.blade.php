@extends('layouts.app')
@section('content')
        <div class="container mt-5">
            <table class="table table-striped">
                <thead class="table-dark">
                <tbody>
                        <tr>
                            
                            <td>
                                Nombre
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
                                {{$products->Cantidad}}
                            </td>
                            

                        </tr>
                    @endforeach
                </thead>                
            </table>       
        </div>
        @endsection