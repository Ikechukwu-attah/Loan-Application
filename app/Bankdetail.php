<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bankdetail extends Model
{
    //

    public function user(){

        return $this->belongsTo(User::class);
    }
}
