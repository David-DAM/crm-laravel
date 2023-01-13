<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $table="addresses";

    public function getFullDirectionAttribute(){
        $street=$this->street;
        $region=$this->region;
        $postalCode=$this->postal_code;
        return $street." ".$postalCode." ".$region;
    }

}
