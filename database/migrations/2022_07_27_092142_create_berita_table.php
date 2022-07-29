<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("berita", function (Blueprint $table) {
            $table->id();
            $table->string("judul", 100)->unique();
            $table->string("slug")->unique();
            $table->string("image")->nullable();
            $table->longText("isi_berita");
            $table->foreignId("id_kategori")->constrained("kategori");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("berita");
    }
};
