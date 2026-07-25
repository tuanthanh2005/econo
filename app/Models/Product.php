<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'sub_category',
        'name',
        'slug',
        'brand',
        'price',
        'old_price',
        'discount',
        'sold',
        'stock',
        'eta',
        'image_path',
        'font_awesome_icon',
        'is_flashsale',
        'is_featured',
        'is_active'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
