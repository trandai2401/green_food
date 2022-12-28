<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'media';

    protected $fillable = [
        'name',
        'product_id',
        'type_media_id',
        'url',
    ];
}
