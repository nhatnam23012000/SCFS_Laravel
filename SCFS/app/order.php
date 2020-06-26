<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    //
    public function users(){
        return $this->belongsTo(User::class);
    }

    public function Cart(){
        return $this->hasOne(Cart::class);
    }
}
