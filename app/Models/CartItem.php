<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = 'cart_items';

    public function product()
    {
        return  $this->belongsTo(Product::class);
    }
    public function payment($invoice_id)
    {
        $this->invoice_items()->save(new InvoiceItem([
            'invoice_id' => $invoice_id,
            'price' => $this->product->price,
        ]));
        $this->activity = 0;
        $this->save();
    }
    public function invoice_items()
    {
        return  $this->hasMany(InvoiceItem::class);
    }

    protected $fillable = [
        'user_id', 'product_id', 'quantity',
    ];
    protected $hidden = [
        'created_at', 'updated_at',
    ];
}
