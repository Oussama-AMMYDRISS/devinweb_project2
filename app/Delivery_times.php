<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Delivery_times extends Model
{
    //
    protected $fillable = [
        'time','cities_id'
    ];


    public function city()
    {
        return $this->belongsTo(Cities::class);
    }
}
