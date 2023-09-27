@extends('layouts.app')
@section('content') 
    
    <h1 class="titulo">Ingreso de productos</h1>
    <br> <br>

    <img class="ima" src="/Assets/Image/logo.png" alt="" width="25%">
    </header>

    <main>
        <div class="container">
            <form action="{{route('producto.store')}}" method="post">
                @include('partials._form')
            </form>   
        </div>
    </main>
@endsection