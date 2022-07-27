<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;
    protected $table = "berita";
    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = ["judul", "slug", "image", "isi_berita", "kategori"];

    protected $with = ["kategoris"];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, "id_kategori");
    }
}
