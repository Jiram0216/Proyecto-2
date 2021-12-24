<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Pagina de incio
Route::get('/', [App\Http\Controllers\InicioController::class, 'index'])->name('inicio.index');
// Ruta de menu
Route::get('/menu', [App\Http\Controllers\MenuController::class, 'index'])->name('menu.index');
// Pagina para observar las ordenes de trabajo
Route::get('/vista1', [App\Http\Controllers\VistaOrdenController::class, 'index'])->name('vistaorden.index');
Route::get('/vista2', [App\Http\Controllers\VistaOrdenController::class, 'proveedor'])->name('vistaorden.proveedor');
// Rota Orden de trabajo
Route::get('/ordentrabajos', [App\Http\Controllers\OrdenTrabajoController::class, 'index'])->name('ordentrabajo.index');
Route::get('/ordentrabajos/create', [App\Http\Controllers\OrdenTrabajoController::class, 'create'])->name('ordentrabajo.create');
Route::post('/ordentrabajos', [App\Http\Controllers\OrdenTrabajoController::class, 'store'])->name('ordentrabajo.store');
Route::get('/ordentrabajos/{ordenTrabajo}', [App\Http\Controllers\OrdenTrabajoController::class, 'show'])->name('ordentrabajo.show');
Route::get('/ordentrabajos/{ordenTrabajo}/edit', [App\Http\Controllers\OrdenTrabajoController::class, 'edit'])->name('ordentrabajo.edit');
Route::put('/ordentrabajos/{ordenTrabajo}', [App\Http\Controllers\OrdenTrabajoController::class, 'update'])->name('ordentrabajo.update');
Route::delete('/ordentrabajos/{ordenTrabajo}', [App\Http\Controllers\OrdenTrabajoController::class, 'destroy'])->name('ordentrabajo.destroy');
// Ruta de Provedores
Route::get('/proveedores', [App\Http\Controllers\ProveedorController::class, 'index'])->name('proveedores.index');
Route::get('/proveedores/create', [App\Http\Controllers\ProveedorController::class, 'create'])->name('proveedores.create');
Route::post('/proveedores', [App\Http\Controllers\ProveedorController::class, 'store'])->name('proveedores.store');
Route::get('/proveedores/{proveedor}', [App\Http\Controllers\ProveedorController::class, 'show'])->name('proveedores.show');
Route::get('/proveedores/{proveedor}/edit', [App\Http\Controllers\ProveedorController::class, 'edit'])->name('proveedores.edit');
Route::put('/proveedores/{proveedor}', [App\Http\Controllers\ProveedorController::class, 'update'])->name('proveedores.update');
Route::delete('/proveedores/{proveedor}', [App\Http\Controllers\ProveedorController::class, 'destroy'])->name('proveedores.destroy');
// Ruta Perfil de Usuarios
Route::get('/perfiles/{perfil}', [App\Http\Controllers\PerfilController::class, 'show'])->name('perfiles.show');
Route::get('/perfiles/{perfil}/edit', [App\Http\Controllers\PerfilController::class, 'edit'])->name('perfiles.edit');
Route::put('perfiles/{perfil}', [App\Http\Controllers\PerfilController::class, 'update'])->name('perfiles.update');
// Buscador de Ordenes de Trabajo
Route::get('/buscar1', [App\Http\Controllers\OrdenTrabajoController::class, 'search'])->name('buscar.show');
// Buscador de Proveedores
Route::get('/buscar2', [App\Http\Controllers\ProveedorController::class, 'search'])->name('busquedas.show2');
// Rutas de nave
Route::get('/nave/1', [App\Http\Controllers\MaquinasController::class, 'nave1'])->name('maquinas.nave1');
Route::get('/nave/2', [App\Http\Controllers\MaquinasController::class, 'nave2'])->name('maquinas.nave2');
Route::get('/nave/3', [App\Http\Controllers\MaquinasController::class, 'nave3'])->name('maquinas.nave3');
// Proveedores
Route::get('/Proveedores/1', [App\Http\Controllers\MaquinasController::class, 'proveedores'])->name('maquinas.proveedores');
// Rutas de Troquel
Route::get('/maquinas/1', [App\Http\Controllers\MaquinasController::class, 'troquel1'])->name('maquinas.troquel1');
Route::get('/maquinas/2', [App\Http\Controllers\MaquinasController::class, 'troquel2'])->name('maquinas.troquel2');
Route::get('/maquinas/3', [App\Http\Controllers\MaquinasController::class, 'troquel3'])->name('maquinas.troquel3');
Route::get('/maquinas/4', [App\Http\Controllers\MaquinasController::class, 'troquel4'])->name('maquinas.troquel4');
Route::get('/maquinas/5', [App\Http\Controllers\MaquinasController::class, 'troquel5'])->name('maquinas.troquel5');
Route::get('/maquinas/6', [App\Http\Controllers\MaquinasController::class, 'troquel6'])->name('maquinas.troquel6');
// Rutas de Prensa
Route::get('/maquinas/7', [App\Http\Controllers\MaquinasController::class, 'prensa1'])->name('maquinas.prensa1');
Route::get('/maquinas/8', [App\Http\Controllers\MaquinasController::class, 'prensa2'])->name('maquinas.prensa2');
Route::get('/maquinas/9', [App\Http\Controllers\MaquinasController::class, 'prensa3'])->name('maquinas.prensa3');
Route::get('/maquinas/10', [App\Http\Controllers\MaquinasController::class, 'prensa4'])->name('maquinas.prensa4');
Route::get('/maquinas/11', [App\Http\Controllers\MaquinasController::class, 'prensa5'])->name('maquinas.prensa5');
// Rutas de Sierra
Route::get('/maquinas/12', [App\Http\Controllers\MaquinasController::class, 'sierra1'])->name('maquinas.sierra1');
Route::get('/maquinas/13', [App\Http\Controllers\MaquinasController::class, 'sierra2'])->name('maquinas.sierra2');
Route::get('/maquinas/14', [App\Http\Controllers\MaquinasController::class, 'sierra3'])->name('maquinas.sierra3');
// Rutas de Guillotina
Route::get('/maquinas/15', [App\Http\Controllers\MaquinasController::class, 'guillotina1'])->name('maquinas.guillotinas1');
Route::get('/maquinas/16', [App\Http\Controllers\MaquinasController::class, 'guillotina2'])->name('maquinas.guillotinas2');
Route::get('/maquinas/17', [App\Http\Controllers\MaquinasController::class, 'guillotina3'])->name('maquinas.guillotinas3');
// Rutas de roladoras
Route::get('/maquinas/18', [App\Http\Controllers\MaquinasController::class, 'roladora1'])->name('maquinas.roladora1');
Route::get('/maquinas/19', [App\Http\Controllers\MaquinasController::class, 'roladora2'])->name('maquinas.roladora2');
Route::get('/maquinas/20', [App\Http\Controllers\MaquinasController::class, 'roladora3'])->name('maquinas.roladora3');
Route::get('/maquinas/21', [App\Http\Controllers\MaquinasController::class, 'roladora4'])->name('maquinas.roladora4');
// Rutas de Laser
Route::get('/maquinas/22', [App\Http\Controllers\MaquinasController::class, 'laser1'])->name('maquinas.laser1');
Route::get('/maquinas/23', [App\Http\Controllers\MaquinasController::class, 'laser2'])->name('maquinas.laser2');
// Rutas de compresor
Route::get('/maquinas/24', [App\Http\Controllers\MaquinasController::class, 'compresor1'])->name('maquinas.compresor1');
Route::get('/maquinas/25', [App\Http\Controllers\MaquinasController::class, 'compresor2'])->name('maquinas.compresor2');
// Rutas de selladora
Route::get('/maquinas/26', [App\Http\Controllers\MaquinasController::class, 'selladora1'])->name('maquinas.selladora1');
// Ruta de transformador
Route::get('/maquinas/27', [App\Http\Controllers\MaquinasController::class, 'transformador1'])->name('maquinas.transformador1');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
