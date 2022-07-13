<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class visiter extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $primarykey="id";

    public function group()
    {
        return $this->hasMany('App\Models\countries','country_id');
    }


}
