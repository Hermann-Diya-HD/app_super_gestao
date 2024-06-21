<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MotivoContacto;

class MotivoContactoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        MotivoContacto::create(['designacao' => 'Dúvida']);
        MotivoContacto::create(['designacao' =>'Elogio']);
        MotivoContacto::create(['designacao' =>'Reclamação']);

        
    }
}
