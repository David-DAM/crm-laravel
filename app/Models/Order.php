<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table="orders";

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function address(){
        return $this->belongsTo(Address::class,'address_id');
    }

    public function shoppingCart(){
        return $this->belongsTo(ShoppingCart::class,'shopping_cart_id');
    }
}
