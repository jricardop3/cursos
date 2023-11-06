<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
* @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
 */
class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'curso' => $this->faker->unique()->word,
            'imagem'=> $this->faker->imageUrl(400,400),
            'id_user' => User::pluck('id')->random(),
        ];
    }
}
