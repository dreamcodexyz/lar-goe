<?php

namespace Dreamcode\Goe\App\Repositories\Store;

use Illuminate\Database\Eloquent\Model;

class StoreModel extends Model
{
    protected $table = 'stores';
    protected $fillable = ['name', 'code', 'note', 'is_actived'];
}
