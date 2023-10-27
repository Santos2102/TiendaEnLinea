<?php 
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class StripeController extends Controller
{
    public function checkout()
    {
        return view('checkout');
    }
 
    public function session(Request $request)
    {
        \Stripe\Stripe::setApiKey(config('services.stripe.secret'));
 
        $productname = $request->get('name');
        $totalprice = $request->get('price');
        $two0 = "00";
        $total = \Cart::getTotal();
 
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
                    'quantity'   => $request->get('quantity'),
                ],
            ],
            'mode'        => 'payment',
            'success_url' => route('success'),
            'cancel_url'  => route('checkout'),
        ]);
 
        return redirect()->away($session->url);
    }
 
    public function success()
    {
        //Venta::create($request->validated());
    }
}
