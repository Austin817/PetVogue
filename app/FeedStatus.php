<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FeedStatus extends Model
{
    protected $table = 'feed_statuses';
    protected $fillable = ['name','updated_at'];

    public function feeds()
    {
        return $this->hasMany('App\Feed','status_id','id');
    }
}
