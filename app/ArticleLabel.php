<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleLabel extends Model
{
    protected $table = 'article_labels';
    protected $fillable = ['name','updated_at'];
    
    //關聯多對一
    public function articles()
    {
        return $this->hasMany('App\Article','label_id','id');
    }
}
