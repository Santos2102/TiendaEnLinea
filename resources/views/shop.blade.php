@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="/Css/bootstrap.css">
<link rel="stylesheet" href="/Css/estilos.css">
<link rel="stylesheet" href="{{asset('css/>app.css')}}">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
    integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK"
    crossorigin="anonymous"></script>
<div class="container" style="margin-top: 80px">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Inicio</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tienda</li>
        </ol>
    </nav>
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-7">
                    <h4>Productos</h4>
                </div>
            </div>
            <hr>
            <div class="row">
                @foreach($products as $pro)
                <div class="col-lg-3">
                    <div class="card" style="margin-bottom: 20px; height: auto;">
                        <img src="Assets/Productos/{{ $pro->image_path }}" class="card-img-top mx-auto"
                            style="height: 150px; width: 150px;display: block;" alt="{{ $pro->image_path }}">
                        <div class="card-body">
                            <h6 class="card-title">{{ $pro->name }}</h6>
                            <p>Q{{ $pro->price }}</p>
                            <form action="{{ route('cart.store') }}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" value="{{ $pro->id }}" id="id" name="id">
                                <input type="hidden" value="{{ $pro->name }}" id="name" name="name">
                                <input type="hidden" value="{{ $pro->price }}" id="price" name="price">
                                <input type="hidden" value="{{ $pro->image_path }}" id="img" name="img">
                                <input type="hidden" value="{{ $pro->slug }}" id="slug" name="slug">
                                <input type="hidden" value="1" id="quantity" name="quantity">
                                <div class="card-footer" style="background-color: white;">
                                    <div class="row">
                                        <button class="btn btn-secondary btn-sm" class="tooltip-test"
                                            title="add to cart">
                                            <i class="fa fa-shopping-cart"></i> agregar al carrito
                                        </button>
                                    </div>
                                    <h1></h1>
                                    <div class="row">
                                        <a href="{{route('producto.show',$pro->id)}}" class="btn btn-success"><i
                                                class="fa fa-info"></i> Ver Más</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <footer>
        @include('partials._footer')
    </footer>
</div>
@endsection