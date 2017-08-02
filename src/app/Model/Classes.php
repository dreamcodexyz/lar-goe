<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    public function student_ids()
    {
        return $this->hasMany(ClassesStudent::class, 'class_id', 'id')->select('customer_id');
    }

}
