<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consult extends Model
{
    public function customer()
    {
        return $this->hasMany(Customer::class, 'id', 'customer_id');
    }
}
