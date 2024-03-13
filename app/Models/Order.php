<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['order_number', 'user_id', 'sub_total', 'total_amount', 'quantity', 'customerName', 'customer_id', 'email', 'phone', 'country', 'address', 'productName', 'status'];



    public function customers():BelongsTo
    {
     
   return $this->belongsTo(Customer::class,'customer_id');
    }
}


