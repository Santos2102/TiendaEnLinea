@include('dashboard.partials.sesion-flash-status')
                <section class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <label class="sub" ><b>Nombre:</b></label><br>
                        <input class="fo" id="exampleFormControlTextarea1" placeholder="Ingrese Nombre del producto" aria-label="Disabled input example"  rows="1" type="text" name="name" value ="{{old('name',$producto->name)}}"> <br>
                        @error('name')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                    <label for=""><b>Slug:</b></label>
                        <textarea class="fo" id="exampleFormControlTextarea1" placeholder="Ingrese enlace" aria-label="Disabled input example"  rows="1" name="slug">{{old('slug',$producto->slug)}}</textarea><br>
                        @error('slug')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <label class="sub" ><b>Detalles:</b></label><br>
                        <input class="fo" id="exampleFormControlTextarea1" placeholder="Ingrese detalles" aria-label="Disabled input example"  rows="1" type="text" name="details" value ="{{old('details',$producto->details)}}"><br>
                        @error('details')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                        
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <label class="sub" ><b>Precio:</b></label><br>
                        <input class="fo" id="exampleFormControlTextarea1" placeholder="Ingrese precio" aria-label="Disabled input example"  rows="1" type="text" name="price" value ="{{old('price',$producto->price)}}"><br>
                        @error('price')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
               

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <label class="sub" ><b>Existencia:</b></label><br>
                        <input class="fo" id="exampleFormControlTextarea1" placeholder="Ingrese Existencia " aria-label="Disabled input example"  rows="1" type="text" name="shipping_cost" value ="{{old('shipping_cost',$producto->shipping_cost)}}"><br>
                        @error('shipping_cost')
                            <small class="text-danger">{{$message}}</small>
                        @enderror 
                    </div> 

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <label class="sub" ><b>Descripción:</b></label><br>
                        <input class="fo" id="exampleFormControlTextarea1" placeholder="Ingrese descripción " aria-label="Disabled input example"  rows="3" type="text" name="description" value ="{{old('description',$producto->description)}}"><br>
                        @error('description')
                            <small class="text-danger">{{$message}}</small>
                        @enderror 
                    </div>
                    
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <label class="sub" ><b>Categoría:</b></label><br>
                        <input class="fo" id="exampleFormControlTextarea1" placeholder="Ingrese categoría " aria-label="Disabled input example"  rows="1" type="text" name="category" value ="{{old('category',$producto->category)}}"><br>
                        @error('category')
                            <small class="text-danger">{{$message}}</small>
                        @enderror 
                    </div> 

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <label class="sub" ><b>Marca:</b></label><br>
                        <input class="fo" id="exampleFormControlTextarea1" placeholder="Ingrese marca " aria-label="Disabled input example"  rows="1" type="text" name="brand" value ="{{old('brand',$producto->brand)}}"><br>
                        @error('brand')
                            <small class="text-danger">{{$message}}</small>
                        @enderror 
                    </div> 
                        
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <label class="sub" ><b>Imagen:</b></label><br>
                        <input type="file" name="image_path" value ="{{old('image_path',$producto->image_path)}}"><br>
                        @error('image_path')
                            <small class="text-danger">{{$message}}</small>
                        @enderror 
                    </div>
                        
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <button id="but"  class="btn btn-warning" type="submit">Enviar</button>
                    </div>
                </section>