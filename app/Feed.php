<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feed extends Model
{
    protected $table = 'feeds';
    protected $fillable = ['date','name','quantity','description','img','address','status_id','updated_at'];

    //關聯一對一
    public function feedStatus()
    {
        return $this->hasOne('App\FeedStatus','id','status_id');
    }
    //多圖片關聯
    public function feedImgs()
    {
        return $this->hasmany('App\FeedImg','feed_id','id');
    }
}
