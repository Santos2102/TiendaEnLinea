<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProductoPost;
use Illuminate\Support\Facades\File;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $producto=Producto::all();
        return view ('producto.index',compact('producto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        echo view ('producto.create',["producto"=> new producto()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|min:5|Max:500',
            'slug'=>'required|min:5|Max:500',
            'details'=>'required|min:5|Max:500',
            'price'=>'required',
            'shipping_cost'=>'required',
            'description'=>'required|min:5|Max:500',
            'category'=>'required|min:5|Max:500',
            'brand'=>'required|min:2|Max:500',
            'image_path'=>'required|min:5|Max:500',
        ]);
        $prc_new=new Producto;
        $prc_new->name=$request->input('name');
        $prc_new->slug=$request->input('slug');
        $prc_new->details=$request->input('details');
        $prc_new->price=$request->input('price');
        $prc_new->shipping_cost=$request->input('shipping_cost');
        $prc_new->description=$request->input('description');
        $prc_new->category=$request->input('category');
        $prc_new->brand=$request->input('brand');
        if($request->hasFile('image_path'))
        {
            $file = $request->file('image_path');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('Assets/Productos', $filename);
            $prc_new->image_path = $filename;
        }
        $prc_new->save();
        return back()->with('status','Producto creado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        //
        echo view ('producto.show', ["producto" =>$producto]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        //
        echo view ('producto.edit',["producto"=>$producto]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(StoreProductoPost $request, Producto $producto)
    {
        //
        $producto->update($request->validated());
        return back()->with('status','Gracias, Producto actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        //
        $producto->delete();
        return back()->with('status','Gracias, Producto borrado exitosamente');
    }
}