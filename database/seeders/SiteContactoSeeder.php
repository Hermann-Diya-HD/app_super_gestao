<?php

namespace Database\Seeders;

use App\Models\SiteContacto;
use Database\Factories\SiteContactoFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteContactoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        $contacto = new SiteContacto();
        $contacto->nome = "John Wick";
        $contacto->telefone = "926847125";
        $contacto->email = "jwick@gmail.com";
        $contacto->motivo_contacto = 1;
        $contacto->mensagem = "Seja bem-vindo ao Super Gestão";
        $contacto->save();*/

       // factory(SiteContacto::factory()->count(5)->create());

       //Vai gerar 10 registos aleatórios 
       SiteContacto::factory()->count(20)->create();
    }
}
