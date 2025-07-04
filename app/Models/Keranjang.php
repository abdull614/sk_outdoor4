<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
    use HasFactory;

    protected $table = 'keranjang'; // nama tabel di database

    protected $fillable = [
        'user_id',
        'produk_id',
        'quantity'
    ];

    // Relasi ke Produk
    public function produk()
    {
        return $this->belongsTo(Produk::class, 'produk_id');
    }

    // Relasi ke User (opsional kalau mau)
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
