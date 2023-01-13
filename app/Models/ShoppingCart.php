<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    use HasFactory;

    protected $table="shopping_carts";

    public function products(){
        return $this->hasMany(ProductShoppingCart::class,'shopping_cart_id');
    }

    public function getTotalPriceAttribute(){
        $products= $this->products;
        $price=0.00;

        foreach ($products as $key => $product) {
            $price+=$product->price;
        }

        return $price;
    }
    
}
