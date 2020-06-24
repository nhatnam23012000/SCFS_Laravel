<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'cost','stall_id'];
    //
    public function stall(){
        return $this->belongsTo(Stall::class);
    }
}
