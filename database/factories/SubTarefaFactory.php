<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Tarefa;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SubTarefa>
 */
class SubTarefaFactory extends Factory
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
            'titulo' => $nome,
            'descricao' => $this->faker->word(),
            'tarefa' => $this->faker->Paragraph(),
            'conteudotarefa' => $this->faker->word(),
            'video'=> $this->faker->imageUrl(1280,720),
            'conteudovideo' => $this->faker->word(),
            'imagem'=> $this->faker->imageUrl(1280,720),
            'conteudoimagem' => $this->faker->word(),
            'mensagem' => $this->faker->Paragraph(),
            'id_tarefa' => Tarefa::pluck('id')->random(),
            
        ];
    }
}
