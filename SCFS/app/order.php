<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    //
    protected $fillable = [ 'user_id',  'cost'];



    public function users(){
        return $this->belongsTo(User::class);
    }

    public function stalls(){
        return $this->belongsTo(Stall::class);
    }

    public function products(){
        return $this->belongsToMany(Product::class)->withPivot('quantity');
    }
}
