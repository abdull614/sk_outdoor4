<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'produks';

    protected $fillable = [
        'nama_produk',
        'kategori_id',
        'deskripsi',
        'harga_sewa',
        'stok',
        'gambar',
    ];

    // Relasi: satu produk milik satu kategori
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }

    // hapus gambar di public
    protected static function boot()
    {
        parent::boot();
        static::updating(function($model){
            if($model->isDirty('gambar') && ($model->getOriginal('gambar') !== null)) {
                Storage::disk('public')->delete($model->getOriginal('gambar'));
            }
        });
    }
}
