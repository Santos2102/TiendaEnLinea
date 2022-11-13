<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel ="stylesheet" href="/css/estilos.css">
   <!--  <link rel="stylesheet" href="{{asset('css/>app.css')}}"> -->
    <!-- CSS only -->

    <title>Store Online S.A</title>
</head>
<body class="fondo">

    <header>
        <h1 class="titulo">Productos</h1>
        <br> <br>
    </header>
    
    <main>
    <div class="container" >
    <form action="{{route('producto.store')}}" method="post" >
    @csrf
        <div class="row" >

        <div class="col-xs-12 col-sm-12 col-md-12">
                        <label class="sub" ><b>Nombre:</b></label><br>
                        <input class="fo" id="exampleFormControlTextarea1" placeholder="Ingrese Nombre del producto" aria-label="Disabled input example"  rows="1" type="text" name="name" value ="{{$producto->name}}" readonly > <br>
                        @error('name')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                    <label for=""><b>Slug:</b></label>
                        <textarea readonly class="fo" id="exampleFormControlTextarea1" placeholder="Ingrese enlace" aria-label="Disabled input example"  rows="1" name="slug">{{$producto->slug}} </textarea><br>
                        @error('slug')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <label class="sub" ><b>Detalles:</b></label><br>
                        <input class="fo" id="exampleFormControlTextarea1" placeholder="Ingrese detalles" aria-label="Disabled input example"  rows="1" type="text" name="details" value ="{{$producto->details}}" readonly><br>
                        @error('details')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                        
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <label class="sub" ><b>Precio:</b></label><br>
                        <input class="fo" id="exampleFormControlTextarea1" placeholder="Ingrese precio" aria-label="Disabled input example"  rows="1" type="text" name="price" value ="{{$producto->price}}" readonly><br>
                        @error('price')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
               

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <label class="sub" ><b>Existencia:</b></label><br>
                        <input class="fo" id="exampleFormControlTextarea1" placeholder="Ingrese Existencia " aria-label="Disabled input example"  rows="1" type="text" name="shipping_cost" value ="{{$producto->shipping_cost}}" readonly><br>
                        @error('shipping_cost')
                            <small class="text-danger">{{$message}}</small>
                        @enderror 
                    </div> 

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <label class="sub" ><b>Descripción:</b></label><br>
                        <input class="fo" id="exampleFormControlTextarea1" placeholder="Ingrese descripción " aria-label="Disabled input example"  rows="3" type="text" name="description" value ="{{$producto->description}}" readonly><br>
                        @error('description')
                            <small class="text-danger">{{$message}}</small>
                        @enderror 
                    </div>
                    
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <label class="sub" ><b>Categoría:</b></label><br>
                        <input class="fo" id="exampleFormControlTextarea1" placeholder="Ingrese categoría " aria-label="Disabled input example"  rows="1" type="text" name="category" value ="{{$producto->category}}" readonly><br>
                        @error('category')
                            <small class="text-danger">{{$message}}</small>
                        @enderror 
                    </div> 

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <label class="sub" ><b>Marca:</b></label><br>
                        <input class="fo" id="exampleFormControlTextarea1" placeholder="Ingrese marca " aria-label="Disabled input example"  rows="1" type="text" name="brand" value ="{{$producto->brand}}" readonly><br>
                        @error('brand')
                            <small class="text-danger">{{$message}}</small>
                        @enderror 
                    </div> 
                        
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <label class="sub" ><b>Imagen:</b></label><br>
                        <img src="/Assets/Productos/{{$producto->image_path}}" width="25%">
                        @error('image_path')
                            <small class="text-danger">{{$message}}</small>
                        @enderror 
                    </div>

            </div>

        </div>

    </form>  
    </div>
    </main>
   
    
      <br><br>
      
</body>
</html>