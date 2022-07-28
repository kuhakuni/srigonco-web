<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\KritikSaran>
 */
class KritikSaranFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "nama" => $this->faker->name(),
            "email" => $this->faker->email(),
            "kritik_saran" => $this->faker->paragraph(),
            //
        ];
    }
}
