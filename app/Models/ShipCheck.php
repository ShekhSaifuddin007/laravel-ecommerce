<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShipCheck extends Model
{
    protected $guarded = [];

    public function orders()
    {
        return $this->hasMany(Order::class, 'ship_check_id');
    }
}
