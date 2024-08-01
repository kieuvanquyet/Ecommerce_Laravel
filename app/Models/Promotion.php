<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'discount_type', // 'amount' hoặc 'percentage'
        'discount_value', 
        'start_date',
        'end_date',
    ];
    protected $casts = [
        'start_date' => 'datetime',
        'end_date' => 'datetime',
    ];
    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_promotion');
    }
}
