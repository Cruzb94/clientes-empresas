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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::resource('empresas', App\Http\Controllers\EmpresaController::class)->middleware('auth');
Route::resource('contactos', App\Http\Controllers\ContactoController::class)->middleware('auth');
Route::get('/catalogo/{empresa_id}', [App\Http\Controllers\EmpresaController::class, 'enviarCatalogo'])->name('catalogo');
// Route::get('/catalogo', function() {
//     $correo = new CatalogoMailable;
//     Mail::to('cruzbrito94@gmail.com')->send($correo);
//     return "enviado";
// });

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
