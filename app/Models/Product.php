<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;
    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }
    public function videos()
    {
        return $this->hasMany(ProductVideo::class);
    }
    public function reviews()
    {
        return $this->hasMany(ProductReview::class);
    }
    public function costs()
    {
        return $this->hasMany(ProductCost::class);
    }
    public function ReviewImage()
    {
        return $this->hasMany(ReviewImage::class);
    }
}
