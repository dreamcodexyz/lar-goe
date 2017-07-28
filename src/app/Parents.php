<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parents extends Model
{
    public function customer()
    {
//        return $this->hasMany(Customer::class, 'parent_id', 'id')->select('id as test','name as test1');
        return $this->hasMany(Customer::class, 'parent_id', 'id');
    }
}
