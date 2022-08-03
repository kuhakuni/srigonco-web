<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UMKM extends Model
{
    use HasFactory;
    protected $table = "umkm";
    protected $fillable = [
        "nama",
        "deskripsi",
        "slug",
        "image",
        "alamat",
        "no_telp",
        "url_gmaps",
        "url_ecommerce",
    ];
}
