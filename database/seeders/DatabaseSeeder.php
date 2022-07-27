<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Berita;
use App\Models\Kategori;
use App\Models\UMKM;
use App\Models\Pariwisata;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $kategori = [
        //     "Politik",
        //     "Masyarakat",
        //     "Kegiatan",
        //     "Budaya",
        //     "Kepemudaan",
        //     "Lainnya",
        // ];
        UMKM::factory(5)->create();
        Pariwisata::factory(5)->create();
        Kategori::factory(5)->create();
        Berita::factory(5)->create();
    }
}
