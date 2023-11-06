<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use League\CommonMark\Node\Block\Paragraph;
use App\Models\User;
use App\Models\Curso;
use App\Models\Tarefa;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Aula>
 */
class AulaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $nome = $this->faker->unique()->sentence();
        return [
            'slug'=>Str::slug($nome),
            'imagem'=> $this->faker->imageUrl(400,400),
            'aula' => $nome,
            'descricao' => $this->faker->word(),
            'id_user' => User::pluck('id')->random(),
            'id_curso' => Curso::pluck('id')->random(),
            
            
            

        ];
    }
}
