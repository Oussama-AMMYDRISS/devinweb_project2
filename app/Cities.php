<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cities extends Model
{
    //
    protected $fillable = [
        'name','partners_id'
    ];

    public function partner(){
        return  $this->hasOne(Partners::class);
    }

    public function delivery()
    {
        return $this->hasMany(Delivery_times::class);
    }
}
