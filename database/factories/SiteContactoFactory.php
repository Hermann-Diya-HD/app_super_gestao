<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SiteContacto>
 */
class SiteContactoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
  
    public function definition()
    {
        return [
            //
            'nome' => fake()->name(), 
            'telefone' => fake()->phoneNumber(),
            'email' => fake()->unique()->safeEmail(),
            'motivo_contacto' => fake()->numberBetween(1,5) ,
            'mensagem' => fake()->text(200)
        ];
    }
}
