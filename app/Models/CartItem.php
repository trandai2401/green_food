<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = 'cart_items';

    protected $fillable = [
        'user_id', 'product_id', 'quantity',
    ];
    protected $hidden = [
        'created_at', 'updated_at',
    ];
}
