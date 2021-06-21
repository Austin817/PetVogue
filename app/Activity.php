<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $table = 'activities';
    protected $fillable = ['title','date','timestart','timeend','address','host','people','price','img','text','updated_at'];
}
