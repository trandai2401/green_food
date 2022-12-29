<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'products';
    protected $with = ['medias'];

    protected $fillable = [
        'name',
        'price',
        'quantity_sold',
        'left',
        'rating_rate',
        'number_of_reviews',
        'producer',
        'description',
        'category_id',
        'files'
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];
    public function medias()
    {
        return $this->hasMany(Media::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function sumSold()
    {
        $rs = $this->hasMany(CartItem::class)->where('activity', false)->select('product_id', DB::raw('SUM(quantity) as total_quantity'))->groupBy('cart_items.product_id');
        // $sum = 0;
        // foreach ($rs as $row) {
        //     $sum += $row->quantity;
        // }
        // $s = 0;
        return $rs;
    }
}
