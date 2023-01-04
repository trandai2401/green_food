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
        'created_at', 'updated_at',
    ];
}
