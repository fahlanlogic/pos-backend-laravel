<?php

namespace App\Models;

use Database\Factories\ProductFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /** @use HasFactory<ProductFactory> */
    use HasFactory;

    // Whitelist properti yang boleh diubah ke table database
    protected $fillable = [
        'title',
        'sku',
        'price',
        'stock',
        'category',
        'discount_percentage',
        'description',
    ];
}
