<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'categories';

    protected $fillable = [
        'name', 'url_image', 'url_icon',
    ];
    protected $with = ['products'];
    public function products()
    {
        return $this->hasMany(Product::class);
    }
    public function getName()
    {
        return $this->name;
    }


    public function get4Product()
    {
        return Product::where('category_id', $this->id)->limit(4)->get();
    }
}
