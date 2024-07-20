<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_id',
        'product_variant_id',
        'quatity',
        'product_name',
        'product_sku',
        'product_img_thumbnail',
        'product_price_regular',
        'product_price_sale',
        'variant_size_name',
        'variant_color_name',
    ];
}
