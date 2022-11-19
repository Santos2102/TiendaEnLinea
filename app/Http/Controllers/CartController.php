<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use Barryvdh\DomPDF\Facade;
use PDF;

class CartController extends Controller
{
    public function shop()
    {
        $products = Producto::all();
        //dd($products);
        return view('shop')->withTitle('Store Online S.A.')->with([
            'products' =>
            $products
        ]);
    }
    public function cart()
    {
        $cartCollection = \Cart::getContent();
        //dd($cartCollection);
        return view('cart')->withTitle('Store Online S.A.')->with([
            'cartCollection' =>
            $cartCollection
        ]);
        ;
    }

    public function downloadPDF(){
        $cartCollection = \Cart::getContent();

       view()->share('producto.download',$cartCollection);

        $pdf = PDF::loadView('producto.download', ['cartCollection' =>$cartCollection]);

        return $pdf->download('Cotizacion.pdf');
    }


    public function remove(Request $request)
    {
        \Cart::remove($request->id);
        return redirect()->route('cart.index')->with('success_msg', 'Producto Eliminado!');
    }
    public function add(Request $request)
    {
        \Cart::add(
            array(
                'id' => $request->id,
                'name' => $request->name,
                'price' => $request->price,
                'quantity' => $request->quantity,
                'attributes' => array(
                    'image' => $request->img,
                    'slug' => $request->slug
                )
            )
        );
        return redirect()->route('cart.index')->with('success_msg', 'Producto Agregado a sú Carrito!');
    }
    public function update(Request $request)
    {
        \Cart::update(
            $request->id,
            array(
                'quantity' => array(
                    'relative' => false,
                    'value' => $request->quantity
                ),
            )
        );
        return redirect()->route('cart.index')->with('success_msg', 'Carrito de Compras actualizado!');
    }
    public function clear()
    {
        \Cart::clear();
        return redirect()->route('cart.index')->with('success_msg', ' Carrito de Compras borrado!');
    }
}