<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'cost','image_link','stall_id'];
    //
    public function stall(){
        return $this->belongsTo(Stall::class);
    }
}
