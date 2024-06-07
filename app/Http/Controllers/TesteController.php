<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    //

    public function teste ($p1, $p2)
    {
        echo "A Soma de $p1 e $p2 é igual a  ".($p1+$p2);
    }


    public function soma ($p1, $p2)    
    {
        //return view ('site.teste', ['p1' => $p1, 'p2' => $p2]); //Array associativo 
        $soma = $p1 + $p2; 
        return view ('site.teste', compact('p1', 'p2', 'soma')); //compact 
       /* return view ('site.teste')
                    ->with('p1', $p1)
                    ->with('p2', $p2)
                    ->with('soma', ($p1+$p2));*/// 
    }
}
