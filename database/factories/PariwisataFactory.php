<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pariwisata>
 */
class PariwisataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $nama = $this->faker->country();
        $slug = Str::slug($nama);
        return [
            "nama" => $nama,
            "slug" => $slug,
            "alamat" => $this->faker->address(),
            "no_telp" => $this->faker->phoneNumber(),
        ];
    }
}
