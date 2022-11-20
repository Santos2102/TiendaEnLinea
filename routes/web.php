<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Dashboard\ProductoController;
use App\Http\Controllers\Dashboard\ClienteController;
use App\Http\Controllers\Dashboard\GoogleController;
use App\Http\Controllers\Dashboard\GerenteController;
use App\Http\Controllers\Dashboard\VentaController;
use App\Http\Controllers\ReporteController;
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
Route::resource('gerente', GerenteController::class);
Route::resource('venta', VentaController::class);
Route::get('download-pdf',[CartController::class,'downloadPDF'])->name('download-pdf');
Route::get('contactanos', [GoogleController::class, 'index']);

//Rutas de Reportes TOP 100
Route::get('/top100', [ReporteController::class, 'generalTOP100'])->name('reporte.reporte');
Route::get('/top100Mazatenango', [ReporteController::class, 'sucursalMazatenangoTOP100'])->name('reporte.100Mazatenango');
Route::get('/top100PraderaXela', [ReporteController::class, 'sucursalPraderaXelaTOP100'])->name('reporte.100PraderaXela');
Route::get('/top100PraderaChimaltenango', [ReporteController::class, 'sucursalPraderaChimaltenangoTOP100'])->name('reporte.100PraderaChimaltenango');
Route::get('/top100PraderaEscuintla', [ReporteController::class, 'sucursalPraderaEscuintlaTOP100'])->name('reporte.100PraderaEscuintla');
Route::get('/top100LaTrinidad', [ReporteController::class, 'sucursalLaTrinidadTOP100'])->name('reporte.100LaTrinidad');
Route::get('/top100Miraflores', [ReporteController::class, 'sucursalMirafloresTOP100'])->name('reporte.100Miraflores');

Route::post('login', function(){
    $credentials = request()->only('email','password');
    $temporal = Arr::get($credentials,'email');
    echo $temporal;

    // Verificacion de usuarios
    if(Auth::attempt($credentials))
    {
        if($temporal=="Gerente@gmail.com"){
            request()->session()->regenerate();
            return redirect('/gerente');   // colocar la ruta de los reportes
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