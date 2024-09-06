<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Cart;

class Like extends Model
{
    protected $table = 'likes'; // Tablo adını belirtir

    protected $fillable = [
        'user_id',
        'cart_id',
        'rating'
    ];

    public $timestamps = true;

    // İlişki tanımları (Eğer varsa) buraya eklenebilir

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function cart()
    {
        return $this->belongsTo(Cart::class, 'cart_id');
    }
}
