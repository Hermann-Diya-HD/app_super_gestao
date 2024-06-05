<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\ContactoController;

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
/*
Route::get('/', function () {
    return ("Testando DD");
});
*/

//Route::get('/', 'PrincipalController@principal');
Route::get('/', [PrincipalController::class, 'principal']);


Route::get('/sobre-nos', [SobreNosController::class, 'sobreNos']);
/*Route::get('/sobre-nos', function () {
    return ("Sobre nós");
});*/

Route::get('/contactos', [ContactoController::class, 'contacto']);
/*Route::get('/contactos', function () {
    return ("Contactos agora");
});*/

