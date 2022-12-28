<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
    public function medias()
    {
        return $this->hasMany(Media::class);
    }
}
