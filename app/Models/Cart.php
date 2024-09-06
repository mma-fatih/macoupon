<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ImgPath;

class Cart extends Model
{
    protected $table = 'carts'; 

    protected $fillable = [
        'title',
        'description',
        'phone',
        'map_lat',
        'map_long',
        'discount',
        'menu',
        'brand_like',
        'category',
        'position',
        'status'
    ];

    // Eğer `timestamps` sütunlarını kullanmak istemiyorsanız, bu özelliği kapatabilirsiniz.
    public $timestamps = true;

    public function imgPaths()
    {
        return $this->hasMany(ImgPath::class, 'cart_id');
    }

}
