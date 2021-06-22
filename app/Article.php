<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';
    protected $fillable = ['title','date','label_id','img','text','reference','website','updated_at'];
    
    //關聯一對一
    public function articleLabel()
    {
        return $this->hasOne('App\ArticleLabel','id','label_id');
    }
}
