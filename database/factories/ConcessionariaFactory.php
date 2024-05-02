<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Concessionaria>
 */
class ConcessionariaFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $senha;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome' => fake()->company(),
            'sigla' => fake()->randomLetter(),
            'cnpj' => fake()->cnpj()
        ];
    }
}
