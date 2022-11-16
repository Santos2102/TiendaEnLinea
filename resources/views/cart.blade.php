@extends('layouts.app')
@section('content')
<div class="container" style="margin-top: 80px">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Tienda</a></li>
            <li class="breadcrumb-item active" aria-current="page">Cart</li>
        </ol>
    </nav>
    @if(session()->has('success_msg'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session()->get('success_msg') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
    @endif
    @if(session()->has('alert_msg'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        {{ session()->get('alert_msg') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
    @endif
    @if(count($errors) > 0)
    @foreach($errors0>all() as $error)
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ $error }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
    @endforeach
    @endif
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <br>
            @if(\Cart::getTotalQuantity()>0)
            <h4>{{ \Cart::getTotalQuantity()}} Producto(s) en el carrito</h4><br>
            @else
            <h4>No hay productos en tu carrito</h4><br>
            <a href="/" class="btn btn-dark">Continue en la tienda</a>
            @endif
            @foreach($cartCollection as $item)
            <div class="row">
                <div class="col-lg-3">
                    <img src="Assets/Productos/{{ $item->attributes->image }}" class="img-thumbnail" width="200"
                        height="200">
                </div>
                <div class="col-lg-5">
                    <p>
                        <b><a href="/shop/{{ $item->attributes->slug }}">{{ $item->name
                                }}</a></b><br>
                        <b>Price: </b>Q{{ $item->price }}<br>
                        <b>Sub Total: </b>Q{{ \Cart::get($item->id)->getPriceSum() }}<br>
                        {{-- <b>With Discount: </b>Q{{
                        \Cart::get($item->id)->getPriceSumWithConditions() }}--}}
                    </p>
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <form action="{{ route('cart.update') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group row">
                                <input type="hidden" value="{{ $item->id}}" id="id" name="id">
                                <input type="number" class="form-control form-control-sm" value="{{ $item->quantity }}"
                                    id="quantity" name="quantity" style="width: 70px; margin-right:
                                10px;">
                                <button class="btn btn-secondary btn-sm" style="margin-rxight:
                                25px;"><i class="fa fa-edit"></i></button>
                            </div>
                        </form>
                        <form action="{{ route('cart.remove') }}" method="POST">
                            {{ csrf_field() }}
                            <input type="hidden" value="{{ $item->id }}" id="id" name="id">
                            <button class="btn btn-dark btn-sm" style="margin-right: 10px;"><i
                                    class="fa fa-trash"></i></button>
                        </form>
                    </div>
                </div>
            </div>
            <hr>
            @endforeach
            @if(count($cartCollection)>0)
            <div class="container">
                <div class="row" >
                    <form action="{{ route('cart.clear') }}" method="POST">
                        {{ csrf_field() }}
                        <button class="btn btn-secondary btn-md">Borrar Carrito</button>
                    </form>
                </div>
                <a href="{{ route('download-pdf') }}" class="btn btn-success btn-sm">Generar Cotizacion</a>
            </div>
            @endif
        </div>
        @if(count($cartCollection)>0)
        <div class="col-lg-5">
            <div class="card">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Total: </b>Q{{ \Cart::getTotal() }}</li>
                </ul>
            </div>

            <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Sucursales
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" href="#"><b> Pradera Chimaltenango</b></a></li>
                                <li><a class="dropdown-item" href="#"><b> Pradera Escuintla</b></a></li>
                                <li><a class="dropdown-item" href="#"><b> Las Américas Mazatenango</b></a></li>
                                <li><a class="dropdown-item" href="#"><b> La Trinidad Coatepeque</b></a></li>
                                <li><a class="dropdown-item" href="#"><b> Pradera Xela Quetzaltenango</b></a></li>
                                <li><a class="dropdown-item" href="#"><b> Centro Comercial Miraflores CC</b></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

            <br><a href="/" class="btn btn-dark">Continue en la tienda</a>


            
            @foreach($products as $pro)

                <form action="{{ route('cart.store') }}" method="POST">
                {{ csrf_field() }}
                <input type="hidden" value="{{ $pro->id }}" id="id" name="id">
                <input type="hidden" value="{{ $pro->name }}" id="name" name="name">
                <input type="hidden" value="{{ $pro->price }}" id="price" name="price">
                <input type="hidden" value="{{ $pro->image_path }}" id="img" name="img">
                <input type="hidden" value="{{ $pro->slug }}" id="slug" name="slug">
                <input type="hidden" value="1" id="quantity" name="quantity">
               
                </form>
                   
                  
            @endforeach

            <a href="/checkout" class="btn btn-success">Proceder al Checkout</a>
        </div>
        @endif
    </div>
    <br><br>
</div>
@endsection