<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;

class UserRole extends Model
{
    use HasFactory,SoftDeletes;

    protected $table="users_roles";

    public function user(){
        return $this->hasMany(User::class,'id');
    }
}
