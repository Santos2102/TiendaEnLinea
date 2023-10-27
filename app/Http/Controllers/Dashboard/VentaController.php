<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Venta;
use Illuminate\Http\Request;
use App\Http\Requests\StoreVentaPost;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class VentaController extends Controller
{
    private $cantidad;
    private $producto;
    private $precio;
    private $subtotal;
    private $sucursal;
    private $cliente;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVentaPost $request)
    {
        //
        //Venta::create($request -> validated());
        
        session([
            'cantidad' => $request -> quantity, 
            'nombre' => $request -> name,
            'precio' => $request -> price,
            'subtotal' => \Cart::getTotal(),
            'Sucursal' => $request -> Sucursal,
            'cliente' => Auth::user()->name
        ]);

        \Stripe\Stripe::setApiKey(config('services.stripe.secret'));
 
        $productname = $request->get('name');
        $totalprice = $request->get('price');
        $two0 = "00";
        $total = \Cart::getTotal().$two0;
 
        $session = \Stripe\Checkout\Session::create([
            'line_items'  => [
                [
                    'price_data' => [
                        'currency'     => 'GTQ',
                        'product_data' => [
                            "name" => $productname,
                        ],
                        'unit_amount'  => $total,
                    ],
                    'quantity'   => 1,
                ],
                 
            ],
            'mode'        => 'payment',
            'success_url' => route('success'),
            'cancel_url'  => route('cart.index'),
        ]);
        return redirect()->away($session->url);
    }

    public function success()
    {
        $data = [
            'quantity' => session('cantidad'),
            'name' => session('nombre'),
            'price' =>  session('precio'),
            'subtotal' => session('subtotal'),
            'Sucursal' => session('Sucursal'),
            'Cliente' => session('cliente'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];
        $table = 'ventas';
        DB::table($table)->insert($data);
        session()->forget(['cantidad', 'nombre', 'precio', 'subtotal', 'Sucursal', 'cliente']);
        return redirect() -> action([CartController::class, 'shop']) -> with('success_msg', 'Venta registrada exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function show(Venta $venta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function edit(Venta $venta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Venta $venta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Venta $venta)
    {
        //
    }
}
