<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Cart;

class ImgPath extends Model
{
    protected $table = 'img_paths'; // Tablo adını belirtir

    protected $fillable = [
        'cart_id',
        'url',
        'name'
    ];

    public $timestamps = true;

    // İlişki tanımları (Eğer varsa) buraya eklenebilir
    public function cart()
{
    return $this->belongsTo(Cart::class, 'cart_id');
}

}
