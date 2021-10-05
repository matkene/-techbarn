<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullname',
        'total_price',
        'orderID',
        'user_id',
        'email',
        'shipping_fee',
        'total_price',
        'orderID'

    ];

        public function users()
        {
            return $this->belongsTo(User::class);
        }

        public function orderdetails()
        {
            return $this->hasMany(OrderDetails::class, 'order_id');
        }
}
