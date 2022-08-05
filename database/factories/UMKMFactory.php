<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UMKM>
 */
class UMKMFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $nama = $this->faker->company();
        $slug = Str::slug($nama);
        return [
            "nama" => $nama,
            "slug" => $slug,
            "alamat" => $this->faker->address(),
            "no_telp" => $this->faker->phoneNumber(),
            "image" => "template.jpg",
            "deskripsi" => $this->faker->text(),
        ];
    }
}