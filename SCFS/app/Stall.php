<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stall extends Model
{
    //
    protected $fillable = ['name' ];
    public function products(){
        return $this->hasMany(Product::class);
    }

    public function orders(){
        return $this->hasMany(Order::class);
    }
}
