<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

        public function users()
        {
            return $this->belongsTo(User::class);
        }

        public function category()
        {
            return $this->belongsTo(Category::class, 'cat_id');
        }

        public function brand()
        {
            return $this->belongsTo(Brand::class, 'brand_id');
        }
}
