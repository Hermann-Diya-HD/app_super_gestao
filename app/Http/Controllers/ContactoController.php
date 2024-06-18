<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\SiteContacto;

class ContactoController extends Controller
{
    //
    public function contacto()
    {
       // echo "contacto controller";
       
       return view ('site.contacto');
       
    }

    public function store (Request $request)
    {
        $site_contacto = new SiteContacto();

        $site_contacto->nome = $request->nome; 
        $site_contacto->telefone = $request->telefone; 
        $site_contacto->email = $request->email; 
        $site_contacto->motivo_contacto	 = $request->motivo_contacto; 
        $site_contacto->mensagem = $request->mensagem; 

        $site_contacto->save();


        echo("Salvo com sucesso");

       // echo ("Motivo contacto: ".$request->motivo_contacto);
    }
    

    
}
