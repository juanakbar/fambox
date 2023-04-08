<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }

    //    route for checkout
    public function getRouteKeyName()
    {
        return "slug";
    }

    //    to store array
    public function setProductIdsAttribute($value)
    {
        $this->attributes["cart_ids"] = json_encode($value);
    }

    public function getTotalPriceAttribute()
    {
        return $this->carts->sum(function ($cart) {
            return $cart->total_price;
        });
    }
}
