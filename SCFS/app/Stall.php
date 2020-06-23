<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stall extends Model
{
    //
    protected $fillable = ['name','image_link' ];
    public function products(){
        return $this->hasMany(Product::class);
    }
}
