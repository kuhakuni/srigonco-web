<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pariwisata extends Model
{
    use HasFactory;
    protected $table = "pariwisata";
    protected $fillable = [
        "nama",
        "slug",
        "deskripsi",
        "image",
        "alamat",
        "no_telp",
        "url_gmaps",
    ];
}
