<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'invoices';

    protected $fillable = [
        'name',
        'user_id',
        'address',
        'phone',
        'transport_fee',
        'status_id',
        'district_id',
        'total'
    ];
    protected $hidden = [
        'updated_at',
    ];

    protected $with = ['status'];

    public function status()
    {
        return $this->belongsTo(InvoiceStatus::class);
    }

    public function invoice_items()
    {
        return $this->hasMany(InvoiceItem::class);
    }
}
