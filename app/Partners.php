<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partners extends Model
{
    //
    protected $fillable = [
        'name'
    ];

    public function city(){
        return  $this->belongsTo(Cities::class);
    }
}
