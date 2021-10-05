<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
