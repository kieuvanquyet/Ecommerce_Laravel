<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;
    protected $fillable = [
        'cart_id', 
        'product_variant_id', 
        'quatity', 
        'created_at', 
        'updated_at'
    ];

    // Định nghĩa các mối quan hệ (nếu có)
    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }

    public function productVariant()
    {
        return $this->belongsTo(ProductVariant::class);
    }
    public function product()
{
    return $this->belongsTo(Product::class);
}
}
