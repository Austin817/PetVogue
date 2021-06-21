<?php

namespace App\Http\Controllers;

use App\Ad;
use App\Article;
use Illuminate\Http\Request;

class ArtileFrontController extends Controller
{
    //文章首頁
    public function articlesIndex(Request $request)
    {
        if ($request->labelId) {
            //如果有type的話,取出對應資料
            $requestid = $request->labelId;
            $articleDetail = Article::where('label_id',$request->labelId)->get();
        }else{
            //如果沒有type的話,取出全部
            $requestid = 0;
            $articleDetail = Article::with('articleLabel')->get();
        }
        $adData = Ad::get();
        return view('front.articles.index',compact('articleDetail','adData','requestid'));
    }

    //文章內頁
    public function articlesContent($id)
    {
        $articleDetail = Article::with('articleLabel')->find($id);
        $adData = Ad::get();
        return view('front.articles.content',compact('articleDetail','adData'));
    }
}
