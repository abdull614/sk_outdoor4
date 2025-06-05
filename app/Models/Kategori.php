<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategoris'; // opsional jika nama model & tabel sesuai

    protected $fillable = [
        'nama_kategori',
        'deskripsi',
    ];
}
