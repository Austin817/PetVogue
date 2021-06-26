<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IndexSwiper extends Model
{
    protected $table = 'index_swipers';
    protected $fillable = ['title','number','img1','img2','sort','text','website','updated_at'];
}
