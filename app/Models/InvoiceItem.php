<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceItem extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'invoice_items';

    protected $fillable = [
        'invoice_id',
        'cart_item_id',
        'price',


    ];
    protected $hidden = [
        'created_at', 'updated_at',
    ];
}
