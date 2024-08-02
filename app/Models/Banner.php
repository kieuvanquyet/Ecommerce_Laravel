<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'banner_image1',
        'banner_image2',
        'banner_image3',
        'is_active'
    ];
}
