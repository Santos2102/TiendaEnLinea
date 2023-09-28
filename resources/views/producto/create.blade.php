@extends('layouts.app')
@section('content') 
    

    <br> <br>
<div class="mt-5">
    <img class="ima" src="/Assets/Image/logo.png" alt="" width="25%">

        <div class="container">
            <form action="{{route('producto.store')}}" method="post" role="form" enctype="multipart/form-data">
                @include('partials._form')
            </form>   
        </div>
        </div>
@endsection