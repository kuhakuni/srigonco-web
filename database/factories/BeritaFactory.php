<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Berita>
 */
class BeritaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $judul = $this->faker->sentence();
        $slug = Str::slug($judul);
        return [
            "judul" => $judul,
            "slug" => $slug,
            "isi_berita" => $this->faker->paragraphs(3, true),
            "id_kategori" => $this->faker->numberBetween(1, 5),
        ];
    }
}
