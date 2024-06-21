<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\TesteController;
use App\Http\Controllers\FornecedorController;

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
/**
 * Aula 42: Enviando os parâmetros para os controladores 
 */
Route::get('/teste/{p1}/{p2}', [TesteController::class, 'teste'])->name('teste');

// Aula 43: Enviando os parâmetros para a visualização 
Route::get('/soma/{p1}/{p2}', [TesteController::class, 'soma'])->name('soma');




Route::get('/', function () {
    return ("Teste Principal");
});

//Route::prefix('/site')->group(function(){ //Agrupar as rotas com prefixo 
Route::get('/', [PrincipalController::class, 'principal'])->name('site.index');
Route::get('/sobre-nos', [SobreNosController::class, 'sobreNos'])->name('site.sobrenos');
Route::post('/contactos', [ContactoController::class, 'contacto'])->name('site.contactos');
Route::get('/contactos', [ContactoController::class, 'contacto'])->name('site.contactos');
Route::post('/contactos', [ContactoController::class, 'salvar'])->name('site.salvar');
//});



//Route::prefix('/app')->group(function(){
    Route::get('/login', function(){return 'Login'; })->name('app.login');
    Route::get('/clientes', function(){return 'Clientes'; })->name('app.clientes');
    //Route::get('/fornecedores', function(){return 'Fornecedores'; })->name('app.fornecedores');
    Route::get('/fornecedores', [FornecedorController::class, 'index'])->name('site.fornecedores');
    Route::get('/produtos', function(){return 'Produtos'; })->name('app.produtos');
//});

Route::get('/rota1', function() {
    echo 'Rota 1';
})->name('site.rota1'); 

Route::get('/rota2', function() {
    return redirect()->route('site.rota1'); //Vai encaminhar a rota2 para rota1
})->name('site.rota2'); 

//Route::redirect('/rota2', '/rota1');

/**
 * Caso a rota não existir vai mostrar a mensagem
 */
Route::fallback(function(){
    echo 'A rota acessada não existe. <a href="'.route('site.index').'">clique aqui </a> para ir para a página inicial' ;
}); 



/**
 * ROTAS 
 */
/*Route::get('/sobre-nos', function () {
    return ("Sobre nós");
});*/


/*Route::get('/contactos', function () {
    return ("Contactos agora");
});*/



/**
 * Aula 33: Encaminhando parâmetros para o controlador 
 */
//nome, categoria, assunto, mensagem
/*Route::get('/contactos/{nome?}/{categoria_id?}/{assunto?}/{mensagem?}',  (Ponto de interrogação significa opcional)
        function(
            $nome = 'Desconhecido',  
            $categoria_id = 1, 
            $assunto = 'Sem assunto', 
            $mensagem = 'Mensagem não informada')
{
    echo 'Estamos aqui '.$nome . '-' .$categoria_id. '-'.$assunto. '-'.$mensagem ; 
})->where('categoria_id', '[0-9]+')->where('nome', '[A-Za-z]+');
*/




