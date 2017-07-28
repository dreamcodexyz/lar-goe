<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function parent()
    {
        return $this->belongsTo(Parents::class);
    }

    public function customer_results()
    {
        return $this->hasMany(CustomerResult::class, 'customer_id', 'id');
    }

    public function classes()
    {
        return $this->hasMany(ClassesStudent::class, 'customer_id', 'id');
    }
}
