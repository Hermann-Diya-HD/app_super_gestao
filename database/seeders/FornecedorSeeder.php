<?php

namespace Database\Seeders;

use App\Models\Fornecedor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $fornecedor = new Fornecedor(); 

        $fornecedor->nome = "Valente Costa";
        $fornecedor->email = "vcosta@medtech.ao";
        $fornecedor->site = "vcosta.com";
        $fornecedor->uf = "SP";
        $fornecedor->save();


        //Cuidado com o atributo fillable da classe Fornecedor 
        Fornecedor::create([
            'nome' => 'Manuel Vicente', 
            'email' => 'mvicente@gmail.com',
            'site' => 'mvicente.com',
            'uf' => 'RJ'
        ]);

         Fornecedor::create([
            'nome' => 'Valentino Rossi', 
            'email' => 'vrossi@gmail.com',
            'site' => 'vrossi.com',
            'uf' => 'RJ'
        ]);
    }
}
