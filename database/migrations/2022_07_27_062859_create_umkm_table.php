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
        Schema::create("umkm", function (Blueprint $table) {
            $table->id();
            $table->string("nama", 60);
            $table->string("deskripsi")->nullable();
            $table->string("slug")->unique();
            $table->string("alamat");
            $table->string("image")->nullable();
            $table->string("no_telp", 25);
            $table->string("url_gmaps")->default("#");
            $table->string("url_ecommerce")->default("#");

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
        Schema::dropIfExists("umkm");
    }
};
