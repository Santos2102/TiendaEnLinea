<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Dashboard\ProductoController;
use App\Http\Controllers\Dashboard\ClienteController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [CartController::class, 'shop'])->name('shop');
Route::get('/cart', [CartController::class, 'cart'])->name('cart.index');
Route::post('/add', [CartController::class, 'add'])->name('cart.store');
Route::post('/update', [CartController::class, 'update'])->name('cart.update');
Route::post('/remove', [CartController::class, 'remove'])->name('cart.remove');
Route::post('/clear', [CartController::class, 'clear'])->name('cart.clear');
Route::resource('producto', ProductoController::class);
Route::resource('cliente', ClienteController::class);


Route::post('login', function(){
    $credentials = request()->only('email','password');
    $temporal = Arr::get($credentials,'email');
    echo $temporal;

    // Verificacion de usuarios
    if(Auth::attempt($credentials))
    {
        if($temporal=="Gerente@gmail.com"){
            request()->session()->regenerate();
            return redirect('/');   // colocar la ruta de los reportes
        }
        else if($temporal=="Admin@gmail.com"){
            request()->session()->regenerate();
            return redirect('/producto');
        }
        else {
            request()->session()->regenerate();
            return redirect('/');
        }
    }
});