<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    protected $table = 'houses';
    protected $fillable = ['name','number','img','sort','website','updated_at'];
}
