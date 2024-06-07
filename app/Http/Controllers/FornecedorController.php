<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    //

    public function index()
    {

        $fornecedores = ['Admin','Herman', 'Manuel', 'Valente']; 
        $utilizadores = [ 0 => ['nome' => 'Admisn', 'status' => 'S']];  // Matriz 
        $teste = [];
        return view ('app.fornecedor.index', compact('fornecedores', 'utilizadores', 'teste')); 
    }
}
