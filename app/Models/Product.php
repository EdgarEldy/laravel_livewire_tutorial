<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Get a category related to products
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Get orders related to a product
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
