<?php

use Illuminate\Support\Facades\Route;



use App\Http\Controllers\PaisesController;
use App\Http\Controllers\EntidadesController;
use App\Http\Controllers\MunicipiosController;
use App\Http\Controllers\Tipos_usuarioController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProveedoresController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\Tipos_ventaController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\Fotos_productosController;
use App\Http\Controllers\ComprasController;
use App\Http\Controllers\Detalle_compraController;
use App\Http\Controllers\Tipos_pagoController;
use App\Http\Controllers\VentasController;
use App\Http\Controllers\Detalle_ventaController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('encabezado', function () {
    return view('template/encabezado');
});

Route::get('contenido', function () {
    return view('template/contenido');
});

Route::get('menu', function () {
    return view('template/menu');
});
Route::get('pie', function () {
    return view('template/pie');
});

Route::get('master', function () {
    return view('template/master');
});


Route::get('bienvenida', function () {
    return view('bienvenida');
});

Route::resource('paises', PaisesController::class);

Route::resource('entidades', EntidadesController::class);

Route::resource('municipios', MunicipiosController::class);

Route::resource('tipos_usuario', Tipos_usuarioController::class);

Route::resource('users', UsersController::class);

Route::resource('proveedores', ProveedoresController::class);

Route::resource('categorias', CategoriasController::class);

Route::resource('tipos_venta', Tipos_ventaController::class);

Route::resource('productos', ProductosController::class);

Route::resource('fotos_productos', Fotos_productosController::class);

Route::resource('compras', ComprasController::class);

Route::resource('detalle_compra', Detalle_compraController::class);

Route::resource('tipos_pago', Tipos_pagoController::class);

Route::resource('ventas', VentasController::class);

Route::resource('detalle_venta', Detalle_ventaController::class);