<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catalogue extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'cover',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        
    ];

    public function products(){
        return $this->hasMany(Product::class);
    }
}

