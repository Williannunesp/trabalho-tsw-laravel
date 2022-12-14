<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cliente>
 */
class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "nome" => $this->faker->name(),
            "telefone" => $this->faker->phoneNumber(),
            "telefone2" => $this->faker->phoneNumber(),
            "endereco" => $this->faker->address()
        ];
    }
}
