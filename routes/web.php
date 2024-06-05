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

//nome, categoria, assunto, mensagem
Route::get('/contactos/{nome?}/{categoria_id?}/{assunto?}/{mensagem?}', 
        function(
            $nome = 'Desconhecido', 
            $categoria_id = 1, 
            $assunto = 'Sem assunto', 
            $mensagem = 'Mensagem não informada')
{
    echo 'Estamos aqui '.$nome . '-' .$categoria_id. '-'.$assunto. '-'.$mensagem ; 
})->where('categoria_id', '[0-9]+')->where('nome', '[A-Za-z]+');





