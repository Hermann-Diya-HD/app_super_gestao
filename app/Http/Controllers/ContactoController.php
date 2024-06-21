<?php

namespace App\Http\Controllers;

use App\Models\MotivoContacto;
use Illuminate\Http\Request;

use App\Models\SiteContacto;

class ContactoController extends Controller
{
    //
    public function contacto(Request $request)
    {

        // echo "contacto controller";

        //return view ('site.contacto');
        /*
       $site_contacto = new SiteContacto();

       $site_contacto->fill($request->all());

       $site_contacto->save();   
        // ou
      // $site_contacto->create($request->all());
        echo "Salvo com sucesso "; */
        /*$motivo_contacto = 
        [
            '1' => 'Dúvida',
            '2' => 'Elogio',
            '3' => 'Reclamação'
        ];
        */
        $motivo_contacto = MotivoContacto::all();

        return view('site.contacto', ['titulo' => 'Contacto(teste)', 'motivo_contacto'=> $motivo_contacto]);
    }

    public function salvar(Request $request)
    {

        /* $site_contacto = new SiteContacto();
        
        $site_contacto->nome = $request->nome; 
        $site_contacto->telefone = $request->telefone; 
        $site_contacto->email = $request->email; 
        $site_contacto->motivo_contacto	 = $request->motivo_contacto; 
        $site_contacto->mensagem = $request->mensagem; 

        $site_contacto->save();*/

        //SiteContacto::create($request->all());
        // echo("Salvo com sucesso");

        // echo ("Motivo contacto: ".$request->motivo_contacto);


        $request->validate(
            [
                'nome' => ['required', 'min:3', 'max:40'],
                'telefone'=> 'required',
                'email'=> 'required',
                'motivo_contacto'=> 'required',
                'mensagem'=> 'required',
            ]
        );
    }
}
