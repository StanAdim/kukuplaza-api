<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory , HasUuids;
    protected $fillable = [
        'name',
        'price',
        'noOfstars',
        'productImg1',
        'productImg2',
        'productImg3',
        'description',
        'category_id',
    ];
    public function category()
    {
        return $this->belongsTo(ProductCategory::class);
    }

    public function orders() {
        return $this->belongsToMany(Order::class)->withPivot('quantity');
    }
    
    // public function reviews()
    // {
    //     return $this->hasMany(Review::class);
    // }

    public function wishlists()
    {
        return $this->belongsToMany(Wishlist::class);
    }
}
