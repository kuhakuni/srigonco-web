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
        Schema::create("pariwisata", function (Blueprint $table) {
            $table->id();
            $table->string("nama", 60);
            $table->string("slug")->unique();
            $table->string("deskripsi");
            $table->string("image")->nullable();
            $table->string("alamat");
            $table->string("no_telp", 25)->nullable();
            $table->string("url_gmaps")->default("#");
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
        Schema::dropIfExists("pariwisata");
    }
};