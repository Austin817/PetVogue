<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FeedImg extends Model
{
    protected $table = 'feed_imgs';
    protected $fillable = ['feed_id','img','updated_at'];
}
