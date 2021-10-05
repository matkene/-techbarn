<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    use HasFactory;
    
    protected $fillable = [
    'order_id',
    'user_id',
    'orderNO',
    'product_id',
    'product_name',
    'status',
    'color',
    'shipping_fee',
    'quantity_ordered',
    'unit_price'
    ];

    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function histories()
    {
        return $this->hasMany(OrderHistory::class, 'order_detail_id');
    }

}
