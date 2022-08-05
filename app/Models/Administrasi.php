<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrasi extends Model
{
    use HasFactory;
    protected $table = "administrasi";
    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = [
        "nama",
        "file",
        "deskripsi",
    ];
}
