<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class giftcard extends Model
{
    use HasFactory;

    protected $fillable = [
        'invoice_no','outlet_id','user_id','unique_invoice_no','order_id','customer_address',
    ];

}
