<?php

namespace App\Http\Controllers;

use App\Models\MotivoContacto;
use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    //
    public function principal()
    {
        //echo "Principal no PrincipalController";
        //return view ('site.principal');

        $motivo_contacto = MotivoContacto::all();
       /* $motivo_contacto = 
        [
            '1' => 'Dúvida',
            '2' => 'Elogio',
            '3' => 'Reclamação'
        ];*/

        return view('site.principal', ['titulo' => 'Principal(teste)', 'motivo_contacto'=> $motivo_contacto]);
    }
}
