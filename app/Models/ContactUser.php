<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUser extends Model
{
    use HasFactory;

    protected $table = 'contact_users';

    protected $fillable = [
        'user_id',
        'instagram',
        'no_tlp',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
