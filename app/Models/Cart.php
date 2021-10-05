<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->/**
         * Get the user that owns the Cart
         *
         * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
         */
        public function users():
        {
            return $this->belongsTo(User::class);
        }
    }
}
