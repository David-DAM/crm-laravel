<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductShoppingCart extends Model
{
    use HasFactory;

    protected $table="products_shopping_carts";

    public function shopping_cart(){
        return $this->belongsTo(ShoppingCart::class,'shopping_cart_id');
    }

    public function product(){
        return $this->belongsTo(Product::class,'product_id');
    }

    public function getPriceAttribute(){
        $quantity=$this->quantity;
        $price=$this->product->price;

        return $quantity*$price;
    }


}
