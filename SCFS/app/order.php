<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    //
    public function users(){
        return $this->belongsTo(User::class);
    }
}
