<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rescue extends Model
{
    protected $table = 'rescues';
    protected $fillable = ['name','address','number','website','sort','updated_at'];
}
