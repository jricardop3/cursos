<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Aula;
use App\Models\SubTarefa;


/**
* @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tarefa>
 */
class TarefaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        
        return [           
            'titulo' => $this->faker->word(),
            'id_aula' => Aula::pluck('id')->random(),
            
        ];
    }
    
}
