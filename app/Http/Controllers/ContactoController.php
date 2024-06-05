<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactoController extends Controller
{
    //
    public function contacto()
    {
       // echo "contacto controller";
       return view ('site.contacto');
    }
}
